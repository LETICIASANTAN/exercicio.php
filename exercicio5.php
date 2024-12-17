<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcular médias</title>
</head>
<body>
<div class="container">
  
  <form method="GET" >
      <h2>aluno1</h2>
  <label for="nota1">nota1</label><br>
  <input type="number" name="nota1"  required><br>
  
  <label for="nota2">nota2</label><br>
  <input type="number" name="nota2"  required><br> 

  <label for="nota3">nota3</label><br>
  <input type="number" name="nota3"  required><br> 


  

  <button type="submit">calcular</button> 
    
  <?php
  
$nota1 =$_GET['nota1'];
$nota2 =$_GET['nota2'];
$nota3 =$_GET['nota3'];
$media = ($nota1 + $nota2 + $nota3 ) / 3 ;

echo "a media é : $media";

  ?>
</body>
</html>