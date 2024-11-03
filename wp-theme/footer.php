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
    <footer>
        <p>© <?php echo date('Y'); ?> Global Hope Consortium. All rights reserved.</p>
        <div class="social-media">
            <a href="https://www.facebook.com/your-facebook-page" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/your-twitter-handle" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/your-instagram-handle" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/your-company-page" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://wa.me/27725306921" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
        </div>
        <a href="#top" class="back-to-top">Back to Top</a>
    </footer>

    <!-- Footer WordPress Hooks -->
    <?php wp_footer(); ?>
</body>
</html>