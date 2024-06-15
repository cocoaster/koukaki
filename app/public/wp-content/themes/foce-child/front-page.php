<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video id="bannerVideo" autoplay muted loop playsinline poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
            <source src="http://koukaki.local/wp-content/uploads/2024/05/StudioKoukaki-videoheadersansson1.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <img class="banner-img" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>" alt="Bannière Fleurs d'oranger & chats errants">
        <img class="logo-img parallax" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
    </section>
    
    <section id="story" class="story slide-up">
        <h2 class="first-rotate-image"><span class="title-animation">L'histoire</span></h2>
        <article id="story-article" class="story__article second-rotate-image">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key' => '_main_char_field',
            'orderby' => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>
        
        <article id="characters" class="slide-up">
            <div class="main-character">
                <h3><span class="title-animation">Les personnages</span></h3>
                <?php get_template_part('template-parts/content', 'carousel'); ?>
            </div>
        </article>
        
        <article id="place">
            <div>
                <h3><span class="title-animation">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>

    <section id="studio" class="slide-up">
        <h2 class="rotate-image"><span class="title-animation">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    
    <section id="oscar-nomination" class="rotate-image slide-up">
        <img src="http://koukaki.local/wp-content/uploads/2024/05/nomination-oscars.png" alt="Nomination aux Oscars">
    </section>
</main>

<?php
get_footer();
?>
