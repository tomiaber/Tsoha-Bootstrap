<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
  
  $routes->get('/esimerkki', function() {
    HelloWorldController::esimerkki();
  });

  $routes->get('/ryhmat', function() {
      RyhmatController::ryhmat();
      
  });


	$routes->get('/henkilo', function() {
    HelloWorldController::henkilo();
  });

  $routes->get('/lisaa', function() {
    HelloWorldController::lisaa();
  });
  
  $routes->get('/lisaahenkilo', function() {
    HenkilotController::lisaa();
  });
  
  $routes->post('/uusiryhma',function(){
      RyhmatController::store();
  });
  
  $routes->post('/uusihenkilo',function(){
      HenkilotController::store();
  });
  
  $routes->post('/ryhmat/:nimi/poista',function($nimi){
      RyhmatController::destroy($nimi);
  });
  
  $routes->post('/henkilot/:id/poista',function($id){
      HenkilotController::destroy($id);
  });
  
  
 $routes->get('/ryhmat/:nimi/muokkaa',function($nimi){
      RyhmatController::edit($nimi);
  });
  
  $routes->post('/ryhmat/:ryhmannimi/muokkaa',function($ryhmannimi){
      RyhmatController::update($ryhmannimi);
  });
  
  $routes->get('/kirjautuminen',function(){
      HelloWorldController::kirjaudu();
  });
  
  $routes->post('/login', function(){
  // Kirjautumisen käsittely
  HelloWorldController::handle_login();
});
  
  $routes->get('/henkilot', function() {
      HenkilotController::henkilot();
      
  });
  