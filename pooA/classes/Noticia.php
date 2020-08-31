<?php
class Noticia{
    private $id;
    private $titulo;
    private $descricao;
    private $comentarios;
    private $data;
    private $usuario;

    public function setId($id){
        $this->id=$id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }

    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }

    public function setComentarios($comentarios){
        $this->comentarios=$comentarios;
    }
    
    public function getComentarios(){
        return $this->comentarios;
    }
    public function setData($data){
        $this->data=$data;
    }
    
        public function getData(){
        return $this->data;
    }
    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }

    public function index(){
       $this->listar();
    }

    public function listar(){
        $conexao=Conexao::getConexao();
        
        $resultado=$conexao->query(
            "SELECT id, titulo, descricao,DATE_FORMAT(data, '%d/%m/%Y') AS data, (SELECT nome FROM usuario WHERE id=noticia.usuario_id) AS nome_usuario FROM noticia ORDER BY id DESC LIMIT 5"
        );
        
        
        $noticias=null;
        while($noticia=$resultado->fetch(PDO::FETCH_OBJ)){
            $noticias[]=$noticia;
        }
        include HOME_DIR."view/paginas/noticias/noticias.php";
    }
    public  function salvar(){
            $sql="INSERT INTO noticia (usuario_id, titulo, descricao,data) VALUES (".$_SESSION['usuario']['id'].",)";
    }
    public  function nova(){
        if(isset($_SESSION['usuario'])){
            /**chamar a tela de cadastro de noticia */
        }else{
            header("location:index.php");
        }
    }
    public  function ver($id){
        $conexao=Conexao::getConexao();
        $resultado=$conexao->query(
            "SELECT id, titulo, descricao,DATE_FORMAT(data, '%d/%m/%Y') AS data,
             (SELECT nome FROM usuario WHERE id=noticia.usuario_id) AS nome_usuario
             FROM noticia  
             WHERE id=".$id
        );
       
        $noticia=$resultado->fetch(PDO::FETCH_OBJ);
       
        include HOME_DIR."view/paginas/noticias/noticia.php";
    }

    public  function excluir(){
        
    }

}


?>