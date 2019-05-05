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

