<?php

//Includo tutti i file necessari


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- <meta name="author" content="ScappinDebora&SoldatiGabriele">-->

    <title>LaBoa</title>

    <!-- Normalize CSS -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Custom CSS -->
<!--    <link href="css/technology4u-homepage.css" rel="stylesheet">-->
    <script src="js/bootstrap.js"></script>
    <!-- fileinput plugin-->
<!--    <link src="css/bootstrap3.3.4.css" rel="stylesheet">-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="path/to/themes/fa/theme.js"></script>

    <link href="inc/bootstrap-fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="inc/bootstrap-fileinput/js/fileinput.js" type="text/javascript"></script>

</head>
<body>


<!--CSS-->
<style type="text/css"><!--

    /*Gestione posizione menù (necessario per non fare andare a capo il form login)*/

    div#navbar-collapse {

        float:left;
    }

    /*Gestione menù verticale (toglie l'elenco puntato)*/
    div#list-group li a.list-group-item:active{
         font-weight: bold !impotant;
         background-color: darkgray;
     }
    div#list-group li {list-style: none;}

    /*nella versione mobile (smartphone e tablet) il menù verticale sparisce*/
    @media (max-width: 991px){
        .col-md-2{
            display: none;
        }
    }


    /*Gestione posizione form login*/
    div#headContLogin {
        float:right;
        margin-right: 50px;
    }

    @media (max-width: 991px){
        .accedidesktop{
            display: none;
        }

    }
    @media (min-width: 992px){

        .accedimobile{
            display: none;
        }

    }
    @media (min-width: 992px){
        .headContSearch{
            display: none;
        }
    }

    /*Gestione grafica della testata
    float:left -> Fa in modo che dopo il menù a tendina Categoria il resto del menù non vada a capo, ma continui sulla stessa riga*/
     @media (min-width:768px){
         .testata>a>img{
             float: left; /*sposto a sx il logo*/
             margin-left:10px;
        }
     }
     @media(max-width:767px){
         /*centro il logo*/
         .testata>a>img{
            position:absolute;
            left:42%;
            /*margin-left:-32px;*/
         }
     }

     .navbar-header{float:left;}
     /*inserimento di un nuovo font da cartella nel server*/
     @font-face {
             font-family: 'Centabel';
             src: url('../fonts/centabel.ttf');
     }

     .navbar-brand{
         /*font-family: 'Helvetica';*/
         font-family: 'centabel';
     /*,'Centabel';*/
         font-size:25px;
     }


    /*gestione contorno scritta comparsa tendina (es. riga sotto nome statico)*/
    .tendinalogindesktop {
        margin: 0;
        padding: 0;
        height: 2em;
        border-width: 0 0 1px 0;
    }

     /*gestione elementi interni tendina*/
    .tendinalogindesktop li {
        margin: 0;
        padding: 5;
        float: left;
        height: 2em;
        width: 10em;
        display: inline;
        list-style-type: none;
        position: relative;
        line-height: 2em;
    }
    /*gestione scritta comparsa tendina e scritte tendina*/
    .tendinalogindesktop li a:link,
    .tendinalogindesktop li a:visited {
        margin: 0;
        padding: 0;
        text-decoration: none;
        color: gray;
        background: transparent;
        float: left;
        width: 10em;
        text-align: center;
    }
    /*gestisco quando sono sopra col mouse*/
    .tendinalogindesktop li a:hover {
        background: transparent;
        color: #BED63A;
    }
    /*gestione scomparsa tendina*/
    .tendinalogindesktop li ul {
        display: none;
        margin: 0;
        padding: 0;
        background: #f1f1f1;
        color: gray; /*colore linee interne divisori tendina*/
        border: 1px solid;
        width: 10em;
    }


    .tendinalogindesktop li ul li {
        list-style: none;
        margin-left: 0;
        padding-left: 0;
        border-bottom: 1px solid;
    }

    /*gestione interno tendina*/
    .tendinalogindesktop li ul li a:link,
    .tendinalogindesktop li ul li a:hover {
        display: block;
        margin: 0;
        padding: 0;
        text-align: center;
        background: transparent;
        color: #000;
        width: 10em;
    }
    /*gestione colori scritte e sfondo selezionato in tendina*/
    .tendinalogindesktop li ul li a:hover {
        background: black; /*sfondo elemento selezionato in tendina*/
        color: #BED63A;
    }

    /*gestione tendina, quando sono sopra col mouse sta bloccata*/
    .tendinalogindesktop li:hover ul {
        display: block;
        position: absolute;
        top: 2em;
        left: 0;
        z-index:1;
        width:10em;
        padding: 0;
        margin: 0 0 0 30px;
        border:1px solid gray;
        border-radius: 4px; /*arrotonda gli angoli della tendina*/
        background: #D4D4D4; /*colore tendina*/
    }
    .tendinalogindesktop {
        float:right;
    }

     @media(max-width: 991px){
        .navbar-brand{display: none;}
     }
    .image{
        margin:auto;
        max-width:100%;
        max-height:100%;
    }
 --></style>



