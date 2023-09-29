<?php
    class Produto {
        private $id;
        private $nome;
        private $categoria;
        private $descricao;
        private $preco;
    
        public function __construct($id, $nome, $categoria, $descricao, $preco) {
            $this->id = $id;
            $this->nome = $nome;
            $this->categoria = $categoria;
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
        
        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }
    
        public function getCategoria() {
            return $this->categoria;
        }
    
        public function getDescricao() {
            return $this->descricao;
        }
    
        public function getPreco() {
            return $this->preco;
        }
    }
    