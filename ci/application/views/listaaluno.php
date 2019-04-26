<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($alunos as $aluno){
                        $nome = $aluno->nome;
                        $ra = $aluno->ra;
                        $cpf = $aluno->cpf;
                        echo "<tr><td> $nome </td>";
                        echo "<td> $ra </td>";
                        echo "<td> $cpf </td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>