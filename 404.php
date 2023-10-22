<!DOCTYPE html>
<html lang="de" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <?php wp_head(); ?>
</head>

<body id="body"> <?php get_header('page'); ?>
    <!-- -->
    <main id="main" class="duration-200 bg-background relative overflow-x-hidden">
        <div class="text-light h-[50vh] flex flex-col justify-center items-center ">
            <h1 class="text-4xl text-white">404</h1>
            <p class="text-4xl text-white">Page not found</p>
        </div>
    </main>
    <!-- ====== FOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOTTER  --> <?php get_footer(); ?>