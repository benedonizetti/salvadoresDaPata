<?php

    class Animal{
        $idAnimal;
        $nomeA;
        $descricao;
        $status;
    
        public function setIdAnimal($id){
            $this->idAnimal = $id;
        }
        public function getIdAnimal(){
            return $this->idAnimal;
        }
        public function setNomeA($nome){
            $this->nomeA = $nome;
        }
        public function getNomeA(){
            return $this->nomeA;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
            return $this->status;
        }




    }
?>