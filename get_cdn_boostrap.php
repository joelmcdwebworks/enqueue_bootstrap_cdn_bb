// Add this function and action to your functions.php file in your child theme.

function get_cdn_boostrap() {

	// Remove Bootstrap enqueued by Beaver Builder.

	wp_dequeue_script( 'bootstrap-4' );
	wp_dequeue_style( 'bootstrap-4' );

	// Add latest version of Boostrap 4.

	wp_enqueue_style('bootstrap-cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

	wp_enqueue_script( 'popper-cdn','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );

	wp_enqueue_script( 'bootstrap-cdn','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );
}

add_action( 'wp_enqueue_scripts', 'get_cdn_boostrap' );
