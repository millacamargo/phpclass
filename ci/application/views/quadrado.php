<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="/ci/index.php/figura/calculo">
            Lado: <input type="number" name="lado"/><br>
            <input type="submit" value="Calcular"/>
        </form>
        <h1> A área é: <?= $res ?> </h1>
    </body>
</html>