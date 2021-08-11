<header> <bem-Vindo> Bem-Vindo </bem-Vindo> </header> 

<nav class="menu"></nav>
                <ul type="#">
                    <style type="text/css"> h3{color:rgb(248, 9, 156)};
                    
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
                    <form method="POST" action="home"></form> 
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
                   <form method="POST" action="home">
                   
                    <br/><br/> <h3>Após pronto, basta escolher a Data de Preferência da entrega, lembrando que o prazo Minimo é de 2 dias Uteis, então caso escolha a data errada, esteja ciente disso ta bom? Obrigado! :)</h3>

                    <br/><br/>Data para Entrega: <input type="date" id="$calendario" name = "data"/>
                    <br/><br/> <input type="submit" value= "Enviar"/>


                    


                </body>
