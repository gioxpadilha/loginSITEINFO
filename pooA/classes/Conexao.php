<?php
class Conexao {
    static public function getInstance(){
        return new PDO (SGBD.":host=".HOST_DB.";dbname=".DB."",USER_DB, PASS_DB);
    }

}
?>