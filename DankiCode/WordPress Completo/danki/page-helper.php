<?php
	//Template Name: Helper
?>

<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
	//endwhile;
	//endif;
?>


<?php


	//Retorna o título da página atual.
	//echo get_the_title();
	//the_title();

	//Retorna o conteúdo da página atual.
	//if (have_posts()) : while (have_posts()) : the_post();
	//echo get_the_content();
	//the_content();
	//endwhile;
	//endif;

	//Retorna o diretório do meu tema!
	//echo get_theme_root_uri();

	//Retorna as configurações do meu wordpress!
	//echo bloginfo('title');
	//echo bloginfo('description');

	//Retorna diretório completo.
	//echo get_bloginfo('stylesheet_directory');
	
	/*
	//Retorna o conteúdo do wordpress referente ao Head e ao Footer.
	wp_head();	
	wp_footer();

	//Utilizamos para puxar o topo e o rodapé.
	get_header();
	get_footer();

	//Retorna o título da página.
	get_the_title();
	//Retorna o slug da página.
	global $post;
	$post_slug=$post->post_name;


	//Funções do plugin ACF
	
	while(have_rows('nome_tipo_contato')){
			the_row();
			echo get_sub_field('nome');
	}

	the_field('nome');
	*/
?>



