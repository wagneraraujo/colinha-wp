//tag php para custom post
<?php the_field('titulo_segundo_bloco'); ?>


//link posts
<?php the_title();?>
<?php the_permalink() ?>

<?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>

//chamar cabeçalho/footer
<?php get_header(); ?>
<?php get_footer(); ?>

<?php body_class(); ?>
<?php the_date(); ?>

//tags importantes
<?php wp_footer();?>
<?php wp_head(); ?>


//nome de todas as categorias
<?php the_category(''); ?>

//url para home
<?php echo get_option('home');?>

//conteudo post/page
<?php the_content();?>

//sidebar
<?php get_sidebar(); ?>

//titulos paginas
<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>

//url de imagens e arquivos
<?php echo esc_url( get_template_directory_uri() ); ?>/

//pagina personalizadas
<?php
/*Template Name: Page English(EN)*/
?>


<?php wp_title( '|', true, 'right' ); ?>

<?php get_template_part( 'includes/menu-home' ); ?>

//ecibir tags em quantidade
<?php wp_tag_cloud('number=0&orderby=count'); ?>

//id do post
<?php the_ID(); ?>


//slug post 
<?php global $post; echo $post->post_name; ?>

//id do post
<?php the_ID(); ?>
