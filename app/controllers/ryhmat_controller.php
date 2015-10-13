<?php
class RyhmatController extends BaseController{
   public static function ryhmat(){
		
       $ryhmat = Ryhma::all();
       
       View::make('ryhmat.html',array('ryhmat' => $ryhmat));       
   }
   public static function store(){
       // POST-pyynnön muuttujat sijaitsevat $_POST nimisessä assosiaatiolistassa
       
       $params = $_POST;
        // Alustetaan uusi Game-luokan olion käyttäjän syöttämillä arvoilla
        $uusiryhma = new Ryhma(array(
            'ryhmannimi' => $params['ryhmannimi'],
            'lisatietoja' => $params['tietoa']
        ));
        $errors = $uusiryhma->errors();
   
        if(count($errors) == 0){
            $uusiryhma->save();
            Redirect::to('/ryhmat');
        }    
        else{
    // Pelissä oli jotain vikaa :(
            View::make('lisaa.html', array('errors' => $errors));
        }
    }
    
    public static function edit($ryhmannimi){
        $ryhma = Ryhma::hae($ryhmannimi);
        View::make('ryhmat/edit.html', array('attributes' => $ryhma));
    }  
    
    public function update($ryhmannimi){
        $params = $_POST;
        
       $attributes = array(
      'ryhmannimi' => $ryhmannimi,
      'lisatietoja' => $params['lisatietoja']
      );
       
       $ryhma = new Ryhma($attributes);
       $ryhma->update();
       Redirect::to('/ryhmat');
     
    }
    
    public static function destroy($ryhmannimi){
    // Alustetaan Game-olio annetulla id:llä
    $ryhma = new Ryhma(array('ryhmannimi' => $ryhmannimi));
    // Kutsutaan Game-malliluokan metodia destroy, joka poistaa pelin sen id:llä
    $ryhma->delete();

    // Ohjataan käyttäjä pelien listaussivulle ilmoituksen kera
    Redirect::to('/ryhmat');
  }
    
   
  
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

