<?php

function the_simple_light_breadcrumb() {
	
	global $post;

	if( ! is_home() ){ 

	echo '<ul class="breadcrumb"><li class="breadcrumb-item" ><a href="' . esc_url( home_url() ) . '">' . esc_html__( 'Home', 'simple-light' ) . '</a></li>';

		if ( is_single() ){ 

		echo '<li class="breadcrumb-item">';

			the_category(',');

		echo '</li><li class="breadcrumb-item active">';

			echo esc_html( get_the_title() );

		echo '</li>';

		} elseif ( is_page() ) { 
			
			if ( $post->post_parent ) {

				$parent_id  = $post->post_parent;
				$breadcrumbs = array();

				while ( $parent_id ) {

					$page = get_page( $parent_id );
					$breadcrumbs[] = '<li class="breadcrumb-item" ><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a></li> ';
					$parent_id  = $page->post_parent;
				}

				$breadcrumbs = array_reverse( $breadcrumbs );

				foreach ( $breadcrumbs as $crumb ) {

					echo $crumb . ' ';

				}

			}
			
			echo '<li class="breadcrumb-item active" >';
			echo esc_html( get_the_title() ) .'</li>';
			
		} elseif ( is_category() ) { 
			
			global $wp_query;

			$obj_cat = $wp_query->get_queried_object();
			$current_cat = $obj_cat->term_id;
			$current_cat = get_category( $current_cat );
			$parent_cat = get_category( $current_cat->parent );

			if ( $current_cat->parent != 0 ) {

				echo '<li class="breadcrumb-item">' . esc_html( get_category_parents( $parent_cat, TRUE, ' ') ) . '</li>'; 

			}

			echo '<li class="breadcrumb-item active" >';
			echo esc_html( single_cat_title('', false) ) . '</li>';

		} elseif ( is_search() ) { 
			
			echo '<li class="breadcrumb-item active" >';
			echo esc_html__('Search results for', 'simple-light' ) . ': "' . esc_html( get_search_query() ) . '" '.'</li>';

		} elseif ( is_tag() ) { 
			
			echo '<li class="breadcrumb-item active" >';
			echo esc_html( single_tag_title('', false) ) . '</li>';

		} elseif ( is_day() ) { 
			
			echo '<li class="breadcrumb-item active" ><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . ' </a></li> ';
			echo '<li class="breadcrumb-item active" ><a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . esc_html( get_the_time( 'F' ) ) . ' </a></li> ';
			echo '<span class="px-1">' . esc_html( get_the_time( 'd' ) ) . '</span>' ;

		} elseif ( is_month() ) { 
			
			echo '<li class="breadcrumb-item active" ><a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . esc_html( get_the_time( 'Y' ) ) . ' </a></li> ';
			echo '<span class="px-1">' . esc_html( get_the_time( 'F' ) ) . '</span>' ;

		} elseif ( is_year() ) { 
			
			echo '<span class="px-1">' . esc_html( get_the_time( 'Y' ) ) . '</span>' ;

		} elseif ( is_author() ) { 
			
			global $author;

			$userdata = get_userdata( $author );
			echo esc_html__( 'Public' , 'simple-light' ) . ' : ' . esc_html( $userdata->display_name );

		} 

		// Number of current page
		if ( get_query_var( 'paged' ) ) 

			echo ' ( ' . esc_html( get_query_var( 'paged' ) ) . ' ' . esc_html__( 'page' , 'simple-light' ) . ' )';
	
	echo '</ul>';

	// Home	
	} else { 

		echo '<ul><li><a href="' . esc_url( site_url() ) . '">' . esc_html__( 'Home', 'simple-light' ) . '</a></li><ul>';

	}
	
}




