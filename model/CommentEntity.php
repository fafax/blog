<?php

class CommentEntity 
{
   private $id_comment;
   private $text;
   private $status_id_status;
   private $post_id_post;
   private $user_id_user;


   /**
    * Get the value of id_comment
    */ 
   public function getId_comment()
   {
      return $this->id_comment;
   }

   /**
    * Get the value of text
    */ 
   public function getText()
   {
      return $this->text;
   }

   /**
    * Set the value of text
    *
    * @return  self
    */ 
   public function setText($text)
   {
      $this->text = $text;

      return $this;
   }

   /**
    * Get the value of status_id_status
    */ 
   public function getStatus_id_status()
   {
      return $this->status_id_status;
   }

   /**
    * Set the value of status_id_status
    *
    * @return  self
    */ 
   public function setStatus_id_status($status_id_status)
   {
      $this->status_id_status = $status_id_status;

      return $this;
   }

   /**
    * Get the value of post_id_post
    */ 
   public function getPost_id_post()
   {
      return $this->post_id_post;
   }

   /**
    * Set the value of post_id_post
    *
    * @return  self
    */ 
   public function setPost_id_post($post_id_post)
   {
      $this->post_id_post = $post_id_post;

      return $this;
   }

   /**
    * Get the value of user_id_user
    */ 
   public function getUser_id_user()
   {
      return $this->user_id_user;
   }

   /**
    * Set the value of user_id_user
    *
    * @return  self
    */ 
   public function setUser_id_user($user_id_user)
   {
      $this->user_id_user = $user_id_user;

      return $this;
   }
}