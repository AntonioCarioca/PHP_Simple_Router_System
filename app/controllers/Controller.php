<?php

  namespace app\Controllers;
  use League\Plates\Engine;

  class Controller{

    public static function view(string $view, array $data = []){
      $viewPath = dirname(__FILE__,2).'/views';

      if (!file_exists($viewPath . DIRECTORY_SEPARATOR . $view.'.php')) {
        throw new \Exception("A view: {$view} não existe");
        
      }

      $templates = new Engine($viewPath);
      echo $templates->render($view, $data);
    }

  }