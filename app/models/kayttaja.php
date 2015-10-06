<?php

class Kayttaja extends BaseModel{
    public $kayttajatunnus, $salasana; 
    
    public function __construct($attributes){
        parent::__construct($attributes);
    }
    
    public function tunnistaudu($tunnistautuja){
        $query = DB::connection()->prepare('SELECT * FROM Kayttajat WHERE kayttajatunnus = :kayttajatunnus AND salasana = :salasana LIMIT 1');
    
        $query->execute(array('kayttajatunnus' => $tunnistautuja['username'], 'salasana' => $tunnistautuja['password']));
        Kint::dump($tunnistautuja);
        $row = $query->fetch();
        if($row){
        return $tunnistautuja; 
        }
        else{
        return null;
        }    
    
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

