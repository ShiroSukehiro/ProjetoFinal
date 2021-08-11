<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu Material de Cosntrução</title>
</head>

<style>

body {
    background-color: Grey;
    background-repeat: no-repeat;
    background-size: cover;
    background-position:"#" ;
    
}
//<!----background-image: url("img/homemaranha.jpg");----->
</style>

<body>
    <header>
    <h1>EDU MATERIAL DE CONSTRUÇÃO</h1> 

    <nav>
        <a href="index.php?menuop=home">Home</a> |
        
    </nav>

    </header>

    <main>
        <hr>
        <?php
        $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]: "home";

        switch ($menuop) {
            case 'home':
                include("paginas/home/home.php");
                break;

            case 'loja':
                include("paginas/loja/loja.php");
                break;
                
            default:
                include("paginas/home/home.php");
                break;
        }

        ?>

    </main>

</body>

</html>


