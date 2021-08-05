<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- <div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div> -->
    <nav>
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link bg-header h6" aria-current="page" href="#destination">Destination</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-header h6" href="#culture">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-header h6" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-header h6" href="#aboutus">About Us</a>
                    </li>
                </ul>
            </header>
        </div>
    </nav>

    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">The Bootstrap Blog</h1>
            <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
        </div>

        <div class="row">