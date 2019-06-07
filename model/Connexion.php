<?php

namespace App;

require_once '../env.php';

use PDO;

class Connexion
{
    public function getBd(): PDO
    {
        $bd = new PDO('mysql:host='.Env::$host.';dbname='.Env::$dbName.';charset=utf8', Env::$login, Env::$pwd);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        return $bd;
    }
}
