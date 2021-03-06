<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notre article : <?= (isset($erreur)) ? $erreur : $recup['articles_title'] ?></title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css" media="screen">
</head>
<body>
<div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a href="./" class="navbar-brand">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="?p=connect">Connexion</a>
                </li>

            </ul>

        </div>
    </div>
</div>

<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <?php
                if (isset($erreur)):
                    ?>

                    <h1><?= $erreur ?></h1>
                    <p class="lead"><a href="./">Retournez à l'accueil</a></p>

                <?php
                else:
                    ?>
                    <h1>Notre article : <?= $recup['articles_title'] ?></h1>
                    <p class="lead"><a href="./">Retournez à l'accueil</a></p>
                    <p>
                        <?php
                        if(!empty($recup["theimages_name"])):
                            $arrayImgName = explode("|||", $recup["theimages_name"]);
                            $arrayImgTitle = explode("|||", $recup["theimages_title"]);
                            $i=0;
                            foreach($arrayImgName AS $img):
                                ?>
                                <a href="<?=IMG_UPLOAD_MEDIUM.$img?>" target="_blank" title="<?=$arrayImgTitle[$i]?>"><img src="<?=IMG_UPLOAD_SMALL.$img?>" alt="<?=$arrayImgTitle[$i]?>"/></a>
                                <?php
                                $i++;
                            endforeach;
                        endif;
                        ?>
                    </p>
                    <p><?= nl2br($recup["articles_text"]) ?></p>
                    <h5>Par <?= $recup["users_name"] ?> <?= functionDateModel($recup["articles_date"]) ?></h5>
                    <hr>

                <?php

                endif;

                ?>
            </div>

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>