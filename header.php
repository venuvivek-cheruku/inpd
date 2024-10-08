<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content='ie=edge'>
        <link rel='pingback' href='<?php bloginfo('pingback_url');?>'>

        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <?php wp_head();?>

        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>

    </head>
    <body <?php body_class();?>>
        <?php get_template_part("partials/main_menu"); ?>
        <main>