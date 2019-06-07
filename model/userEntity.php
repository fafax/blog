<?php

namespace App;

class userEntity
{
    private $id_user;
    private $first_name;
    private $last_name;
    private $email;
    private $url_img;
    private $create_date;
    private $password;
    private $Role_id_role;

    public function __construct($lastname, $firstname, $mail, $pwd, $role = 2)
    {
        $this->setLastName($lastname);
        $this->setFirstName($firstname);
        $this->setEmail($mail);
        $this->setPassword($pwd);
        $this->setRoleIdRole($role);
        $this->setCreateDate(date('Y-m-d'));
    }

    /**
     * Get the value of id_user.
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Get the value of first_name.
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of email.
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of url_img.
     */
    public function getUrlImg()
    {
        return $this->url_img;
    }

    /**
     * Set the value of url_img.
     *
     * @return self
     */
    public function setUrlImg($url_img)
    {
        $this->url_img = $url_img;

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
     * Get the value of password.
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Role_id_role.
     */
    public function getRoleIdRole()
    {
        return $this->Role_id_role;
    }

    /**
     * Set the value of Role_id_role.
     *
     * @return self
     */
    public function setRoleIdRole($Role_id_role)
    {
        $this->Role_id_role = $Role_id_role;

        return $this;
    }

    /**
     * Get the value of last_name.
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }
}
