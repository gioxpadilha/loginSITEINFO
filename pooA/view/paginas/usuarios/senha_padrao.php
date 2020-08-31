<main>
    <form action="<?php echo HOME_URI;?>usuario/trocar_senha" method="POST">
        <legend>Trocar Senha</legend>
        <div class="form-group">
            <label for="inputSenhaTrocar">Nova Senha</label>
            <input type="password" name="senhaTrocar" class="form-control" id="inputSenhaTrocar" placeholder="Nova Senha">
        </div>
        <div class="form-group">
            <label for="inputSenhaTrocarNovamente">Digite novamente a Senha!</label>
            <input type="password" name="senhaTrocar" class="form-control" id="inputSenhaTrocar" placeholder="Nova Senha">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a class="btn btn-danger" href="<?php echo HOME_URI;?>usuario">Voltar</a>

    </form>
</main>