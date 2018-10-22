<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading School of Dance</title>

    <!-- VENDOR CSS -->

    <!-- CUSTOM CSS -->
    <link href="<?php echo get_template_directory_uri() . '/style.css'; ?>" rel="stylesheet">
</head>

<body>
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
