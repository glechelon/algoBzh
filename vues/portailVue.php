

<!doctype html>
<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="pages/styleCss.css">
   <!-- <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>-->
    <title>Accueil</title>

    <script type="text/javascript" src="../JS/lib.js"></script>
</head>

<body>


<div class="container-fluid">
    <div class= "row en-tete image2">
		<div class="col-lg-1"></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-4"><h1>AlgoBreizh</h1></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-1"></div>
    </div>

    <div class="row">
    	<div class="col-lg-1"></div>
        <div class="col-lg-6 image1"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-3 ">
        	<h3 class="connexion">Connexion a votre espace client:</h3>

            <?php include $content; ?>

            </br>

            <p>
                <?php

                if (isset($_SESSION["error"])) {

                    echo $_SESSION["error"];

                }
                ?>
            </p>

            


        </div>
        <div class="col-lg-1"></div>
    </div>
</div>
</div>

</body>
</html>