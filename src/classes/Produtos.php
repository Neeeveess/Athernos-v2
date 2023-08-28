<?php 
    namespace Athernos\classes;
    
    use Athernos\classes\Categoria;
    
        class Produtos extends Categoria{
            private $id;
            private $codigo;
            private $nome;
            private $idCategoria;
            private $dataCad;

            public function getId()
            {
                return $this->id;
            }

            public function setId($id)
            {
                $this->id = $id;
            }

            public function getCodigo()
            {
                return $this->codigo;
            }

            public function setCodigo($codigo)
            {
                $this->codigo = $codigo;
            }

            public function getNome()
            {
                return $this->nome;
            }

            public function setNome($nome)
            {
                $this->nome = $nome;
            }

            public function getIdCategoria()
            {
                return $this->idCategoria;
            }

            public function setIdCategoria($idCategoria)
            {
                $this->idCategoria = $idCategoria;
            }

            public function getDataCad()
            {
                return $this->dataCad;
            }

            public function setDataCad($dataCad)
            {
                $this->dataCad = $dataCad;
            }

            public function cadastrarProduto($codigo,$nome,$idCategoria,$dataCad){
                $this->setCodigo($codigo);
                $this->setNome($nome);
                $this->setIdCategoria($idCategoria);
                $this->setDataCad($dataCad);
                if($this->select("nome,codigo","produtos","nome = '$nome' or codigo ='$codigo'")->num_rows> 0){
                    return "Produto ja existe";
                }else{
                    $dados = [
                        "codigo" => $this->getCodigo(),
                        "nome" => $this->getNome(),
                        "id_categoria" => $this->getIdCategoria(),
                        "data_cadastro" => $this->getDataCad() 
                    ];  
                    $this->insert("produtos", "$dados");
                    return "Produto cadastrado";    
                }
            }
            
            public function filtrarProduto($search){
                // if(isset($_GET) and !empty($_GET['search'])){
                    $select = $this->select('*',"listProd","nome LIKE '$search%' or id LIKE '$search%' or categoria LIKE '$search%'");
                }
            
            public function listarProdutos(){
                $select = $this->select("*","listProd","1","id ASC");
                
                if ($select->num_rows > 0){
                    while($dados = $select->fetch_assoc()){
                        $rows[]=$dados;

                    }
                    return $rows;

                }

            }
    }
?>