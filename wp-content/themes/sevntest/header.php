<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevntest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
	<?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <header class="header-w-bg">
            <nav class="nav">
                <div class="logo">
                    <h3>Covid-19</h3>
                </div>
                <div class="reference">
                    <a class="reference-item" href="#">Експресс-тест</a>
                    <a class="reference-item" href="#">Швидкий тест</a>
                    <a class="reference-item" href="#">Відгуки</a>
                </div>
                <div class="contact">
                    <a class="call" href="">
                        <span class="call-text">093-300-00-02</span>
                    </a>
                </div>
            </nav>
            <div class="header-title">
                <h1>Тести для визначачення SARS-CoV-2 </h1>
                <p>Експрес-тест та швидкий тест вже в наявності в медичної компанії Lysoform</p>
            </div>
        </header><!-- #masthead -->
