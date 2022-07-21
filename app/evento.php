<?php 
date_default_timezone_set("America/Sao_Paulo");
// Criando uma variável nomeEvento indicando que o método de coleta de dados é o GET (Menos seguro, por exibir na URL os dados) Linha 41 Name:nomeEvento
$nomeEvento = $_POST["nomeEvento"];
$dataEvento = $_POST["dataEvento"]; //Criando outra variável para o segundo input do formulário

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";

// Exibindo vetores de forma completa
//print_r($_POST);
var_dump($_POST);

// Criando uma função para alterar o tipo de data exibida
function validaData($data){

    $dataEvento = new DateTime($data); // Esta classe precisa de uma data no padrão americano para funcionar
    $dataAtual = new DateTime("now"); // Estamos pegando a data atual
    echo $dataEvento->format("d/m/Y");  // Exibindo a data no padrão brasileiro
    echo "<br> A data de hoje é: ";
    print_r($dataAtual);

    if($dataEvento > $dataAtual){
        echo "<p>Data do evento cadastrado com sucesso!</p>";
    }
    else{
        echo "<p>A data do evento não pode ser igual ou anterior a data atual</p>";
    }
}

validaData($dataEvento);