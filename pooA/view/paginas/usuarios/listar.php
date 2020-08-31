
<main>
    <?php
            echo '<a href="'.HOME_URI.'usuario/criar" class="btn btn-primary">ADICIONAR USUÁRIO</a>';
    ?>
<table class="table">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $conexao = Conexao::getInstance();
        $resultado = $conexao->query('SELECT * FROM usuario');
        echo '<h3>Só professores e administradores podem ver os usuarios cadastrados, e só administradores podem excluir contas</h3>';
        while($usuarios = $resultado->fetch(PDO::FETCH_OBJ)){

            if($_SESSION['user'] -> id != $usuarios -> id){
                $botoes = '<a href="'.HOME_URI.'usuario/deletar/'.$usuarios->id.'" class="btn-danger"> <span class = "glyphicon glyphicon-trash"> </a>';
            }
            else{
                $botoes = '';
            }
            echo
            '
            <tr>
                <td>'.$usuarios->id.'</td>
                <td>'.$usuarios->nome.'</td>
                <td>'.$usuarios->email.'</td>
                <td>'.$botoes.'</td>
            </tr>
            ';
        }
    ?>
    </tbody>
</table>
</main>