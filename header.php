<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
</head>

<body>
    <header class="bg-info">
        <h3 class="text-primary text-center"><a href="<?php bloginfo("url") ?>"><?php bloginfo("name") ?></a></h3>
        <p class="text-center"><?php bloginfo("description") ?></p>
    </header>

    <?php
    wp_nav_menu(array('theme_location' => 'primary'));
    ?>