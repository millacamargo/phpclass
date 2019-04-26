<!DOCTYPE html>
<html>
    <body>
        <h1>CADASTRO DE USUÁRIO</h1>
        <form method="POST" action="/ci/index.php/usuario/inserir">
            Nome: <input type="text" name="nome"/><br>
            E-mail: <input type="email" name="email"/><br>
            Senha: <input type="password" name="senha"/>
            <input type="submit" value="Inserir"/>
        </form>
    </body>
</html>