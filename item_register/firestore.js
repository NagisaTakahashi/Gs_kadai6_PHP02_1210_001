// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-app.js";


// Your web app's Firebase configuration
const firebaseConfig = {
  //GitHubアップロード用に削除
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

//Storage
import { getStorage, ref as sRef, uploadBytesResumable, getDownloadURL } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-storage.js";

//Cloud firestore database
import { getFirestore, doc, getDoc, setDoc, collection, addDoc } from "https://www.gstatic.com/firebasejs/9.1.0/firebase-firestore.js";
const clouddb = getFirestore();




var files = [];
var reader = new FileReader();

var namebox = document.getElementById('namebox');
var extlab = document.getElementById('extlab');
var myimg = document.getElementById('myimg');
var proglab = document.getElementById('upprogress');
var SelBtn = document.getElementById('selbtn');
var upbtn = document.getElementById('upbtn');
var DownBtn = document.getElementById('downbtn');

var input= document.createElement('input');
input.type = 'file';

input.onchange = e => {
  files = e.target.files;

  var extention = GetFileExt(files[0]);
  var name = GetFileName(files[0]);

  namebox.value = name;
  extlab.innerHTML = extention;

  reader.readAsDataURL(files[0]);
};

reader.onload = function(){
  myimg.src = reader.result;
};

// ------file selection-----------


SelBtn.onclick = function(){
  input.click();
}


function GetFileExt(file) {
  var temp = file.name.split('.');
  var ext = temp.slice((temp.length-1),(temp.length));
  return '.' + ext[0];
}

function GetFileName(file) {
  var temp = file.name.split('.');
  var fname = temp.slice(0,-1).join('.');
  return fname;
}



// ------upload process-----------

async function UploadProcess(){
  var ImgToUpload = files[0];
  var ImgName = namebox.value + extlab.innerHTML;
  const metaData = {
    contentType: ImgToUpload.type
  }

  const storage = getStorage();

  const storageRef = sRef(storage, "Images/"+ImgName);
  

  const UploadTask = uploadBytesResumable(storageRef, ImgToUpload, metaData);

  UploadTask.on('state-changed', (snapshot)=>{
      var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
      proglab.innerHTML = "Upload" + progress + "%";
    },

    (error) => {
      alert("error! image not uploaded!");
    },

    ()=>{
      getDownloadURL(UploadTask.snapshot.ref).then((downloadURL)=>{
        console.log(downloadURL);
        SaveURLtoFirestore(downloadURL);
      });
    }
  );
}

// ------function for firestore database-----------

async function SaveURLtoFirestore(url){
  var name = namebox.value;
  var ext = extlab.innerHTML;

  var ref = doc(clouddb, "ImageLinks/"+name);

  await setDoc(ref,{
    ImageName: (name+ext),
    ImageURL: url
  })
}

async function GetImagefromFirestore(){

  var name = namebox.value;

  var ref = doc(clouddb, "ImageLinks/"+name);

  const docSnap = await getDoc(ref);

  if(docSnap.exists()){
    myimg.src = docSnap.data().ImageURL;
  }
}




upbtn.onclick = UploadProcess;

DownBtn.onclick = GetImagefromFirestore;



//気づき！同じ名前でファイルをアップロードすると上書きされてしまう（KEYがファイル名？）なので、本番運用の際は、ファイル名がかぶらないように一意のユニークIDを降る必要がありそう。 




