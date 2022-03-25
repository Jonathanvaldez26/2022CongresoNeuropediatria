<?php

namespace App\models;
defined("APPPATH") or die("Access denied");

use \Core\Database;
use \Core\MasterDom; 
use \App\interfaces\Crud;
use \App\controllers\UtileriasLog;

class Register
{

    public static function insert($register)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
        INSERT INTO utilerias_administradores VALUES(null,:prefijo, :nombre, :apellidop, :apellidom, :email, :codigo_beca, :especialidad, :telefono, :id_pais, :id_estado, :nombreconstancia, :status)                        
sql;

        $parametros = array(
            ':prefijo' => $register->_prefijo,
            ':nombre' => $register->_nombre,
            ':apellidop' => $register->_apellidop,
            ':apellidom' => $register->_apellidom,
            ':email' => $register->_email,
            ':codigo_beca' => '',
            ':especialidad' => $register->_especialidad,
            ':telefono' => $register->_telefono,
            ':id_pais' => $register->_pais,
            ':id_estado' => $register->_estado,
            ':nombreconstancia' => $register->_nombreconstancia,
            ':status' => 1
        );

        $id = $mysqli->insert($query, $parametros);
        $accion = new \stdClass();
        $accion->_sql = $query;
        $accion->_parametros = $parametros;
        $accion->_id = $id;

        return $id;
    }

    public static function getByCost($pais){
        $mysqli = Database::getInstance(true);
        $query =<<<sql
         SELECT c.cost_enero_marzo FROM categorias c 
         JOIN categorias_costos cc ON cc.id_categoria = c.id_categoria 
         WHERE cc.id_pais = $pais;

sql;
        return $mysqli->queryOne($query);
    }

    public static function getCountryAll()
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
      SELECT * FROM paises ORDER BY country ASC
sql;
        return $mysqli->queryAll($query);
    }

    public static function getState($pais)
    {
        $mysqli = Database::getInstance();
        $query = <<<sql
     SELECT * FROM estados WHERE id_pais = $pais;
sql;
        return $mysqli->queryAll($query);
    }
}
