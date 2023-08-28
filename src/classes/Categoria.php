<?php 
    namespace Athernos\classes;
    
    use Athernos\classes\Crud;
    
        class Categoria extends Crud{
            private $id;
            private $nome;
            
            public function cadastrarCategoria($dados){
                if(($this->select("nome","categoria","nome ='$dados'")-> num_rows >0)){
                    return "Categoria já existe";
                }else{
                    $this->insert("categoria","$dados");
                }
            }
        }
?>