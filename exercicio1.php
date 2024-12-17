<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio1</title>
</head>
<body>
<div class="container">
  
  <form method="GET" >
      
  <label for="nota">nota:</label><br>
  <input type="number" name="nota"  required><br>  
  <button type="submit">enviar</button>
<?php

  $nota =$_GET['nota'];

if($nota>=7){
echo "aprovado";
}elseif($nota<5){
echo "reprovado";
}else{
echo "recuperação";
}
  
  ?>
</body>
</html>