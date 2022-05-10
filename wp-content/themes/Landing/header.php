<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
<body>

<header class="header container">

    <div class="logo">
        <a href="/"><img src="https://os-dfiles.mwscdn.io/logo/ca/12302570_logo_20212823155393.png" alt=""></a>
    </div>
    <a href="#" class="menu-btn">
        <span></span>
    </a>
    <nav class="menu-nav">

       <?php wp_nav_menu( [
        'theme_location'  => 'top',
        'container'       => false,
           'menu_class'      => 'nav',
        ] );
       ?>
    </nav>

</header>