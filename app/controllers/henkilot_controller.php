<?php

class HenkilotController extends BaseController{
    public static function henkilot(){
		
       $henkilot = Henkilo::all();
    
       View::make('henkilot.html',array('henkilot' => $henkilot));       
   }
    
   public static function destroy($id){
    // Alustetaan Game-olio annetulla id:llä
    $henkilo = new Henkilo(array('henkilonumero' => $id));
    // Kutsutaan Game-malliluokan metodia destroy, joka poistaa pelin sen id:llä
    $henkilo->delete();

    // Ohjataan käyttäjä pelien listaussivulle ilmoituksen kera
    Redirect::to('/henkilot');
  }
  
  public static function lisaa(){
        View::make('lisaahenkilot.html');
    }
  
  public static function store(){
      $params = $_POST;
        // Alustetaan uusi Game-luokan olion käyttäjän syöttämillä arvoilla
        $uusihenkilo = new Henkilo(array(
            'etunimet' => $params['etunimet'],
            'sukunimi' => $params['sukunimi'],
            'puhelinnumero' => $params['puhelinnumero'],
            'sahkopostiosoite' => $params['sahkopostiosoite'],
            'postinumero' => $params['postinumero'],
            'lahiosoite' => $params['lahiosoite'],
            'muutatietoa' => $params['muutatietoa']
        ));
        $uusihenkilo->save();
        Redirect::to('/henkilot');
  }  
    
    
}