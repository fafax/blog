window.addEventListener("DOMContentLoaded", show)
window.addEventListener("hashchange", show, false);




const pageDashboard = document.getElementById("pageDashboard");
const pageUsers = document.getElementById("pageUsers");
const pageArticles = document.getElementById("pageArticles");
const pageComments = document.getElementById("pageComments");

function show(){
   // on récupère l'ancre dans l'URL
   var anchor = window.location.hash;
   anchor = anchor.substring(1, anchor.length);
   switch (anchor) {
      case "dashboard":
         dashboard();
         break;
      case "users":
         users();
         break;
      case "articles":
         articles();
         break;
      case "comments":
         comments();
         f_inwait();
         break;
      case "commentsValid":
         comments();
         f_valid();
         break;
      case "commentsInvalid":
         comments();
         f_invalid();
         break;
      default:
         dashboard();
         break;
   }
}


function dashboard(){
   if (!pageDashboard.classList.contains("visible")){
      pageDashboard.classList.add("visible");
   }
   pageUsers.classList.remove("visible");
   pageArticles.classList.remove("visible");
   pageComments.classList.remove("visible");
   
}   

function users() {
   if (!pageUsers.classList.contains("visible")) {
      pageUsers.classList.add("visible");
   }
   pageDashboard.classList.remove("visible");
   pageArticles.classList.remove("visible");
   pageComments.classList.remove("visible");
} 
function articles() {
   if (!pageArticles.classList.contains("visible")) {
      pageArticles.classList.add("visible");
   }
   pageUsers.classList.remove("visible");
   pageDashboard.classList.remove("visible");
   pageComments.classList.remove("visible");
} 

function comments() {
   if (!pageComments.classList.contains("visible")) {
      pageComments.classList.add("visible");
   }
   pageUsers.classList.remove("visible");
   pageDashboard.classList.remove("visible");
   pageArticles.classList.remove("visible");
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
