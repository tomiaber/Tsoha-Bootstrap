<?php

class Henkilo extends BaseModel{

   public $henkilonumero, $etunimet, $sukunimi, $puhelinnumero, $sahkopostiosoite, $postinumero, $lahiosoite, $muutatietoa; 
   public function __construct($attributes){
   parent::__construct($attributes);
  }
  
public static function hae($henkilonumero){
     $query = DB::connection()->prepare('SELECT * FROM henkilo WHERE henkilonumero = :henkilonumero LIMIT 1');
    $query->execute(array('henkilonumero' => $henkilonumero));
    $row = $query->fetch();

    if($row){
      $henkilo = new Henkilo(array(
      'henkilonumero'=>$row['henkilonumero'],
      'etunimet' => $row['etunimet'],
      'sukunimi' => $row['sukunimi'],
      'puhelinnumero' => $row['puhelinnumero'],
      'sahkopostiosoite' => $row['sahkopostiosoite'],
      'postinumero' => $row['postinumero'],
      'lahiosoite' => $row['lahiosoite'],
      'muutatietoa' => $row['muutatietoa']
    ));
    
    return $henkilo;
    }
    return null;
}}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

