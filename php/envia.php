<?php

include_once('conexao.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dubit = $_POST['dubit'];

//Inserir dados
$result = "INSERT INTO clientes (firstname, lastname, email, dubit) VALUES ('$firstname', '$lastname', '$email', '$dubit')";
//conectar
$resultado_contato = mysqli_query($conn, $result);
   
echo "<p>Cadastrado com sucesso!!</p>";

echo "<style>
p  {
  margin: 5px auto;
  width: 100%;
  border: 1px solid;
  border-radius: 10px;
  color: black;
  text-align: center;
  background-color: #21d160;
  font-size: 30pt;
}

@media(max-width: 320px) {
  p {
    margin: 10px auto;
    width: auto;
    heigh: auto;
    border: 1px solid;
    border-radius: 10px;
    color: black;
    text-align: center;
    background-color: #21d160;
    font-size: 50pt;
  }
}
</style>"
?>