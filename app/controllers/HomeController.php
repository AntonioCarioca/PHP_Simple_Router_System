<?php

  namespace app\Controllers;

  use app\controllers\Controller;

  class HomeController{
    
    public function index($params){
      var_dump($params);
      return Controller::view('home');
    }

  }