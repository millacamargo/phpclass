<!DOCTYPE html>
<html>
    <body>
        <h1>LOGIN</h1>
        <h2><?= $msgErro ?></h2>
        <form method="POST" action="/ci/index.php/usuario/autenticar">
            E-mail: <input type="email" name="email"/><br>
            Senha: <input type="password" name="senha"/>
            <input type="submit" value="Entrar"/>
        </form>
    </body>
</html>