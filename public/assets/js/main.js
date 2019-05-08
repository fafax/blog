"use strict";

const btnAddComment = document.getElementById("btn-add-comment");
const allBtnComment = document.getElementById("btn-comment");
const btnCancel = document.getElementById("btn-cancel");





function addComment(){
   allBtnComment.classList.remove("invisible");
   btnAddComment.classList.add("invisible")
}

function cancelComment(event){
   event.preventDefault();
   event.stopPropagation();
   allBtnComment.classList.add("invisible");
   btnAddComment.classList.remove("invisible");
}

if (btnCancel){
   btnCancel.addEventListener("click", cancelComment);
}
