<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading School of Dance</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="<?php echo get_template_directory_uri() . '/style.css'; ?>" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <?php wp_nav_menu( array('menu' => 'primary','container'=> '','items_wrap'=>'<ul class="nav sidebar-nav"><li class="sidebar-brand"><a href="#">Menu</a></li>%3$s</ul>')); ?>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
          <!-- Header -->
          <?php if (is_page(home)) { ?>
            <header id="home">
                <div class="header-img">
                    <img src="<?php header_image();?>" alt="" />
                </div>
                <div class="header-text">
                        <div class="container">
                            <h1><?php the_field('header_title');?></h1>
                            <div class="header__divider"></div>
                            <p><?php the_field('header_description');?></p>
                        </div>
                    </div>
            </header>
        <?php } else { ?>
                <header>
                <div class="header-img">
                    <img src="<?php header_image();?>" alt="" />
                </div>
                <div class="header-text">
                    <div class="container">
                        <h1><?php the_field('header_title');?></h1>
                        <div class="header__divider"></div>
                        <p><?php the_field('header_description');?></p>
                    </div>
                </div>
            </header>
        <?php }?>