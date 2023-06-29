<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php wp_head(); ?>
    </head>
        <header>
            <nav class=" container nav_container">
                <img class="logo" src="<?php echo get_template_directory_uri().'/assets/images/logo2.png'?>">
                <div class="nav_right">
                <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                            'items_wrap'=>'<ul id="" class="container nav_list">%3$s</ul>'
                        )
                    );                    
                ?>
                <?php get_search_form(); ?>
                </div>
                <div class="hamburger_container">
                    <input type="checkbox" id="hamburger"/>
                    <label for="hamburger" class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </label>
                </div>
            </nav>
            <?php
                    wp_nav_menu(
                        array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                            'items_wrap'=>'<ul id="" class="container mobile_list">%3$s</ul>'
                        )
                    );                    
                ?>
        </header>
        <div class="header_item"></div>
        <div class="main_content_container">

        