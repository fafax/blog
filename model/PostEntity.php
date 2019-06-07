<?php

namespace App;

class PostEntity
{
    private $id_post;
    private $title;
    private $lede;
    private $text;
    private $url_image;
    private $create_date;
    private $User_id_user;

    /**
     * Get the value of id_post.
     */
    public function getIdPost(): int
    {
        return $this->id_post;
    }

    /**
     * Get the value of title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title.
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Get the value of lede.
     */
    public function getLede(): string
    {
        return $this->lede;
    }

    /**
     * Set the value of lede.
     */
    public function setLede(string $lede): void
    {
        $this->lede = $lede;
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
     * Get the value of url_image.
     */
    public function getUrlImage(): ?string
    {
        return $this->url_image;
    }

    /**
     * Set the value of url_image.
     */
    public function setUrlImage(string $url_image): void
    {
        $this->url_image = $url_image;
    }

    /**
     * Get the value of create_date.
     */
    public function getCreateDate(): string
    {
        return $this->create_date;
    }

    /**
     * Set the value of create_date.
     */
    public function setCreateDate(string $create_date): void
    {
        $this->create_date = $create_date;
    }

    /**
     * Get the value of user_id_user.
     */
    public function getUserIdUser(): int
    {
        return $this->User_id_user;
    }

    /**
     * Set the value of user_id_user.
     */
    public function setUserIdUser(int $user_id_user): void
    {
        $this->User_id_user = $user_id_user;
    }
}
