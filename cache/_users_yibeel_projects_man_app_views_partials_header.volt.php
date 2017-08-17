<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <?= $this->tag->javascriptInclude('js/jquery-3.2.1.min.js') ?>
    <title><?= $title ?></title>
    
    
    <?= $this->tag->stylesheetLink('/css/bulma.css') ?>
    <?= $this->tag->stylesheetLink('/css/override.css') ?>
    <?= $this->tag->stylesheetLink('/css/app.css') ?>
    <?= $this->tag->stylesheetLink('/css/start.css') ?>
    <?= $this->tag->javascriptInclude('js/vue.js') ?>

</head>
<body>
