<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   $a=15;
   $n=2;
   $b=4; 
   echo "<table>";
    for($i=0;$i<$a;$i++){
         echo"<tr>";
         for($j=0;$j<$b;$j++){
              echo"<td>",$n,"</td>";
              $n=$n+2;
         }
         echo"</tr>";
    }
     echo"</table>";
    ?>

</body>
</html>