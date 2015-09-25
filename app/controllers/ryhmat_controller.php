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
        
        $uusiryhma->save();
        
        Redirect::to('/ryhmat');
   }
   
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

