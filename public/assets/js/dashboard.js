
const pageDashboard = document.getElementById("pageDashboard");
const pageUsers = document.getElementById("pageUsers");
const pageArticles = document.getElementById("pageArticles");
const pageComments = document.getElementById("pageComments");

const tabInwait = document.getElementById("inwait-tab");
const tabValid = document.getElementById("valid-tab");
const tabInvalid = document.getElementById("invalid-tab");
const inwait = document.getElementById("inwait");
const valid = document.getElementById("valid");
const invalid = document.getElementById("invalid");

const pageTab = [pageDashboard, pageUsers, pageArticles, pageComments]

const tabComment = [tabInwait, tabValid, tabInvalid, inwait, valid, invalid, pageComments]

function changePage(page) {
   if (pageTab.includes(page)) {
      pageTab.forEach(element => {
         if (element.classList.contains("visible"))
            element.classList.remove("visible");
      });
      page.classList.add("visible");
   }
   if (tabComment.includes(page)) {
      tabComment.forEach(element => {
         if (element.classList.contains("active"))
            element.classList.remove("active");
      });
      if (page === pageComments) {
         inwait.classList.add("active");
      }
      page.classList.add("active");
      switch (page) {
         case tabValid:
            valid.classList.add("active");
            pageComments.classList.add("visible");
            break;
         case tabInvalid:
            invalid.classList.add("active");
            pageComments.classList.add("visible");
            break;
         default:
            tabInwait.classList.add("active");
      }
   }

}


function show() {
   // on récupère l'ancre dans l'URL
   let anchor = window.location.hash;
   anchor = anchor.substring(1, anchor.length);
   console.log(anchor)
   let page;
   switch (anchor) {
      case "dashboard":
         page = pageDashboard;
         break;
      case "users":
         page = pageUsers;
         break;
      case "articles":
         page = pageArticles;
         break;
      case "comments":
         page = pageComments;
         break;
      case "commentsValid":
         page = tabValid;
         break;
      case "commentsInvalid":
         page = tabInvalid;
         break;
      default:
         page = pageDashboard;
         break;
   }
   changePage(page);
}
window.addEventListener("DOMContentLoaded", show)
window.addEventListener("hashchange", show, false);
