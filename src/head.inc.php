<?php
    const style = './css/style.css';
    const manifest = './asset/site.manifest';
    const title = 'Portofolio - Djason Gadiou - Développeur Web';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - développeur front...">
    <title><?= title ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon-16x16.png">
    <link rel="manifest" href="./asset/site.webmanifest">
    <link rel="stylesheet" href="<?= style ?>">
</head>
    <header aria-labelledby="main-title">
        <h1 id="main-title"><span class="material-icons" aria-hidden="true">
            table_rows
            </span>&nbsp;Portfolio - Djason Gadiou</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#formation">Formation</a></li>
            <li><a href="#competence">Competences</a></li>
            <li><a href="#web">Web</a></li>
            <li><a href="#experience">Expériences</a></li>
            <li><a href="#profil">Profil</a></li>
        </ul>
    </nav>