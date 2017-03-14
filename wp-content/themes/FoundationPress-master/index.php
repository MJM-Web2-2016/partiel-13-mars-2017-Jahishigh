<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="backgroundtop text-center">
	<h1>33ième édition</h1>
	<h1 class="middletitle">Festival</h1>
	<h1>Musique Action</h1>
	<a class="button alert" href="#">Réserver vos places</a>
</div>
	<h2 class="text-center">Programmation</h2>
	<div class="row">
		<div class="large-3 columns">
	<div class="blocks">1</div>
</div>
<div class="large-3 columns">
	<div class="blocks">2</div>
</div>
<div class="large-3 columns">
	<div class="blocks">3</div>
</div>
<div class="large-3 columns">
	<div class="blocks">4</div>
</div>
</div>
<a class="button alert text-center" href="#">Voir la programmation complète</a>

<?php get_footer();
