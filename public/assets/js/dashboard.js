const page = document.getElementById("page");
const page2 = document.getElementById("page2");
const page3 = document.getElementById("page3");
const page4 = document.getElementById("page4");


function dashboard(){
   if(!page.classList.contains("visible")){
      page.classList.add("visible");
   }
   page2.classList.remove("visible");
   page3.classList.remove("visible");
   page4.classList.remove("visible");
   
}   

function users() {
   if (!page2.classList.contains("visible")) {
      page2.classList.add("visible");
   }
   page.classList.remove("visible");
   page3.classList.remove("visible");
   page4.classList.remove("visible");
} 
function articles() {
   if (!page3.classList.contains("visible")) {
      page3.classList.add("visible");
   }
   page2.classList.remove("visible");
   page.classList.remove("visible");
   page4.classList.remove("visible");
} 

function comments() {
   if (!page4.classList.contains("visible")) {
      page4.classList.add("visible");
   }
   page2.classList.remove("visible");
   page.classList.remove("visible");
   page3.classList.remove("visible");
} 

const tabInwait = document.getElementById("inwait-tab");
const tabValid = document.getElementById("valid-tab");
const tabInvalid = document.getElementById("invalid-tab");
const inwait = document.getElementById("inwait");
const valid = document.getElementById("valid");
const invalid = document.getElementById("invalid");

function f_inwait() {
   if (!tabInwait.classList.contains("active")) {
      tabInwait.classList.add("active");
      inwait.classList.add("active");
   }
   tabValid.classList.remove("active");
   tabInvalid.classList.remove("active");
   valid.classList.remove("active");
   invalid.classList.remove("active");
}

function f_valid() {
   if (!tabValid.classList.contains("active")) {
      tabValid.classList.add("active");
      valid.classList.add("active");
   }
   tabInwait.classList.remove("active");
   tabInvalid.classList.remove("active");
   inwait.classList.remove("active");
   invalid.classList.remove("active");
}

function f_invalid() {
   if (!tabInvalid.classList.contains("active")) {
      tabInvalid.classList.add("active");
      invalid.classList.add("active");
   }
   tabInwait.classList.remove("active");
   tabValid.classList.remove("active");
   inwait.classList.remove("active");
   valid.classList.remove("active");
}