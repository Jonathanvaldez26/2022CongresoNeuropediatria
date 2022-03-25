<?php
namespace App\models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Home{



    public static function getbyUser($user){

        //return $user;

        $mysqli = Database::getInstance(true);
        $query =<<<sql
        SELECT * FROM utilerias_administradores 
        WHERE usuario = '$user';
    sql;
        return $mysqli->queryOne($query);
    }


    public static function updateDocument($accidente){
      $mysqli = Database::getInstance(true);
      $query=<<<sql
      UPDATE utilerias_administradores SET
      pay_ticket = :pay_ticket,
      nota = :nota,
      sitio = 2
      WHERE usuario = :usuario
sql;
        $parametros = array(
            ':pay_ticket' => $accidente->_url,
            ':nota' => $accidente->_note,
            ':usuario' => $accidente->_user

        );

      $accion = new \stdClass();
      $accion->_sql= $query;
      $accion->_parametros = $parametros;

    return $mysqli->update($query, $parametros);
    }


}