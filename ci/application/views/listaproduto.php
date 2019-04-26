<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>DESC</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($produtos as $produto){
                        $nome = $produto->nome;
                        $desc = $produto->desc;
                        $preco = $produto->preco;
                        echo "<tr><td> $nome </td>";
                        echo "<td> $desc </td>";
                        echo "<td> $preco </td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>