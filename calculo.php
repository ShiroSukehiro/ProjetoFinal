<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title> Edu Material de Construção Pagamento </title>
</head> 
<body>
    
	<?php
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  
  
	//<!------------variaveis dos produtos---------->
    $areia = 72.59; $areia= $_GET ["areia"];
    $brita = 79.03; $brita= $_GET["brita"];
    $tijolo = 409.99; $tijolo= $_GET ["tijolo"];
    $porcelanato = 90.00; $porcelanato= $_GET["porcelanato"];
    $tinta=80.00; $tinta = $_GET["tinta"];

    //<!------------variaveis dos produtos---------->
  $valor= $_GET["valor"];
	$nome = $_GET["nome"];  
	$gmail = ($_GET["gmail"];
  $data = ($_GET["data"];
  
  $oper = isset ($_GET["oper"])?$_GET ["oper"]:0;
	switch ($oper) {
	case 2:
	  $valor = ($areia * 72.59);
	  break;
	  
	case 3:
	  $valor =  ($brita * 79.03);
      break;
	  
	case 4:
	  $valor = ($tijolo * 409.99); 
	  break;
      
      
    case 5:
         $valor =  ($porcelanato * 90.00); 
        break;
    
    case 6:
         $valor =  ($tinta * 80.00); 
         break;

  
    
    }
	

	echo "<h2> Sr(a) $nome o valor da sua Compra foi: $valor deseja continuar?.</h2>";
    <br/><br/> <input type="submit" value= "Sim"/>;
    
    
	
    ?>	
	<a href = "loja.php">voltar</a> 
	
</body>
</html>