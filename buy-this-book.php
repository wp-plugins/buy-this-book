<?php
/**
 * @package Buy_This_Book
 * @version 1.1
 */
/*
Plugin Name: Buy This Book
Plugin URI: http://raynfall.com/buy-this-book
Description: For published authors who want to easily show off their books on different services through a slideout menu. Widget version only. Currently supports linking to Amazon, Kobo, Smashwords, Barnes & Noble, Lulu, and iBooks. Please see the <a href="http://raynfall.com/buy-this-book">plugin page</a> for step-by-step installation instructions.
Author: Claire Ryan
Version: 1.1
Author URI: http://raynfall.com/
*/
/*  Copyright 2012 CLAIRE RYAN  (email : info@raynfall.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Adds the Buy This Book Widget.
 */
 
$btb_service_array = array( 'Amazon', 'Kobo', 'Smashwords', 'Lulu', 'Barnes and Noble', 'iBooks' );
 
class Buy_Book extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	 
	public function __construct() {
		$widget_ops = array('classname' => 'widget_text', 'description' => __('Add your books here'));
		$control_ops = array('width' => 600);
		parent::__construct('Buy_Book', __('Buy This Book'), $widget_ops, $control_ops);
	}

	/**
	 * Front-end display of the BTB Widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		global $btb_service_array;
		extract( $args );
		$header = apply_filters( 'widget_header', $instance['header'] );
		for($i=1; $i <= 3; $i++) {
			${'image'.$i} = apply_filters( 'widget_image'.$i, $instance['image'.$i] );
			foreach ($btb_service_array as &$btb_name)
			{
				${$btb_name.$i} = apply_filters( ('widget_'. $btb_name  . $i), $instance[($btb_name.$i)] );
			}
		}				
		$before_widget = '<div class="buybook widget">';
		$after_widget = '</div><div style="clear:both;"></div>';
		$before_header='<h3 class="widget-title">';
		$after_header='</h3>';
		$before_image='<div class="toggle"><a class="trigger" href="#"><img class="btbalign" src="';
		$after_image='"/ ></a><div class="box">';
		$closer = '</div></div>';
		echo $before_widget;
		if ( ! empty( $header ) )
			echo $before_header . esc_attr($header) . $after_header;
		for($k=1; $k <= 3; $k++) {
			if ( ! empty( ${'image'.$k} ) ) {
				echo $before_image . esc_url(${'image'.$k}) . $after_image;
				foreach ($btb_service_array as &$btb_name) {	
					if ( ! empty( ${$btb_name.$k} ) )
						echo '<a href="' . esc_url((${$btb_name.$k})) . '" title="' . esc_attr($btb_name) . '" target="_blank"><img src="' . esc_url(plugins_url('icons/' . esc_attr($btb_name) . '.png', __FILE__)) . '" alt="' . esc_attr($btb_name) . '" /></a>';
				}
				echo $closer;
			}
		}
		echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		global $btb_service_array;
		$instance = array();
		$instance['header'] = esc_html(strip_tags( $new_instance['header'] ));
		for($x=1; $x <= 3; $x++) {
			$instance[('image'.$x)] = esc_url(strip_tags( $new_instance[('image'.$x)] ));
			foreach ($btb_service_array as &$btb_name) {
				echo $btb_name.$x;
				$instance[($btb_name.$x)] = esc_url(strip_tags( $new_instance[($btb_name.$x)] ));
			}
		}
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		global $btb_service_array;
		if ( isset( $instance[ 'header' ] ) ) {
			$header = $instance[ 'header' ];
		}
		else {
			$header = __( 'Widget Header', 'text_domain' );
		}
		
		for($y=1; $y <= 3; $y++) {
			if ( isset( $instance[ ('image'.$y) ] ) ) {
				${'image' .$y} = $instance[ ('image'.$y) ];
			}
			else {
				${'image' .$y} = __( '', 'text_domain' );
			}
			foreach ($btb_service_array as &$btb_name) {
				if ( isset( $instance[ ($btb_name.$y) ] ) ) {
					${$btb_name.$y} = $instance[ ($btb_name.$y) ];
				}
				else {
					${$btb_name.$y} = __( '', 'text_domain' );
				}
			}
		}
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'header' )); ?>"><?php _e( ' Header' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'header' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'header' )); ?>" type="text" value="<?php echo esc_attr( $header ); ?>" />
		<?php for($y=1; $y <= 3; $y++) { ?>
		<div class="btbbookcolumn">
		<label for="<?php echo $this->get_field_id( 'image'.$y ); ?>"><?php _e( 'Book Image '.$y ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'image'.$y )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image'.$y )); ?>" type="text" value="<?php echo esc_attr( ${'image'.$y} ); ?>" />
		<?php foreach ($btb_service_array as &$btb_name) { ?>
		<label for="<?php echo $this->get_field_id( $btb_name.$y ); ?>"><?php _e( $btb_name ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( $btb_name.$y )); ?>" name="<?php echo esc_attr($this->get_field_name( $btb_name.$y )); ?>" type="text" value="<?php echo esc_attr( ${$btb_name.$y} ); ?>" />
		<?php } ?>
		</div><?php } ?>
		</p>
		<?php 
	}

} // class Buy_Book
add_action('widgets_init', 'register_buy_book');
function register_buy_book() {
    register_widget('Buy_Book');
}
add_action('wp_enqueue_scripts', 'btb_enqueuestylesandjs');
add_filter('admin_enqueue_scripts', 'btb_enqueuewidgetcss' );
function btb_enqueuestylesandjs(){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style('bookstyle', plugins_url('style.css', __FILE__));
	wp_enqueue_script('bookscript', plugins_url('buybook.js', __FILE__));
}
function btb_enqueuewidgetcss($page) {
		if( 'widgets.php' != $page )
        {
             return;
        }
		wp_enqueue_style('admincss', plugins_url('adminstyle.css', __FILE__));
}
