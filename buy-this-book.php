<?php
/**
 * @package Buy_This_Book
 * @version 1.0
 */
/*
Plugin Name: Buy This Book
Plugin URI: http://raynfall.com/buy-this-book
Description: For published authors who want to easily show off their books on different services through a slideout menu. Widget version only. Currently supports linking to Amazon, Kobo, Smashwords, Barnes & Noble, Lulu, and iBooks. Please see the <a href="http://raynfall.com/buy-this-book">plugin page</a> for step-by-step installation instructions.
Author: Claire Ryan
Version: 1.0
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
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$header = apply_filters( 'widget_header', $instance['header'] );
		
		$image1 = apply_filters( 'widget_image1', $instance['image1'] );
		$amazon1 = apply_filters( 'widget_amazon1', $instance['amazon1'] );
		$kobo1 = apply_filters( 'widget_kobo1', $instance['kobo1'] );
		$bn1 = apply_filters( 'widget_bn1', $instance['bn1'] );
		$smashwords1 = apply_filters( 'widget_smashwords1', $instance['smashwords1'] );
		$lulu1 = apply_filters( 'widget_lulu1', $instance['lulu1'] );
		$ibooks1 = apply_filters( 'widget_ibooks1', $instance['ibooks1'] );
		
		$image2 = apply_filters( 'widget_image2', $instance['image2'] );
		$amazon2 = apply_filters( 'widget_amazon2', $instance['amazon2'] );
		$kobo2 = apply_filters( 'widget_kobo2', $instance['kobo2'] );
		$bn2 = apply_filters( 'widget_bn2', $instance['bn2'] );
		$smashwords2 = apply_filters( 'widget_smashwords2', $instance['smashwords2'] );
		$lulu2 = apply_filters( 'widget_lulu2', $instance['lulu2'] );
		$ibooks2 = apply_filters( 'widget_ibooks2', $instance['ibooks2'] );
		
		$image3 = apply_filters( 'widget_image3', $instance['image3'] );
		$amazon3 = apply_filters( 'widget_amazon3', $instance['amazon3'] );
		$kobo3 = apply_filters( 'widget_kobo3', $instance['kobo3'] );
		$bn3 = apply_filters( 'widget_bn3', $instance['bn3'] );
		$smashwords3 = apply_filters( 'widget_smashwords3', $instance['smashwords3'] );
		$lulu3 = apply_filters( 'widget_lulu3', $instance['lulu3'] );
		$ibooks3 = apply_filters( 'widget_ibooks3', $instance['ibooks3'] );
				
		$before_widget = '<div class="buybook widget">';
		$after_widget = '</div><div style="clear:both;"></div>';
		$before_header='<h3 class="widget-title">';
		$after_header='</h3>';
		$before_image='<div class="toggle"><a class="trigger" href="#"><img class="btbalign"src="';
		$after_image='"/ ></a><div class="box">';
		$closer = '</div></div>';
		echo $before_widget;
		if ( ! empty( $header ) )
			echo $before_header . $header . $after_header;
		if ( ! empty( $image1 ) )
		{
			echo $before_image . $image1 . $after_image;
			if ( ! empty( $amazon1 ) )
				echo '<a href="' . $amazon1 . '" title="Amazon" target="_blank"><img src="' . plugins_url('icons/amazon.png', __FILE__) . '" alt="Amazon" /></a>';
			if ( ! empty( $kobo1 ) )
				echo '<a href="' . $kobo1 . '" title="Kobo" target="_blank"><img src="' . plugins_url('icons/kobo.png', __FILE__) . '" alt="Kobo" /></a>';
			if ( ! empty( $bn1 ) )
				echo '<a href="' . $bn1 . '" title="Barnes & Noble" target="_blank"><img src="' . plugins_url('icons/bn.png', __FILE__) . '" alt="Barnes & Noble" /></a>';
			if ( ! empty( $smashwords1 ) )
				echo '<a href="' . $smashwords1 . '" title="Smashwords" target="_blank"><img src="' . plugins_url('icons/smashwords.png', __FILE__) . '" alt="Smashwords" /></a>';
			if ( ! empty( $lulu1 ) )
				echo '<a href="' . $lulu1 . '" title="Lulu" target="_blank"><img src="' . plugins_url('icons/lulu.png', __FILE__) . '" alt="Lulu" /></a>';
			if ( ! empty( $ibooks1 ) )
				echo '<a href="' . $ibooks1 . '" title="iBooks" target="_blank"><img src="' . plugins_url('icons/ibooks.png', __FILE__) . '" alt="iBooks" /></a>';
			echo $closer;
		}
		if ( ! empty( $image2 ) )
		{
			echo $before_image . $image2 . $after_image;
			if ( ! empty( $amazon2 ) )
				echo '<a href="' . $amazon2 . '" title="Amazon" target="_blank"><img src="' . plugins_url('icons/amazon.png', __FILE__) . '" alt="Amazon" /></a>';
			if ( ! empty( $kobo2 ) )
				echo '<a href="' . $kobo2 . '" title="Kobo" target="_blank"><img src="' . plugins_url('icons/kobo.png', __FILE__) . '" alt="Kobo" /></a>';
			if ( ! empty( $bn2 ) )
				echo '<a href="' . $bn2 . '" title="Barnes & Noble" target="_blank"><img src="' . plugins_url('icons/bn.png', __FILE__) . '" alt="Barnes & Noble" /></a>';
			if ( ! empty( $smashwords2 ) )
				echo '<a href="' . $smashwords2 . '" title="Smashwords" target="_blank"><img src="' . plugins_url('icons/smashwords.png', __FILE__) . '" alt="Smashwords" /></a>';
			if ( ! empty( $lulu2 ) )
				echo '<a href="' . $lulu2 . '" title="Lulu" target="_blank"><img src="' . plugins_url('icons/lulu.png', __FILE__) . '" alt="Lulu" /></a>';
			if ( ! empty( $ibooks2 ) )
				echo '<a href="' . $ibooks2 . '" title="iBooks" target="_blank"><img src="' . plugins_url('icons/ibooks.png', __FILE__) . '" alt="iBooks" /></a>';
			echo $closer;
		}
		if ( ! empty( $image3 ) )
		{
			echo $before_image . $image3 . $after_image;
			if ( ! empty( $amazon3 ) )
				echo '<a href="' . $amazon3 . '" title="Amazon" target="_blank"><img src="' . plugins_url('icons/amazon.png', __FILE__) . '" alt="Amazon" /></a>';
			if ( ! empty( $kobo3 ) )
				echo '<a href="' . $kobo3 . '" title="Kobo" target="_blank"><img src="' . plugins_url('icons/kobo.png', __FILE__) . '" alt="Kobo" /></a>';
			if ( ! empty( $bn3 ) )
				echo '<a href="' . $bn3 . '" title="Barnes & Noble" target="_blank"><img src="' . plugins_url('icons/bn.png', __FILE__) . '" alt="Barnes & Noble" /></a>';
			if ( ! empty( $smashwords3 ) )
				echo '<a href="' . $smashwords3 . '" title="Smashwords" target="_blank"><img src="' . plugins_url('icons/smashwords.png', __FILE__) . '" alt="Smashwords" /></a>';
			if ( ! empty( $lulu3 ) )
				echo '<a href="' . $lulu3 . '" title="Lulu" target="_blank"><img src="' . plugins_url('icons/lulu.png', __FILE__) . '" alt="Lulu" /></a>';
			if ( ! empty( $ibooks3 ) )
				echo '<a href="' . $ibooks3 . '" title="iBooks" target="_blank"><img src="' . plugins_url('icons/ibooks.png', __FILE__) . '" alt="iBooks" /></a>';
			echo $closer;
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
		$instance = array();
		$instance['header'] = strip_tags( $new_instance['header'] );
		$instance['image1'] = strip_tags( $new_instance['image1'] );
		$instance['amazon1'] = strip_tags( $new_instance['amazon1'] );
		$instance['kobo1'] = strip_tags( $new_instance['kobo1'] );
		$instance['bn1'] = strip_tags( $new_instance['bn1'] );
		$instance['smashwords1'] = strip_tags( $new_instance['smashwords1'] );
		$instance['lulu1'] = strip_tags( $new_instance['lulu1'] );
		$instance['ibooks1'] = strip_tags( $new_instance['ibooks1'] );
		
		$instance['image2'] = strip_tags( $new_instance['image2'] );
		$instance['amazon2'] = strip_tags( $new_instance['amazon2'] );
		$instance['kobo2'] = strip_tags( $new_instance['kobo2'] );
		$instance['bn2'] = strip_tags( $new_instance['bn2'] );
		$instance['smashwords2'] = strip_tags( $new_instance['smashwords2'] );
		$instance['lulu2'] = strip_tags( $new_instance['lulu2'] );
		$instance['ibooks2'] = strip_tags( $new_instance['ibooks2'] );
		
		$instance['image3'] = strip_tags( $new_instance['image3'] );
		$instance['amazon3'] = strip_tags( $new_instance['amazon3'] );
		$instance['kobo3'] = strip_tags( $new_instance['kobo3'] );
		$instance['bn3'] = strip_tags( $new_instance['bn3'] );
		$instance['smashwords3'] = strip_tags( $new_instance['smashwords3'] );
		$instance['lulu3'] = strip_tags( $new_instance['lulu3'] );
		$instance['ibooks3'] = strip_tags( $new_instance['ibooks3'] );
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
		if ( isset( $instance[ 'header' ] ) ) {
			$header = $instance[ 'header' ];
		}
		else {
			$header = __( 'Widget Header', 'text_domain' );
		}
		if ( isset( $instance[ 'image1' ] ) ) {
			$image1 = $instance[ 'image1' ];
		}
		else {
			$image1 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'amazon1' ] ) ) {
			$amazon1 = $instance[ 'amazon1' ];
		}
		else {
			$amazon1 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'kobo1' ] ) ) {
			$kobo1 = $instance[ 'kobo1' ];
		}
		else {
			$kobo1 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'bn1' ] ) ) {
			$bn1 = $instance[ 'bn1' ];
		}
		else {
			$bn1 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'smashwords1' ] ) ) {
			$smashwords1 = $instance[ 'smashwords1' ];
		}
		else {
			$smashwords1 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'lulu1' ] ) ) {
			$lulu1 = $instance[ 'lulu1' ];
		}
		else {
			$lulu1 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'ibooks1' ] ) ) {
			$ibooks1 = $instance[ 'ibooks1' ];
		}
		else {
			$ibooks1 = __( '', 'text_domain' );
		}
				if ( isset( $instance[ 'image2' ] ) ) {
			$image2 = $instance[ 'image2' ];
		}
		else {
			$image2 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'amazon2' ] ) ) {
			$amazon2 = $instance[ 'amazon2' ];
		}
		else {
			$amazon2 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'kobo2' ] ) ) {
			$kobo2 = $instance[ 'kobo2' ];
		}
		else {
			$kobo2 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'bn2' ] ) ) {
			$bn2 = $instance[ 'bn2' ];
		}
		else {
			$bn2 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'smashwords2' ] ) ) {
			$smashwords2 = $instance[ 'smashwords2' ];
		}
		else {
			$smashwords2 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'lulu2' ] ) ) {
			$lulu2 = $instance[ 'lulu2' ];
		}
		else {
			$lulu2 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'ibooks2' ] ) ) {
			$ibooks2 = $instance[ 'ibooks2' ];
		}
		else {
			$ibooks2 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'image3' ] ) ) {
			$image3 = $instance[ 'image3' ];
		}
		else {
			$image3 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'amazon3' ] ) ) {
			$amazon3 = $instance[ 'amazon3' ];
		}
		else {
			$amazon3 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'kobo3' ] ) ) {
			$kobo3 = $instance[ 'kobo3' ];
		}
		else {
			$kobo3 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'bn3' ] ) ) {
			$bn3 = $instance[ 'bn3' ];
		}
		else {
			$bn3 = __( '', 'text_domain' );
		}
		
		if ( isset( $instance[ 'smashwords3' ] ) ) {
			$smashwords3 = $instance[ 'smashwords3' ];
		}
		else {
			$smashwords3 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'lulu3' ] ) ) {
			$lulu3 = $instance[ 'lulu3' ];
		}
		else {
			$lulu3 = __( '', 'text_domain' );
		}
		if ( isset( $instance[ 'ibooks3' ] ) ) {
			$ibooks3 = $instance[ 'ibooks3' ];
		}
		else {
			$ibooks3 = __( '', 'text_domain' );
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'header' ); ?>"><?php _e( ' Header' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'header' ); ?>" name="<?php echo $this->get_field_name( 'header' ); ?>" type="text" value="<?php echo esc_attr( $header ); ?>" />
		<div class="btbbookcolumn">
		<label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'First book image:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_attr( $image1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'amazon1' ); ?>"><?php _e( 'Amazon:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'amazon1' ); ?>" name="<?php echo $this->get_field_name( 'amazon1' ); ?>" type="text" value="<?php echo esc_attr( $amazon1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'kobo1' ); ?>"><?php _e( 'Kobo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'kobo1' ); ?>" name="<?php echo $this->get_field_name( 'kobo1' ); ?>" type="text" value="<?php echo esc_attr( $kobo1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'bn1' ); ?>"><?php _e( 'Barnes & Noble:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'bn1' ); ?>" name="<?php echo $this->get_field_name( 'bn1' ); ?>" type="text" value="<?php echo esc_attr( $bn1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'smashwords1' ); ?>"><?php _e( 'Smashwords:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'smashwords1' ); ?>" name="<?php echo $this->get_field_name( 'smashwords1' ); ?>" type="text" value="<?php echo esc_attr( $smashwords1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'ibooks1' ); ?>"><?php _e( 'iBooks:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'ibooks1' ); ?>" name="<?php echo $this->get_field_name( 'ibooks1' ); ?>" type="text" value="<?php echo esc_attr( $ibooks1 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'lulu1' ); ?>"><?php _e( 'Lulu:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'lulu1' ); ?>" name="<?php echo $this->get_field_name( 'lulu1' ); ?>" type="text" value="<?php echo esc_attr( $lulu1 ); ?>" />
		</div>
		<div class="btbbookcolumn">
		<label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e( 'Second book image:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo esc_attr( $image2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'amazon2' ); ?>"><?php _e( 'Amazon:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'amazon2' ); ?>" name="<?php echo $this->get_field_name( 'amazon2' ); ?>" type="text" value="<?php echo esc_attr( $amazon2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'kobo2' ); ?>"><?php _e( 'Kobo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'kobo2' ); ?>" name="<?php echo $this->get_field_name( 'kobo2' ); ?>" type="text" value="<?php echo esc_attr( $kobo2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'bn2' ); ?>"><?php _e( 'Barnes & Noble:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'bn2' ); ?>" name="<?php echo $this->get_field_name( 'bn2' ); ?>" type="text" value="<?php echo esc_attr( $bn2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'smashwords2' ); ?>"><?php _e( 'Smashwords:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'smashwords2' ); ?>" name="<?php echo $this->get_field_name( 'smashwords2' ); ?>" type="text" value="<?php echo esc_attr( $smashwords2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'ibooks2' ); ?>"><?php _e( 'iBooks:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'ibooks2' ); ?>" name="<?php echo $this->get_field_name( 'ibooks2' ); ?>" type="text" value="<?php echo esc_attr( $ibooks2 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'lulu2' ); ?>"><?php _e( 'Lulu:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'lulu2' ); ?>" name="<?php echo $this->get_field_name( 'lulu2' ); ?>" type="text" value="<?php echo esc_attr( $lulu2 ); ?>" />
		</div>
		<div class="btbbookcolumn">
		<label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php _e( 'Third book image:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" type="text" value="<?php echo esc_attr( $image3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'amazon3' ); ?>"><?php _e( 'Amazon:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'amazon3' ); ?>" name="<?php echo $this->get_field_name( 'amazon3' ); ?>" type="text" value="<?php echo esc_attr( $amazon3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'kobo3' ); ?>"><?php _e( 'Kobo:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'kobo3' ); ?>" name="<?php echo $this->get_field_name( 'kobo3' ); ?>" type="text" value="<?php echo esc_attr( $kobo3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'bn3' ); ?>"><?php _e( 'Barnes & Noble:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'bn3' ); ?>" name="<?php echo $this->get_field_name( 'bn3' ); ?>" type="text" value="<?php echo esc_attr( $bn3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'smashwords3' ); ?>"><?php _e( 'Smashwords:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'smashwords3' ); ?>" name="<?php echo $this->get_field_name( 'smashwords3' ); ?>" type="text" value="<?php echo esc_attr( $smashwords3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'ibooks3' ); ?>"><?php _e( 'iBooks:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'ibooks3' ); ?>" name="<?php echo $this->get_field_name( 'ibooks3' ); ?>" type="text" value="<?php echo esc_attr( $ibooks3 ); ?>" />
		<label for="<?php echo $this->get_field_id( 'lulu3' ); ?>"><?php _e( 'Lulu:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'lulu3' ); ?>" name="<?php echo $this->get_field_name( 'lulu3' ); ?>" type="text" value="<?php echo esc_attr( $lulu3 ); ?>" />
		</div>
		</p>
		<?php 
	}

} // class Buy_Book
add_action('widgets_init', 'register_buy_book');
function register_buy_book() {
    register_widget('Buy_Book');
}
add_action('wp_enqueue_scripts', 'enqueuestylesandjs');
add_filter('admin_enqueue_scripts', 'enqueuewidgetcss' );
function enqueuestylesandjs(){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style('bookstyle', plugins_url('style.css', __FILE__));
	wp_enqueue_script('bookscript', plugins_url('buybook.js', __FILE__));
}
function enqueuewidgetcss($page) {
		if( 'widgets.php' != $page )
        {
             return;
        }
		wp_enqueue_style('admincss', plugins_url('adminstyle.css', __FILE__));
}
?>
