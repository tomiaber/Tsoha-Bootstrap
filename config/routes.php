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

  $routes->get('/henkilot', function() {
    HelloWorldController::henkilot();
  });

	$routes->get('/henkilo', function() {
    HelloWorldController::henkilo();
  });

  $routes->get('/lisaa', function() {
    HelloWorldController::lisaa();
  });
  
  $routes->post('/uusiryhma',function(){
      RyhmatController::store();
  });