<?php

function fecharNotasAlunos( array &$alunos){
    foreach($alunos as $chave => $aluno){
        if($aluno["nota"] < 50){
            $alunos[$chave]["situação"] = "Reprovado";
        }else{
            $alunos[$chave]["situação"] = "Aprovado";
        }
    }
}

function alterarNotaAluno(array &$turma, $nome, $novaNota){

    foreach($turma as $chave => $aluno){
       if($aluno["nome"] == $nome){
           $turma[$chave]["nota"] = $novaNota;
           
           return;
       }
    }
 }

?>
