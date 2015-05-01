<?php

include_once("model/Model.php");

class Controller {
     public $model;

     public function __construct()
     {
          $this->model = new Model();
     }

     public function call_view($view, $values)
     {
          extract($values);
          include('view/' . $view);
     }
}