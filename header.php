<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading School of Dance</title>

    <!-- VENDOR CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="<?php echo get_template_directory_uri() . '/style.css'; ?>" rel="stylesheet">
</head>

<body>
    <header class="hero">
        <img class="alpha-bg" src="http://localhost:8888/wp-content/uploads/2018/10/756C0258-1.jpg">

        <div class="menu-section">
            <div class="menu-toggle">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav>
                <ul role="navigation" class="hidden">
                <?php
                        wp_nav_menu(array('menu' => 'primary', 'items_wrap' => '<li id="item-id"></li>%3$s'));
                    ?>
                </ul>
            </nav>
        </div>


        <div class="wrapper">
            <h1 class="">Reading School of <span class="color-emphasis">Dance.</span></h1>
        </div>
    </header>