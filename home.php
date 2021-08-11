<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Material De Construção</title>
</head>
<body>
   
</body>
</html> 

<header>  <font color="#4B0082"> Home</font>  </header> 


<br><br/>
<div> 
<form name = "nome" method="GET" action="" value = "nome"></form> 
<h2>Nome:</h2>
<input type="text" placeholder="Me informa teu Nome" required/>
        <h2>Email:</h2>
        <input type="email" placeholder="Me informa teu email" id="gmail" name ="gmail"/>
        <form method="GET" action="">
<dd></dd>    
 <form method="GET" action="">    
        <button type="submit" value="calcular">Enviar</button>
          
        <dt> <h4> <br>  Oque Nós Queremos. <br/> </h4></dt>
<p>Nós queremos tentar expandir, mas aos poucos, tentando cada vez mais aumentar nossa quantidade de opções e crescer ainda mais contra a concorrencia e o mercado
             mas sempre focando no preço baixo e no ótimo atendimento e entrega que sempre vamos manter.</p>                 
              <dt> <h4> <br>  Sobre Nós. <br/> </h4></dt>
            
            <p>Olá Bem-vindo a Edu Material de Construção nós somos novos no mercado e começados a pouco tempo, atualmente estamos começando com poucos materiais, porém posso afirmar de certeza,
            que você ira se satisfazer comprando em uma de nossas lojas, pois além de uma entrega que é feita com prazo máximo de 2 dias, a instalação é feita pela nossa própria equipe caso
            seja preciso, isso mesmo não precisa se preocupar em montar qualquer tipo de equipamento apenas saiba que não irá se preocupar com qualquer instalação ou problema caso aconteça,
            há, e tem mais! 
            Nós por sermos novos no pedaço temos que trazer algo moderno para melhorar cada vez mais nosso atendimento ao cliente, e com isso disponibilizamos de um Whatsapp Central,
            caso queira entrar em contato e saber mais detalhes sobre o seu pedido e além de tudo resolver qualquer transtorno (Oque esperamos que não aconteça).
            E cuidado! Que tem Promoção chegando por ai! não perca! fique de olho em nossas redes sóciais para saber Mais!</p> </font> 
            <h4>@Edu_Mtdc</h4>
        
        
            <style background-fontcolor="text/css"> p  type="text/css"> p{color:rgb((128,128,128)
DarkGray	#A9A9A9	(169,169,169)
Silver	#C0C0C0	(192,192,192)
LightGrey	#D3D3D3	(211,211,211)
Gainsboro	#DCDCDC	(220,220,220))};
            </style>
        
        
        
        
         </dd>
        <header> <bem-Vindo> Bem-Vindo </bem-Vindo> </header> 

<nav class="menu"></nav>
                <ul type="#">
                    <style type="text/css"> h3{color:rgb(0,0,128)};
                    
                    </style>
                    <h4> <label>  Frétes Grátis para Vitória e Região!  </label></h4> <a name="Produtos"></a>
                  


                 <body>
                 <?php if(isset($_POST['acao']) && $_POST['acao'] == "enviar") {
                     $CAMPO = $_POST ['oper'];
                     foreach($campo as $value){
                         echo $value.'<br />';
                     }
                 } 
                 ?>  
                 
                 <h3> Produtos: </h3>
                    <div>
                    <form method="POST" action=""></form> 
                    <p> Digite abaixo a Unidade ou os Metros de cada Matérial que irá precisar.</p>

                    <li> <h3> <input type="checkbox" value = "areia"> Areia  </h3> </li><input type="number" name="oper" id="areia" value=""/>Unidade/Metros. <h3> A cada Metro de Areia é: <h2> *R$ 72,59* </h2> </h3> 
                    --------------------------------------------------------------------------------------------------------------                                             
                    <li> <h3> <input type="checkbox" value = "brita"> Brita  </h3></li><input type="number" name="oper" id="brita" value=""/> <h3>Unidade/Metros. A cada Metro de Brita é: <h2> *R$ 79,03* </h2> </h3> 
                    --------------------------------------------------------------------------------------------------------------
                    <li> <h3> <input type="checkbox" value = "tijolo"> Tijolos 6 Furos (1000 Unidades.)</h3></li><input type="number" name="oper" id="tijolo" value=""/> Unidade/Metros.<h3>A cada Milheiro de Tijolos é: <h2> *R$ 409,99* </h2> </h3>
                    --------------------------------------------------------------------------------------------------------------  
                    <li> <h3> <input type="checkbox" value = "porcelanato"> Céramicas de porcelanatos </h3></li> <input type="number" name="oper" id="porcelanato" value=""/>Unidade/Metros.<h3>A cada M² de Porcelanatos é: <h2> *R$ 90 por m².* </h2> </h3>
                    --------------------------------------------------------------------------------------------------------------      
                    <li> <h3> <input type="checkbox" value = "tinta"> Tintas (3,6L) </h3></li> <input type="number" name="oper" id="tinta" value=""/>Unidade/Metros.<h3>A cada Lata de Tinta é: <h2> *R$ 80,00* </h2> </h3>   
                    --------------------------------------------------------------------------------------------------------------
                   </ul>
                   
                   <input type="hidden" name="acao" value="enviar" />
                   <form method="POST" action="">
                   
                    <br/><br/> <h3>Após pronto, basta escolher a Data de Preferência da entrega, lembrando que o prazo Minimo é de 2 dias Uteis, então caso escolha a data errada, esteja ciente disso ta bom? Obrigado! :)</h3>

                    <br/><br/>Data para Entrega: <input type="date" id="$calendario" name = "data"/>
                    <br/><br/> <input type="submit" value= "Enviar"/>


                    


                </body>
                <body> 
                    <div>
                <?php
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  
  
	//<!------------variaveis dos produtos---------->
    $areia = 72.59; $areia= $_GET = ["areia"];
    $brita = 79.03; $brita= $_GET = ["brita"];
    $tijolo = 409.99; $tijolo= $_GET = ["tijolo"];
    $porcelanato = 90.00; $porcelanato = $_GET =["porcelanato"];
    $tinta=80.00; $tinta = $_GET =["tinta"];

    //<!------------variaveis dos produtos---------->
$valor= $_GET =["valor"];
$nome= $_GET =["nome"];  
$gmail= $_GET =["gmail"];
$data= $_GET =["data"];
  
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
    
    echo " O valor da compra é: $valor , deseja pagar via cartão ou dinheiro?";
    if ($valor >=1) {   
        $v = "já pode fazer a compra";
        $e = "e o pagamento." ;
    }
        else {
        $v = "não pode comprar e";
        $e = "não pode pagar";
    }
    echo " com essas informações você $v e também $e";
    
    ?>
    </body>
</div>

    