<?php 
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
    echo $dataEvento->format("d/m/Y");  // Exibindo a data no padrão brasileiro
}

validaData($dataEvento);