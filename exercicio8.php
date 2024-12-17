<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matriz</title>
</head>
<body>
<?php
$matriz =[];
for($j=0;$i<4;$i++){
for($i=0;$j<4;$j++){
$matriz[$i][$j]=rand(1,100);
}
}
echo"numeros pares na matriz:<br>";
foreach($matriz as $linha){
    foreach($linha as $numero){
        if($numero%2==0){
            echo $numero."";
        }
    }
    echo "<br>";
}
?>
</body>
</html>



