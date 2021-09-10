<?php 
// PDO = php data Objects

$dsn='mysql:host=localhost;dbname=adsi';
$username='root';
$password='';

try {
    $conexion=new PDO($dsn,$username,$password);
    $statement=$conexion->prepare("select * from aprendiz");
    $statement->execute();
    
} catch (PDOException $ob) {
    echo $ob->getMessage();
}   

var_dump($statement);
echo '</br>';



foreach ($statement as $key) {
    echo 'Nombre: ' . $key['nombre']. ' - ';
    echo 'Documento: ' . $key['documento']. ' - ';
    echo 'Formacion: ' . $key['formacion']. ' - ';
    echo 'Genero: ' . $key['sexo']. '</br>';
} 


echo '----------------------------------------------------------------------- </br>';

$statement -> execute();
while ($key = $statement->fetch()) {
    echo 'Nombre: ' . $key['nombre']. ' - ';
    echo 'Documento: ' . $key['documento']. ' - ';
    echo 'Formacion: ' . $key['formacion']. ' - ';
    echo 'Genero: ' . $key['sexo']. '</br>';
}

?>