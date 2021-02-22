// Add this function and action to your functions.php file in your child theme.

function get_cdn_boostrap() {

	// Remove Bootstrap enqueued by Beaver Builder.

	wp_dequeue_script( 'bootstrap-4' );
	wp_dequeue_style( 'bootstrap-4' );

	// Add latest version of Boostrap 4.

	wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css');

	wp_enqueue_script( 'popper-cdn','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array( 'jquery' ),'',true );

	wp_enqueue_script( 'bootstrap-cdn','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array( 'jquery' ),'',true );
	
}

add_action( 'wp_enqueue_scripts', 'get_cdn_boostrap' );
