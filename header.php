<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <nav class="nav-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <div class="logo-icon">✨</div>
                <span>کلینیک زیبایی ایروانی</span>
            </a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#home" class="active">خانه</a></li>
                <li class="nav-item"><a href="#services">خدمات</a></li>
                <li class="nav-item"><a href="#about">درباره ما</a></li>
                <li class="nav-item"><a href="#contact">تماس</a></li>
            </ul>
        </nav>
    </header>