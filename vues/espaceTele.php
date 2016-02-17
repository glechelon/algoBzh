
<html lang='fr'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="pages/styleCss.css">
    <!--<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>-->
    <title>Accueil</title>

    <script type="text/javascript" src="JS/lib.js"></script>
</head>

<body>


<div class="container-fluid">
    <div class= "row en-tete">

        <div class="col-lg-5"></div>
        <div class="col-lg-1">

            <img src="img/AlgoBreizh_Logo_128px.png" alt="#">
        </div>
        <div class="col-lg-1"><h1>AlgoBreizh</h1></div>
        <div class="col-lg-3"></div>
        <div class="col-lg-1">

            <h3> Bonjour <?php echo $utilisateur->affNom(); ?> </h3>

            <a href="index.php?c=espaceUtilisateur&amp;p=deco" class="btn btn-warning btn-deco">Deconnexion</a>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <nav class="navbar navbar-default col-lg-10 menu">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php?c=espaceUtilisateur">Espace Client:</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?c=espaceUtilisateur&amp;p=commandes">Commandes</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-lg-1"></div>
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 panel panel-default">

            <?php include $contenu; ?>

        </div>
        <div class="col-lg-1"></div>
    </div>
</div>

<footer class="footer">
    <div class="col-lg-1"></div>
    <div class="panel-footer col-lg-10" >
        <p>@ Algobreizh 2016 </p>
    </div>
</footer>
</body>
</html>

