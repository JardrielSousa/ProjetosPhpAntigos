<?php
 
    
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teste js</title>
    <script>
        var nome,x;
        function date(){
           document.getElementById('demo').innerHTML=Date();
            

        }
    </script>
</head>
<body>
    <h1>botao date</h1>
    <button type="button" onclick="date()" >data</button>
    <p id="demo"></p>
    
    <h1>Form</h1>
   <form action="recebe.php" method="_POST">
       <input type="number" name="n1" placeholder="n1:">
       <input type="number" name="n2" placeholder="n2:">
       <input type="submit" name="envia" value="envia">
   </form>
    
</body>
</html>