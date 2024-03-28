<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Calculator </title>

   <style> 
      #calc {
         justify-content: flex;
         text-align: center;
         padding-top: 15%;
         font-size: 150%;
         color: #fcfae8;
      }
      #res {
         justify-content: flex;
         text-align: center;
         padding-top: 1%;
         font-size: 160%;
         color: #fcfae8;
      }
      #bot {
         background-color: #fcfae8; 
         border-radius: 30%;
      }
      input {
         background-color: #fcfae8; 
         border-style: solid;
         border-color: black;
      }
      body {background-color: #333333;}
   </style>
</head>
<body>
   <form id = "calc" action = "" method = "post">
      Primeiro Número: <input name = "n1" type = "text">

      </br>

      Segundo Número: <input name = "n2" type = "text">

      </br> </br>

      <input id = "bot" type = "submit" name = "op" value = "+"> 
      <input id = "bot" type = "submit" name = "op" value = "–">    
      <input id = "bot" type = "submit" name = "op" value = "×">    
      <input id = "bot" type = "submit" name = "op" value = "÷">    
   </form>

   </br>
   <div id = "res">
      <?php
         if (isset ($_POST['n1']) && isset($_POST['n2']) && isset($_POST['op'])) {
            $num1 = $_POST['n1'];
            $num2 = $_POST['n2'];
            $op= $_POST['op'];
            
            if( !empty($op) ) {
               if($op == '+')
                  $resul = $num1 + $num2;
               else if($op == '-')
                  $resul = $num1 - $num2;
               else if($op == '*')
                  $resul = $num1 * $num2;
               else
                  $resul = $num1 / $num2;
         
               echo "O resultado da operação é: " . $resul;
            }
         }
      ?>
   </div>
</body>
</html>