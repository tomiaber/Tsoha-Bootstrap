<?php
  require 'app/models/ryhma.php';
  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make('aloitus.html');
    }
    
    public static function esimerkki(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  View::make('helloworld.html');
    }
    

    public static function sandbox(){
      // Testaa koodiasi täällä
	$ryhmat = Ryhma::all();
	Kint::dump($ryhmat);
        $henkilo = Henkilo::hae(1);
        Kint::dump($henkilo);
        $ryhma = Ryhma::hae("Pallopojat");
        Kint::dump($ryhma);
        $ryhma = new Ryhma(array('ryhmannimi' => 'asd'));
        $ryhma->delete();
       
    

      // View::make('helloworld.html');
    }
    public static function lisaa(){
        View::make('lisaa.html');
    }
    
    
    public static function ryhmat(){
		View::make('ryhmat.html');
	}
	
	public static function henkilot(){
		View::make('henkilot.html');
	}
	
	public static function henkilo(){
		View::make('henkilo.html');
	}
        
        
    public static function kirjaudu(){
        View::make('kirjautuminen.html');
    }
    public static function handle_login(){
    $params = $_POST;
  
    $kayttaja = Kayttaja::tunnistaudu($params['username'], $params['password']);

    if(!$kayttaja){
      View::make('kirjautuminen.html', array('error' => 'Väärä käyttäjätunnus tai salasana!', 'username' => $params['username']));
    }else{
      $_SESSION['user'] = $user->id;

      Redirect::to('/', array('message' => 'Tervetuloa takaisin ' . $user->name . '!'));
    }
  }
    
    
}
