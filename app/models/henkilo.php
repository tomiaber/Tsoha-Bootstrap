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
    }
    
    public static function all(){
        $query = DB::connection()->prepare('SELECT * FROM henkilo ');
    // Suoritetaan kysely
    $query->execute();
    // Haetaan kyselyn tuottamat rivit
    $rows = $query->fetchAll();
    $henkilot = array();

    // Käydään kyselyn tuottamat rivit läpi
    foreach($rows as $row){
      // Tämä on PHP:n hassu syntaksi alkion lisäämiseksi taulukkoon :)
      $henkilot[] = new Henkilo(array(
            'henkilonumero'=>$row['henkilonumero'],
            'etunimet' => $row['etunimet'],
            'sukunimi' => $row['sukunimi'],
            'puhelinnumero' => $row['puhelinnumero'],
            'sahkopostiosoite' => $row['sahkopostiosoite'],
            'postinumero' => $row['postinumero'],
            'lahiosoite' => $row['lahiosoite'],
            'muutatietoa' => $row['muutatietoa']
      ));
    }
    return $henkilot;
    }
    
    public static function jasenet($ryhmannimi){
            $query = DB::connection()->prepare('SELECT * FROM henkilo, henkiloidenryhmat WHERE henkilo.henkilonumero=henkiloidenryhmat.henkilonumero and ryhmannimi=:ryhmannimi');
            $query->execute(array('ryhmannimi'=>$ryhmannimi));
            
            
    }
    
    public function delete(){

        $query = DB::connection()->prepare('DELETE from Henkilo where henkilonumero=:henkilonumero');
        $query->execute(array('henkilonumero' => $this->henkilonumero));

    } 
    
    public function save(){
    
    $query = DB::connection()->prepare('INSERT INTO Henkilo (etunimet, sukunimi, puhelinnumero, sahkopostiosoite, postinumero, lahiosoite, muutatietoa) VALUES (:etunimet, :sukunimi, :puhelinnumero, :sahkopostiosoite, :postinumero, :lahiosoite, :muutatietoa)');
    $query->execute(array('etunimet' => $this->etunimet, 'sukunimi' => $this->sukunimi, 'puhelinnumero' => $this->puhelinnumero,'sahkopostiosoite' => $this->sahkopostiosoite, 'postinumero' => $this->postinumero, 'lahiosoite' => $this->lahiosoite,'muutatietoa' => $this->muutatietoa));
   
    }



    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

