<?php
// Widget class for displaying feedback
class Feedback_Widget extends WP_Widget {

    // Constructor
    public function __construct() {
        parent::__construct(
            'feedback_widget', // Base ID
            __( 'Asikaspalaute Vimpain', 'customer-feedback-plugin' ), // Name
            array( 'description' => __( 'Widget for displaying customer feedback', 'customer-feedback-plugin' ), ) // Args
        );
    }

    // Widget front-end
    public function widget( $args, $instance ) {
        // Widget output
        echo $args['before_widget'];
        echo $args['before_title'] . apply_filters( 'widget_title', __( 'Asiakaspalaute', 'customer-feedback-plugin' ) ) . $args['after_title'];
        echo '<ul>';
        $feedback_posts = new WP_Query( array(
            'post_type'      => 'feedback',
            'orderby' => 'rand',
            'posts_per_page' => $instance['count'],
        ) );
        while ( $feedback_posts->have_posts() ) : $feedback_posts->the_post();
            echo '<li><strong>' . get_the_title() . '</strong>: ' . get_the_excerpt() . '</li>';
        endwhile;
        echo '</ul>';
        echo $args['after_widget'];
    }

    // Widget back-end
    public function form( $instance ) {
        // Widget form fields
        $count = ! empty( $instance['count'] ) ? $instance['count'] : __( '5', 'customer-feedback-plugin' );
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Näytettävien palautteiden määrä:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>" type="text" value="<?php echo esc_attr( $count ); ?>" />
        </p>
        <?php 
    }

    // Widget update
    public function update( $new_instance, $old_instance ) {
        // Save widget options
        $instance = array();
        $instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( $new_instance['count'] ) : '';
        return $instance;
    }

} // class Feedback_Widget

// Register widget
function register_feedback_widget() {
    register_widget( 'Feedback_Widget' );
}
add_action( 'widgets_init', 'register_feedback_widget' );
