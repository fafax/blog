<?php

namespace App;

class CommentEntity
{
    private $id_comment;
    private $text;
    private $status_id_status;
    private $post_id_post;
    private $user_id_user;

    /**
     * Get the value of id_comment.
     */
    public function getId_comment(): int
    {
        return $this->id_comment;
    }

    /**
     * Get the value of text.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set the value of text.
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * Get the value of status_id_status.
     */
    public function getStatusIdStatus(): int
    {
        return $this->status_id_status;
    }

    /**
     * Set the value of status_id_status.
     */
    public function setStatusIdStatus(int $status_id_status): void
    {
        $this->status_id_status = $status_id_status;
    }

    /**
     * Get the value of post_id_post.
     */
    public function getPostIdPost(): int
    {
        return $this->post_id_post;
    }

    /**
     * Set the value of post_id_post.
     */
    public function setPostIdPost(int $post_id_post): void
    {
        $this->post_id_post = $post_id_post;
    }

    /**
     * Get the value of user_id_user.
     */
    public function getUserIdUser(): int
    {
        return $this->user_id_user;
    }

    /**
     * Set the value of user_id_user.
     */
    public function setUserIdUser(int $user_id_user): void
    {
        $this->user_id_user = $user_id_user;
    }
}
