
<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styleCss.css">

    <title>Accueil</title>

    <script type="text/javascript" src="JS/lib.js"></script>
</head>

<body>


<div class="container-fluid">
    <div class= "row en-tete image2">

        <div class="col-lg-4 user "><h3> Bonjour <?php echo $utilisateur->affNom(); ?> </h3></div>
         <!--<div class="col-lg-2"></div>-->
        <div class="col-lg-4 "><h1>AlgoBreizh</h1></div>
        <!--<div class="col-lg-2"></div>-->
        <div class="col-lg-4 "><a href="index.php?c=espaceUtilisateur&amp;p=deco" class="btn btn-warning btn-deco">Deconnexion</a></div>
    </div>
    <div class="row">
    	<div class="col-lg-2">

		</div>
        <div class="col-lg-10">

        </div>
    </div>
    <div class="row">
        <nav class="navbar navbar-default col-lg-12 menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand police" href="index.php?c=espaceUtilisateur">Espace Client:</a>
                </div>
                <div>
                    <ul class="nav navbar-nav police">
                        <li><a href="index.php?c=espaceUtilisateur&amp;p=factures">Factures</a></li>
                        <li><a href="index.php?c=espaceUtilisateur&amp;p=commandes">Mes commandes</a></li>
                        <li><a href="index.php?c=espaceUtilisateur&amp;p=saisir">Saisir une commande</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 panel panel-default">

            <?php include $contenu; ?>

        </div>
    </div>
</div>
</div>


</div>
<footer class="footer">

    <div class="panel-footer col-lg-12" >
        <p>@ Algobreizh 2016 </p>
    </div>
</footer>

</body>
</html>

