<?php

include_once(dirname(__FILE__).'/config.php');

global $icq_plugin_name;

add_action( 'widgets_init', 'icq_load_widgets' );

/**
 * Register widget.
 */
function icq_load_widgets() {
  register_widget( 'ICQ_Widget' );
}

/**
 * Doctor Appointment Widget class.
 */
class ICQ_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function ICQ_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Doctor Appointment Widget', 'description' => 'Doctor Appointment Widget' );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'gsc-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'gsc-widget', __('Doctor Appointment Widget'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );	
		
		$display_results = empty($instance['display_results']) ? 5 : $instance['display_results'];			

		/* Before widget (defined by themes). */
		if ( ! $hide_widget_format )
				echo $before_widget;

		display_search_result_widget($display_results);		

		/* After widget (defined by themes). */
		if ( ! $hide_widget_format )
			echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['display_results'] = $new_instance['display_results'];
		

		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'display_results' => 5 );
		$instance = wp_parse_args( (array) $instance, $defaults );
		$display_results = $instance['display_results']; ?>		

		<!-- Display Results: Select Box -->
		<p>
			<label for="<?php echo $this->get_field_id( 'display_results' ); ?>">Display Results</label> 
			<select id="<?php echo $this->get_field_id( 'display_results' ); ?>" name="<?php echo $this->get_field_name( 'display_results' ); ?>" class="widefat" style="width:100%;">
				<option <?php echo $display_results == 5 ? 'selected="selected"' : '' ?> value="5" >5</option>
				<option <?php echo $display_results == 10 ? 'selected="selected"' : '' ?> value="10" >10</option>
				<option <?php echo $display_results == 15 ? 'selected="selected"' : '' ?> value="15" >15</option>
			</select>
		</p>		

	<?php
	}
}

?>
