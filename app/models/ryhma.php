<?php
class Ryhma extends BaseModel{
    // ...
public $ryhmannimi, $lisatietoja; 
    public function __construct($attributes){
    parent::__construct($attributes);
  }

public static function all(){
    $query = DB::connection()->prepare('SELECT * FROM ryhma');
    // Suoritetaan kysely
    $query->execute();
    // Haetaan kyselyn tuottamat rivit
    $rows = $query->fetchAll();
    $ryhmat = array();

    // Käydään kyselyn tuottamat rivit läpi
    foreach($rows as $row){
      // Tämä on PHP:n hassu syntaksi alkion lisäämiseksi taulukkoon :)
      $ryhmat[] = new Ryhma(array(
        'ryhmannimi' => $row['ryhmannimi'],
        'tietoa' => $row['tietoa'],
      ));
    }
    return $ryhmat;
    }

public function save(){
    // Lisätään RETURNING id tietokantakyselymme loppuun, niin saamme lisätyn rivin id-sarakkeen arvon
    $query = DB::connection()->prepare('INSERT INTO Ryhma (ryhmannimi, tietoja) VALUES (:ryhmannimi, :tietoja)');
    // Muistathan, että olion attribuuttiin pääse syntaksilla $this->attribuutin_nimi
   
  }


}

