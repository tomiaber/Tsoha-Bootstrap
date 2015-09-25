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
        'lisatietoja' => $row['tietoa'],
      ));
    }
    return $ryhmat;
    }

public function save(){
    // Lisätään RETURNING id tietokantakyselymme loppuun, niin saamme lisätyn rivin id-sarakkeen arvon
    $query = DB::connection()->prepare('INSERT INTO Ryhma (ryhmannimi, tietoa) VALUES (:ryhmannimi, :tietoja)');
    // Muistathan, että olion attribuuttiin pääse syntaksilla $this->attribuutin_nimi
    $query->execute(array('ryhmannimi' => $this->ryhmannimi, 'tietoja' => $this->lisatietoja));
    // Haetaan kyselyn tuottama rivi, joka sisältää lisätyn rivin id-sarakkeen arvon
  }

public static function hae($ryhmannimi){
     $query = DB::connection()->prepare('SELECT * FROM Ryhma WHERE ryhmannimi = :ryhmannimi LIMIT 1');
    $query->execute(array('ryhmannimi' => $ryhmannimi));
    $row = $query->fetch();

    if($row){
      $ryhma = new Ryhma(array(
      'ryhmannimi'=>$row['ryhmannimi'],
      'lisatietoja' => $row['tietoa'],
    ));
    
    return $ryhma;
    }
}
  
public static function edit($ryhmannimi){
    $ryhmannimi = Ryhma::find($ryhmannimi);
    View::make('game/edit.html', array('attributes' => $game));
}    


  
  
  

}

