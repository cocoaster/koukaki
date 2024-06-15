<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>
    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <div class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </div>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div id="primary-menu" class="menu-container">
            <img id="logo-menu" src="http://koukaki.local/wp-content/uploads/2024/05/Image-logo-en-paralax-300x231.png" alt="logo Fleurs d'oranger & chats errants">
                <ul class="nav-menu">   
                    <li class="second-item nth-item2 nav-font-size"><a class="nav-link" href="#story">Histoire</a></li>
                    <li class="third-item nth-item3 nav-font-size"><a class="nav-link" href="#characters">Personnages</a></li>
                    <li class="fourth-item nth-item4 nav-font-size"><a class="nav-link" href="#place">Lieu</a></li>
                    <li class="fifth-item nth-item5 nav-font-size"><a class="nav-link" href="#studio">Studio Koukaki</a></li>
                    
                </ul>
                <div class="sixth-item nav-font-size">
                        STUDIO KOUKAKI           
                </div>
                <img class="before-image" src="http://koukaki.local/wp-content/uploads/2024/06/cat-1.png.webp" alt="Cat Image">
                <img class="after-image" src="http://koukaki.local/wp-content/uploads/2024/06/Group-180.png.webp" alt="Group Image">
            </div>
        </nav>
    </header>
    <div id="content" class="site-content">
        <!-- Contenu principal -->
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
