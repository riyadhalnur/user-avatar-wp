<?php

function shortcode_user_avatar() {
	if(is_user_logged_in()) { // check if user is logged in
		global $current_user; // get current user's information
		get_currentuserinfo();
		return get_avatar( $current_user -> ID, 24 ); // display the logged in user's avatar
	}
	else {
	  // if not logged in, show default avatar. change URL to show your own default avatar
		return get_avatar( 'http://1.gravatar.com/avatar/ad524503a11cd5ca435acc9bb6523536?s=64', 24 );
	}
}
add_shortcode('display-user-avatar','shortcode_user_avatar');

?>
