<?php

	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'twentyten' ),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Sidebar left', 'twentyten' ),
		'id' => 'sidebar1-widget-area',
		'description' => __( 'The left sidebar widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="boxTitle">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Sidebar right', 'twentyten' ),
		'id' => 'sidebar2-widget-area',
		'description' => __( 'The right sidebar widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="boxTitle">',
		'after_title' => '</h3>',
	) );	

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 250, 151, true ); // Normal post thumbnails
}


//custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'primary' => 'Primary navigation',
		  'footer' => 'Footer navigation'
		)
	);
}
 
function new_excerpt_length($length) {
// Anzahl Wörter Startseite
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

// disable the admin bar
show_admin_bar(false);


function commentCount() {
    global $wpdb;
    $count = $wpdb->get_var('SELECT COUNT(comment_ID) FROM ' . $wpdb->comments. ' WHERE comment_author_email = "' . get_comment_author_email() . '"');
    echo $count . ' Kommentare';
}


/* FaceBook Meta Tags
=================================================== */
function mfields_facebook_meta() {
    if ( is_singular() ) {
        $image = '';
        if ( has_post_thumbnail( get_the_ID() ) ) {
            $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
        }
        print "\n" . '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '"/>';
        print "\n" . '<meta property="og:site_name" content="' . esc_attr( get_bloginfo() ) . '"/>';
        if ( ! empty( $image ) ) {
            print "\n" . '<meta property="og:image" content="' . esc_url( $image ) . '"/>';
        }
    }
}
add_action( 'wp_head', 'mfields_facebook_meta' );


/* Pagination
=================================================== */
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."' class='firstPage'></a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='previousPage'>Zur&uuml;ck</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class='nextPage'>Vor</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."' class='lastPage'></a>";
     }
}