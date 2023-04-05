<?php

class DB
{
    public static function connexion()
    {
        try {
            $db = new PDO("mysql:host=localhost;port=3306;dbname=recettes", "root", "");
            //afficher les erreurs 
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\Throwable $th) {
            die("<div>erreur de conexion</div><div>{$th->getMessage()}</div>");
        }
    }
}
