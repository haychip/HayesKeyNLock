<?php

class Simple_light_widget_smm extends WP_Widget {

	
	function __construct() {

		parent::__construct('simple_light_widget_smm','Simple light theme icon', array(
			'description' => __( 'add fontawesome icons to your site', 'simple-light' ) 
		));
	}

	public function form( $instance ) {

		?>

			<div >
				<h4><?php esc_html_e( 'Link item details', 'simple-light' ) ?></h4>
				<p>
					<label for='<?php echo esc_attr( $this->get_field_id('icon') ) ?>'><?php esc_html_e( 'Fontawesome icon class', 'simple-light' ) ?></label>
					<input name='<?php echo esc_attr( $this->get_field_name('icon') ) ?>' id='<?php echo esc_attr( $this->get_field_id('icon') ) ?>' class='widefat' type='text' value='<?php echo esc_attr( ( isset( $instance['icon'] ) ) ? $instance['icon'] :  'fab fa-facebook-f' ) ?>' />
				</p>
				<p>
					<label for='<?php echo esc_attr( $this->get_field_id('url') ) ?>'><?php esc_html_e( 'URL', 'simple-light' ) ?></label>
					<input name='<?php echo esc_attr( $this->get_field_name('url') ) ?>' id='<?php echo esc_attr( $this->get_field_id('url') ) ?>'  class='widefat' type='text' value='<?php echo esc_attr( ( isset( $instance['url'] ) ) ? $instance['url'] : 'example-yourlink.com' ) ?>' />
				</p>
				<p>
					<label for='<?php echo esc_attr( $this->get_field_id('color') ) ?>'><?php esc_html_e( 'Icon color (use HEX format)', 'simple-light' ) ?></label>
					<input name='<?php echo esc_attr( $this->get_field_name('color') ) ?>' id='<?php echo esc_attr( $this->get_field_id('color') ) ?>'  class='widefat' type='color' value='<?php echo esc_attr( ( isset( $instance['color'] ) ) ? $instance['color'] : '#4267b2' ) ?>' />
				</p>
			</div>
			
		<?php

	}
	
	public function widget( $args, $instance ) {
		
		static $num = 0;
		$num+=1;

		$instance['url'] = isset( $instance['url'] ) ? $instance['url'] : '#' ;
		$instance['icon'] = isset( $instance['icon'] ) ? $instance['icon'] : 'fab fa-facebook-f' ;
		$instance['color'] = isset( $instance['color'] ) ? $instance['color'] : '#4267b2' ;
		
		$title = apply_filters( 'widget_title', $instance['icon'] );
	    $text = apply_filters( 'widget_text', $instance['color'] );

		if ( $args['id'] == 'sidebar-smm' ) {

			?>
				<div class='col-12 p-0 d-flex align-items-center justify-content-center smm-animation smm-animation-<?php echo esc_attr( $num ); ?>' data-color='<?php echo esc_attr( $instance['color'] ); ?>' data-num='<?php echo esc_attr( $num ); ?>'>
					<div>
						<div class="smm-back"></div>
						<a href="<?php echo esc_url( $instance['url'] ); ?>">
							<i class="<?php echo esc_attr( $instance['icon'] ); ?>"></i>	
						</a>
					</div>
				</div>
			<?php
		
		} else {

			?>
				<div class="col">
					<a href="<?php echo esc_url( $instance['url'] ); ?>">
						<i class="<?php echo esc_attr( $instance['icon'] ); ?>"></i>	
					</a>
				</div>
			<?php
		}

	}

	public function update( $new_instance, $old_instance ) {

        $new_instance['url'] = esc_url_raw( $new_instance['url'] );
        $new_instance['color'] = sanitize_hex_color( $new_instance['color'] );

        $classes = explode(' ', $new_instance['icon'] );
        foreach ( $classes as $k => $class ) {
            if ( !empty( $classes[ $k ] ) ) {
                $classes[ $k ] = sanitize_html_class( $classes[ $k ] );
            } else {
                unset( $classes[ $k ] );
            }
        }

        $new_instance['icon'] = implode(' ', $classes );

		return $new_instance;
	}

}