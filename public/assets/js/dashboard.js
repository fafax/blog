
const pageDashboard = document.getElementById("pageDashboard");
const pageUsers = document.getElementById("pageUsers");
const pageArticles = document.getElementById("pageArticles");
const pageComments = document.getElementById("pageComments");

function dashboard() {
   if (!pageDashboard.classList.contains("visible")) {
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

function fComments() {
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

function fInwait() {
   if (!tabInwait.classList.contains("active")) {
      tabInwait.classList.add("active");
      inwait.classList.add("active");
   }
   tabValid.classList.remove("active");
   tabInvalid.classList.remove("active");
   valid.classList.remove("active");
   invalid.classList.remove("active");
}

function fValid() {
   if (!tabValid.classList.contains("active")) {
      tabValid.classList.add("active");
      valid.classList.add("active");
   }
   tabInwait.classList.remove("active");
   tabInvalid.classList.remove("active");
   inwait.classList.remove("active");
   invalid.classList.remove("active");
}

function fInvalid() {
   if (!tabInvalid.classList.contains("active")) {
      tabInvalid.classList.add("active");
      invalid.classList.add("active");
   }
   tabInwait.classList.remove("active");
   tabValid.classList.remove("active");
   inwait.classList.remove("active");
   valid.classList.remove("active");
}

function comments() {
   fComments();
   fInwait();
}
function commentsValid() {
   fComments();
   fValid();
}

function commentsInvalid() {
   fComments();
   fInvalid();
}

function callFunction(functionName) {
   eval(`${functionName}()`)
}

let rFunction;

function show() {
   // on récupère l'ancre dans l'URL
   let anchor = window.location.hash;
   anchor = anchor.substring(1, anchor.length);
   var rFunction;
   switch (anchor) {
      case "dashboard":
         rFunction = "dashboard";
         break;
      case "users":
         rFunction = "users";
         break;
      case "articles":
         rFunction = "articles";
         break;
      case "comments":
         rFunction = "comments";
         break;
      case "commentsValid":
         rFunction = "commentsValid";
         break;
      case "commentsInvalid":
         rFunction = "commentsInvalid";
         break;
      default:
         rFunction = "dashboard";
         break;
   }
   callFunction(rFunction);
}
window.addEventListener("DOMContentLoaded", show)
window.addEventListener("hashchange", show, false);
