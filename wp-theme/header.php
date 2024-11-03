<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Ensure FontAwesome is included for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="brand">
            <h2>
                <img src="https://bpcqp.co.za/wp-content/uploads/2024/10/cropped-GHC-Logos-1.png" alt="BPC Quality Professionals Logo" class="logo" />
            </h2>
        </div>
        <button class="hamburger">&#9776; </button>
        <nav class="navbar">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu',
                    'container'      => false,
                ));
            ?>
        </nav>
       <div class="social-media">
            <a href="https://www.facebook.com/your-facebook-page" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/your-twitter-handle" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/your-instagram-handle" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/your-company-page" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.me/27725306921" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</header>

<?php wp_footer(); ?>
</body>
</html>