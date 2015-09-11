<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });

  $routes->get('/ryhmat', function() {
    HelloWorldController::ryhmat();
  });

  $routes->get('/henkilot', function() {
    HelloWorldController::henkilot();
  });

	$routes->get('/henkilo', function() {
    HelloWorldController::henkilo();
  });
