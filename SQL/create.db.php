<?php 

$server     = "localhost";
$user       = "root";
$password   = "";

// Conecta ao banco de dados
$con = new mysqli($server, $user, $password);

// Verifica se ocorreu algum erro
if ($con->connect_error) {
    die("Não foi possível conectar-se ao banco de dados: " . $con->connect_error);
    exit;
} 

$sql = "CREATE DATABASE ssmv";
if ($con->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso";
    $sit = TRUE;
} else {
    echo "Erro ao criar o banco de dados " . $con->error;
    $sit = FALSE;
}

$con->close();

$newsql = "";

$ponteiro = fopen("SSMV.sql", "r");
while (!feof($ponteiro)) {
  $linha = fgets($ponteiro, 4096);
  $newsql .= $linha."\n\r";
}
fclose ($ponteiro);

var_dump($newsql);

// if($sit == FALSE){
//     if($sql1 = $con->query($newsql)){
//         $sql1->execute();
//         $sql1->fetch();
//         $sql1->close();
//         echo "Banco de dados importado";
//     } else {
//         echo "Não foi possivel impoartar o BD";
//     }
// }
// $sql1->close();

// echo $newsql;
?>