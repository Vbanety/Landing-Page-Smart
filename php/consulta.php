<?php
    session_start();
    include('verify_login.php');
    include '../CSS/busca.php';
?>

<?php

    //Mostrar dados dentro das tags setadas abaixo
   
   echo "<p>Segue lista a baixo com os dados e emails cadastrados para receber as promoções.</p>";
   echo "<table>";
   echo "<tr>";
   echo "<td>Nome</td>";
   echo "<td>Sobre Nome</td>";
   echo "<td>Email</td>";
   echo "<td>Dúvida</td>";
   echo "</tr>";

    //Conectando ao banco de dados
    $servidor = "127.0.0.1";
    $usuario = "Manuel";
    $senha = "Manuel123";
    $dbname = "banquinho";

    //Criar a conexão
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die('<h3 style="font-size: 25px;">Erro ao conectar ao banco</h3>');
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar o registro");

    //Obendo os dados por meio de um loop while
    while ($registro = mysqli_fetch_array($resultado))
    {
        $firstname = $registro['firstname'];
        $lastname = $registro['lastname'];
        $email = $registro['email'];
        $dubit = $registro['dubit'];
        
        echo "<tr>";
        echo "<td>".$firstname."</td>";
        echo "<td>".$lastname."</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$dubit."</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
    echo "</table>";
?>
