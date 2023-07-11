<?php
  $dbHost = containers-us-west-121.railway.app
  $dbUsername = root
  $dbPassword = 3eKzdR4dQo703Ly90xf4
  $dbName = railway

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)
if($conexao->connect_errno){
  echo "Falha ao Conectar: (".$conexao->connect_errno.")".$conexao->connect_errno
}
?>
