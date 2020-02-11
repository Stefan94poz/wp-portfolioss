<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <script src="https://kit.fontawesome.com/9690220c47.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
        <header>
            <div class="hero-image">
                    <div class="profile-image">
                        <img src=" <?php echo header_image() ?>" alt="">    
                    </div>
                    <div class="name-ribbon">
                        <h1>Stefan Stević </h1>
                        <div class="logo-wrap">
                        <a href="https://github.com/Stefan94poz"><i class="fab fa-github-alt"></i></a>
                        <a href="https://www.linkedin.com/in/stefan-stević-0b332a101"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:stefan.s.webdev@gmail.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="container">
                        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                       
                    </div>
                </nav>
                <div class="mobile-nav hamburger">
                        <i class="fas fa-bars"></i>
                </div>
        </header>
        
