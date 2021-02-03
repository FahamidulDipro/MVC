<?php
include "./model/model.php";
    class Controller{
        public $model;
        public function __construct()
        {
            $this->model= new Model();
        }
        public function invoke(){
            // $this->model->getBookDetails();
            if(!isset($_GET['book'])){
                $books = $this->model->getBookDetails(); 
            }else{
              $books = $this->model->getBook($_GET['book']);
            }
        }
    }
?>