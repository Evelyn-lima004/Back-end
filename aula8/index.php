<?php

    require("./funcao.php");
    require("./alunos.php");

    
    if(isset ($_GET["novaNota"])){
        $nome = $_GET["nomeAluno"];
        $novaNota = $_GET["novaNota"];

        alterarNotaAluno($alunos, $nome, $novaNota);
    }

    fecharNotasAlunos($alunos);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Notas dos alunos</title>
    <script src="./script.js" defer></script>
</head>
<body>
    <section>
    <h1>Tabela de Notas</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
            <th>Situação</th>
        </tr>
        <?php
            foreach($alunos as $aluno){
        ?>
        <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
            <td><?= $aluno ["nome"] ?></td>
            <td><?= $aluno ["idade"] ?></td>
            <td><?= $aluno ["nota"] ?></td>
            <td class="
            <?=$aluno["situação"] == "Aprovado"? "aprov" : "reprov"  ?>
            ">
            <?= 
                isset($aluno["situação"]) ?
                    $aluno["situação"] :
                    ""
    
        ?>
    </td>
        </tr>
        <?php
            }
        ?>
    </table>
</section>
<div class="container-form-nota" >
    <form>
        <input type="number" name="novaNota" placeholder="Digite a nova nota"/>
        <input type="hidden" id= "nomeAluno" name="nomeAluno"/>
        <button>Alterar</button>
    </form> 
</div>
</body>
</html>