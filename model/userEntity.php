<?php

namespace App;

class UserEntity
{
    private $id_user;
    private $first_name;
    private $last_name;
    private $email;
    private $url_img;
    private $create_date;
    private $password;
    private $Role_id_role;

    /**
     * Get the value of id_user.
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * Get the value of first_name.
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name.
     */
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * Get the value of last_name.
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name.
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * Get the value of email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email.
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get the value of url_img.
     */
    public function getUrlImg(): string
    {
        return $this->url_img;
    }

    /**
     * Set the value of url_img.
     */
    public function setUrlImg(string $url_img): void
    {
        $this->url_img = $url_img;
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
     * Get the value of password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password.
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * Get the value of Role_id_role.
     */
    public function getRoleIdRole(): int
    {
        return $this->Role_id_role;
    }

    /**
     * Set the value of Role_id_role.
     */
    public function setRoleIdRole(int $Role_id_role): void
    {
        $this->Role_id_role = $Role_id_role;
    }
}
