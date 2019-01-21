<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
</head>
<body>


<?php 
//Ejercicio 1
echo "<p>1</p>";
$a = 1;
while ($a <= 4) {
     echo "*<br>";
     $a++;
}
echo "<p>2</p>";

//Ejercicio 2

$asterisco = "*";
for ($a=0; $a < 5 ; $a++) { 
    
    for ($i=0; $i < 5; $i++) { 
        echo $asterisco."\n";
    }
    echo "<br>";
}

//Ejercicio 3

echo "<p>3</p>";

$asterisco = "";
for ($i = 0; $i < 7; $i++) {
   
        echo $asterisco.="*";
    
   echo"<br>";
}


//4
//Sin espaciados que no me gusta como queda

$asterisco = "*";
echo "<p>4</p>";
for ($i=0; $i < 4  ; $i++) { 
   
        for ($j=1; $j <$i ; $j++) { 

            echo $asterisco;

          if ($j%4!=1) {
        
            echo $asterisco;
         }
        }
        
        echo "<br>"; 
    
    }
if ($i>=4) {

  for ($i=4; $i >0 ; $i--) { 

    for ($j=1; $j <$i ; $j++) { 

        echo $asterisco;

      if ($j%4!=1) {
  
        echo $asterisco;
    }
    }
    echo "<br>"; 
     
  }

}



//5
echo "<p>5</p>";
$asterisco = "*";

for ($i = 0; $i < 9; $i = $i +2) {

    for ($a = 0; $a < 9 - $i - 1; $a++) {
        echo "&nbsp";
    }

    for ($a = 0; $a <= $i; $a++) {
        echo $asterisco;
    }
    echo "<br/>";
} 


?>
    
</body>
</html>
