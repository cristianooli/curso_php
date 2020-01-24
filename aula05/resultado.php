 <?php

 $name = $_POST["name"];
 $last_name = $_POST["last_name"];
 $n1 = $_POST["n1"];
 $n2 = $_POST["n2"];
 $operacao = $_POST["operacao"];
 
 $last_name = $name." ".$last_name;
 //ou
 //$last_name = "$name $last_name";
 
 
 if ($operacao=="+"){
   $resultado = $n1+$n2;
 }else
     if ($operacao=="-"){
         $resultado = $n1-$n2;
 }else
      if ($operacao=="*"){
         $resultado = $n1*$n2;
 }else
      if ($operacao=="/"){
         $resultado = $n1/$n2;
 }
  
    
 
 echo $last_name.", O resultado é ".$resultado;
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
    </body>
</html>

