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
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * Get the value of title.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of lede.
     */
    public function getLede()
    {
        return $this->lede;
    }

    /**
     * Set the value of lede.
     *
     * @return self
     */
    public function setLede($lede)
    {
        $this->lede = $lede;

        return $this;
    }

    /**
     * Get the value of text.
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text.
     *
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of url_image.
     */
    public function getUrlImage()
    {
        return $this->url_image;
    }

    /**
     * Set the value of url_image.
     *
     * @return self
     */
    public function setUrlImage($url_image)
    {
        $this->url_image = $url_image;

        return $this;
    }

    /**
     * Get the value of create_date.
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Set the value of create_date.
     *
     * @return self
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;

        return $this;
    }

    /**
     * Get the value of user_id_user.
     */
    public function getUserIdUser()
    {
        return $this->User_id_user;
    }

    /**
     * Set the value of user_id_user.
     *
     * @return self
     */
    public function setUserIdUser($user_id_user)
    {
        $this->User_id_user = $user_id_user;

        return $this;
    }
}
