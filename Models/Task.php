<?php
    namespace Models;

    class Task
    {
        private $id;
        private $title;
        private $date;
        private $description;

        public function __construct(){      
            $this->id = rand(0,1000000);
        } 
    
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function getDate(){
            return $this->date;
        }
        
        public function setDate($date){
            $this->date = $date;
        }

        public function getDescription(){
            return $this->description;
        }
        
        public function setDescription($description){
            $this->description = $description;
        }
    }
    
?>