<?php
    class Categoria {
        private $pdo;
        
        public function __construct(PDO $pdo) {
            $this -> pdo = $pdo;
        }
        
        public function getAllCategorias() {
            return $this -> pdo -> query("SELECT * FROM Categorias");
        }
        
        public function getCategoriaById($id) {
            return $this -> pdo -> query("SELECT * FROM Categorias WHERE ID = ".$id." ");
        }
        
        public function inserirCategoria($nome) {
            
        }
        
        // TODO
    }
?>
