<?php
defined('ABSPATH') or die("No script kiddies please!");

date_default_timezone_set("Asia/Bangkok");

add_theme_support( 'post-thumbnails' );

//custom image size
add_image_size( 'featured-slide-img', 658, 311, true );
//add_image_size('featured-slide-img', 658, 311, true);
add_image_size( 'featured-slide-img', 9999, 311, false );

add_image_size( 'mid-image', 175, 92, true );

// register menu
register_nav_menu('category-menu',__( 'Category Menu' ));



add_action('init', 'dvd_enqueue_script');
function dvd_enqueue_script(){
    wp_register_script('ajax_js', get_template_directory_uri() . '/js/ajax.js', array('jquery'), null, false);
    wp_localize_script('ajax_js', 'AJAX', array('url' => admin_url('admin-ajax.php')));
    wp_enqueue_script('ajax_js');
    
}
//register ajax action for category page
add_action('wp_ajax_autocomplete_getposts', 'autocomplete_getposts');
add_action('wp_ajax_nopriv_autocomplete_getposts', 'autocomplete_getposts');

//register ajax action for get comments
add_action('wp_ajax_get_comments_ajax', 'get_comments_ajax');
add_action('wp_ajax_nopriv_get_comments_ajax', 'get_comments_ajax');

//register ajax action for review rating
add_action('wp_ajax_add_review_rating', 'add_review_rating');
add_action('wp_ajax_nopriv_add_review_rating', 'add_review_rating');

//register ajax action for author voting
add_action('wp_ajax_vote_for_author', 'vote_for_author');
add_action('wp_ajax_nopriv_vote_for_author', 'vote_for_author');

//get background image
function get_bg_resize_image($postID, $size)
{
    if ( has_post_thumbnail() ){
        $image_link = wp_get_attachment_image_src(get_post_thumbnail_id($postID), array(175, 92));
        $image_link = $image_link[0]; 
    }
    else 
    {
        $image_link = "/wp-content/themes/enang/images/img_default.jpg";
    }
    return $image_link;
}

//get background image
function get_bg_image($postID)
{
    if ( has_post_thumbnail() ){
        $image_link = wp_get_attachment_url(get_post_thumbnail_id($postID));
    }
    else 
    {
        $image_link = "/wp-content/themes/enang/images/img_default.jpg";
    }
    return $image_link;
}

//get Vietnamese date time
function sw_get_current_weekday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = date("l");
    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ hai';
            break;
        case 'tuesday':
            $weekday = 'Thứ ba';
            break;
        case 'wednesday':
            $weekday = 'Thứ tư';
            break;
        case 'thursday':
            $weekday = 'Thứ năm';
            break;
        case 'friday':
            $weekday = 'Thứ sáu';
            break;
        case 'saturday':
            $weekday = 'Thứ bảy';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    return $weekday.', '.date('d/m/Y | H:i');
}


function addPostMetaValue($postID, $metakey, $value) {
    $count_key = $metakey;
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = $value;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, $value);
    }else{
        $count = $count + $value;
        update_post_meta($postID, $count_key, $count);
    }
}

												

function get_tag_keyword()
{
    $posttags = get_the_tags();
    $keyword = '';
    if ($posttags) {
      foreach($posttags as $tag) {
        $keyword = $keyword . $tag->name . ', '; 
      }
    }
    return $keyword;
}
												 
function get_relate_catID($catID){
    $allCat = array(0=>'4', 1=>'68', 2=>'3', 3=>'5', 4=>'69', 5=>'8', 6=>'2', 7=>'71', 8=>'74');
    $key = array_search($catID, $allCat);
     
     $result = array();
     for( $i = 0; $i < count($allCat); $i++ ){
        if( count($result) < 4 ){
            $element = ($key + 1)%count($allCat);
            array_push($result, $allCat[$element]);
        }
        $key++;
     }
     return $result;
}												

function get_sub_string($string, $num = 0)
{
    $str_array = explode(' ', $string);
    $result = '';
    
    if(count($str_array) < $num)
    {
        $result =  $string;
    }
    else{
        for($i = 0; $i < $num; $i++)
        {
            $result = $result.' '. $str_array[$i];
        }
    }
    
    return $result;
}

function c_get_avatar($user_id, $width = 30, $height = 30, $class=""){
    
    $userData = get_userdata( $user_id );
    $avatar = c_crop_image_resize(site_url($userData->cus_avatar), $width, $height, true);
    //var_dump($userData);
    $full_name = get_user_meta( $userData->ID, 'first_name', true ).' '.get_user_meta( $userData->ID, 'last_name', true );
    
    $result = '<img class="'.$class.'" src="'. esc_url($avatar).'" alt="'. $full_name.'" width="'.$width.'" height="'.$height.'"/> ';
    
    return $result;
}													

//crop image size by url													
function c_crop_image_resize( $url, $width = NULL, $height = NULL, $crop = true, $retina = false ) {
		global $wpdb;
		if ( empty( $url ) )
			return new WP_Error( 'no_image_url', __( 'No image URL has been entered.','wta' ), $url );
		// Get default size from database
		$width = ( $width )  ? $width : get_option( 'thumbnail_size_w' );
		$height = ( $height ) ? $height : get_option( 'thumbnail_size_h' );
		  //echo $url;
		// Allow for different retina sizes
		$retina = $retina ? ( $retina === true ? 2 : $retina ) : 1;
		// Get the image file path
		$file_path = parse_url( $url );
        
        //var_dump($file_path); exit;
		$file_path = $_SERVER['DOCUMENT_ROOT'] . $file_path['path'];
		//echo $file_path; exit;
		// Check for Multisite
		if ( is_multisite() ) {
			global $blog_id;
			$blog_details = get_blog_details( $blog_id );
			$file_path = str_replace( $blog_details->path . 'files/', '/wp-content/blogs.dir/'. $blog_id .'/files/', $file_path );
		}
		// Destination width and height variables
		$dest_width = $width * $retina;
		$dest_height = $height * $retina;
		// File name suffix (appended to original file name)
		$suffix = "{$dest_width}x{$dest_height}";
		// Some additional info about the image
		$info = pathinfo( $file_path );
		$dir = $info['dirname'];
		$ext = $info['extension'];
		$name = wp_basename( $file_path, ".$ext" );
        
        if ( 'bmp' == $ext ) {
			return new WP_Error( 'bmp_mime_type', __( 'Image is BMP. Please use either JPG or PNG.','wta' ), $url );
		}
		// Suffix applied to filename
		$suffix = "{$dest_width}x{$dest_height}";
		// Get the destination file name
		$dest_file_name = "{$dir}/{$name}-{$suffix}.{$ext}";
		if ( !file_exists( $dest_file_name ) ) {
		  
			// Load Wordpress Image Editor
			$editor = wp_get_image_editor( $file_path );
			if ( is_wp_error( $editor ) )
			{	
			     return array( 'url' => $url, 'width' => $width, 'height' => $height );
            }
			// Get the original image size
			$size = $editor->get_size();
			$orig_width = $size['width'];
			$orig_height = $size['height'];
			$src_x = $src_y = 0;
			$src_w = $orig_width;
			$src_h = $orig_height;
            
			if ( $crop ) {
			
				$cmp_x = $orig_width / $dest_width;
				$cmp_y = $orig_height / $dest_height;
				// Calculate x or y coordinate, and width or height of source
				if ( $cmp_x > $cmp_y ) {
					$src_w = round( $orig_width / $cmp_x * $cmp_y );
					$src_x = round( ( $orig_width - ( $orig_width / $cmp_x * $cmp_y ) ) / 2 );
				}
				else if ( $cmp_y > $cmp_x ) {
					$src_h = round( $orig_height / $cmp_y * $cmp_x );
					$src_y = round( ( $orig_height - ( $orig_height / $cmp_y * $cmp_x ) ) / 2 );
				}
			}
			// Time to crop the image!
			$editor->crop( $src_x, $src_y, $src_w, $src_h, $dest_width, $dest_height );
			// Now let's save the image
			$saved = $editor->save( $dest_file_name );
			// Get resized image information
			$resized_url = str_replace( basename( $url ), basename( $saved['path'] ), $url );
            
		}
		else {
		
			$resized_url = str_replace( basename( $url ), basename( $dest_file_name ), $url );
				
		}
        //echo $resized_url; exit;
		// Return image array
		return $resized_url;
	}											
												
/******--------AJAX--------********/
// function for both ajax and normal get comments 
function cus_get_comments($post_id = '0'){
    
    //echo $post_id;
    $current_date = (isset($_POST['last_date']))? $_POST['last_date']: date('Y-m-d H:i');
    $args = array(
    	'post_id' => $post_id,
        'date_query' => array(
            'before'     => $current_date,
    	),
        'status'  => 'approve',
        'number'  => 5,
        'orderby' => 'date',
        'order'   => 'DESC',
    );
    
    $comments =  get_comments( $args );
    if(count($comments) > 0){
        foreach( $comments as $comment ){
            $lastDate = $comment->comment_date;
            print_comment($comment); 
        }
        echo '<input type="hidden" class="lastpost_date" value="'.$lastDate.'">';
    }
    else{
        echo "no comment";
    }  
}													
//function save comment														
function add_review_rating(){
    global $wpdb;
    
    $date_add = date('Y-m-d H:i');
    $user_ip_address = get_client_ip();
    $user_id = (isset($_POST['user_id']))? $_POST['user_id'] :''; 
    $post_id = (isset($_POST['post_id']))? $_POST['post_id'] :''; 
    $rate = (isset($_POST['rate']))? $_POST['rate'] :'';  
    $comment_content = (isset($_POST['comment_content']))? $_POST['comment_content'] :'';          
    $user_data = get_userdata( $user_id );
    $comment_author = (!empty($user_data))? ($user_data->last_name.' '.$user_data->first_name): '';
    $comment_author_email = (!empty($user_data))? $user_data->user_email: '';
    $comment_author_city = (!empty($user_data))? $user_data->cus_city: '';
    
    $sql = $wpdb->prepare( 
        		"
            		INSERT INTO wp_ratings
            		( post_id, user_id, rate, user_ip, date_added )
            		VALUES ( %d, %d, %f, %s, %s )
            	", 
                    $post_id, 
                	$user_id, 
                	$rate,
                    $user_ip_address,
                    $date_add
                );
                
    
    $wpdb->query( $sql );
    
    $sql = $wpdb->prepare( 
        		"
            		INSERT INTO $wpdb->comments
            		( comment_post_ID, comment_author, comment_author_email, comment_author_IP, comment_date, comment_date_gmt, comment_content, comment_approved, comment_type, user_id, cus_rating, cus_author_city )
            		VALUES ( %d, %s, %s, %s, %s, %s, %s, %s, %s, %d, %f, %s )
            	", 
                    $post_id, 
                	$comment_author, 
                	$comment_author_email,
                    $user_ip_address,
                    $date_add,
                    $date_add,
                    $comment_content,
                    '1',
                    'comment',
                    $user_id,
                    $rate,
                    $comment_author_city
                    
             );      
    $wpdb->query( $sql );
    
    //update post_sum_rating meta and post_rating_total meta
    addPostMetaValue($post_id, 'post_sum_rating', (float)$rate );
    addPostMetaValue($post_id, 'post_rating_total', 1);
    
    echo "success";
    
    die();
}												
// function for both ajax and normal get comments 
function get_comments_ajax(){
    
    $post_id = (isset($_POST['post_id']))? $_POST['post_id']: 0;
    //echo 'post_id= '.$post_id;
    $current_date = (isset($_POST['last_date']))? $_POST['last_date']: date('Y-m-d H:i');
    //echo 'current_date= '.$current_date;
    
    $args = array(
    	'post_id' => $post_id,
        'date_query' => array(
            'before'     => $current_date,
    	),
        'status'  => 'approve',
        'number'  => 5,
        'orderby' => 'date',
        'order'   => 'DESC',
    );
    
    $comments =  get_comments( $args );
    if(count($comments) > 0){
        foreach( $comments as $comment ){
            $lastDate = $comment->comment_date;
            print_comment($comment); 
        }
        echo '<input type="hidden" class="lastpost_date" value="'.$lastDate.'">';
    }
    else{
        echo "no comment";
    }
    //check if ajax then call die() function
    
    die();   
}                                       
//print comment
function print_comment($comment){
    $output .= '<li class="item participant feedback clearfix ">';
    $output .=     '<div class="no-padding-left col-xs-4 col-sm-2 left-col">';
    $output .=         c_get_avatar($comment->user_id, 30, 30, "user-avatar user-avatar-sm");
    $output .=          '<div class="clear"></div>';
    $output .=      '</div>';
    $output .=      '<div class="col-xs-8 col-sm-10 right-col no-padding-right">';
    $output .=          '<time class="message-time" title="'.$comment->comment_date.'">'.get_comment_date('d-m-Y',$comment->comment_ID).'</time>';
    $output .=          '<header class="clearfix">';
    $output .=              '<div class="participant-name crop">'.$comment->comment_author.' </div>';
    $output .=              '<div class="participant-location hidden-xs"> <i class="fpph fpph-location"></i>'. $comment->cus_author_city .' </div>';
    $output .=              '<div class="feedback-rating pull-right">';
    $output .=                   '<div class="widget-jsModuleRating clearfix">';
    $output .=                       '<div class="price-tag">';
    $output .=                          '<span title="">'. $comment->cus_rating .'</span>';
    $output .=                       '</div>';
    $output .=                   '</div>';
    $output .=              '</div>';
    $output .=           '</header>';
    $output .=           '<p>'.$comment->comment_content.'</p>';
    $output .=        '</div>';
    $output .=        '<div class="clear"></div>';
    $output .=     '</li>';
    
    echo $output;
}

// function which process vote for author
function vote_for_author(){
    global $wpdb;
    
    $sum_voted = (int)$_POST['sum_voted'];
    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $author_id = $_POST['author_id'];
    $date_voted =  date('Y-m-d H:i');
    
    if(!empty($post_id) && !empty($user_id) && !empty($author_id)){
         $sql = $wpdb->prepare( 
        		"
            		INSERT INTO wp_author_votes
            		( post_id, user_id, author_id, date_voted)
            		VALUES ( %f, %f, %f, %s )
            	", 
                    $post_id, 
                	$user_id, 
                	$author_id,
                    $date_voted
                );
        $wpdb->query( $sql );
        
        //update author sum voted
        $sum_voted = $sum_voted + 1;
        $wpdb->query( "UPDATE wp_users
                        SET cus_sum_voted = $sum_voted
                        WHERE ID = $author_id" );
        echo $sum_voted;
        die();
    }
    
}												
/******--------END AJAX--------********/											

function get_user_data_field($field, $user_id)
{
    global $wpdb;
    $where = $wpdb->prepare( "WHERE ID = %d ", $user_id);
    $result = $wpdb->get_results( "SELECT $field FROM wp_users $where", ARRAY_A );
    //var_dump($count);
    
    return $result[0];
}
//function count number of comment
function count_comment($post_id)
{
    global $wpdb;
    $where = $wpdb->prepare( "WHERE comment_post_ID = %s AND comment_approved = %d ", $post_id, 1 );
    $count = $wpdb->get_results( "SELECT  COUNT(*) AS num_comments FROM {$wpdb->comments} $where", ARRAY_A );
    //var_dump($count);
    
    return $count[0]['num_comments'];
}									

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

//function check whether voted for author
function check_voted($author_id, $user_id, $post_id){
    global $wpdb;
    $where = $wpdb->prepare( "WHERE author_id = %d AND user_id = %d AND post_id = %d ", $author_id, $user_id, $post_id );
    $voted_id = $wpdb->get_results( "SELECT ID FROM wp_author_votes $where", ARRAY_A );
    //var_dump($voted_id);
    
    if(empty($voted_id[0]['ID']))
    {
        return false;
    }
    
    return true;
}

//get author sum of voted
function get_sum_voted($author_id){
    global $wpdb;
    $where = $wpdb->prepare( "WHERE ID = %d ", $author_id);
    $voted = $wpdb->get_results( "SELECT cus_sum_voted FROM wp_users $where", ARRAY_A );
    //var_dump($voted);
    $sum_voted = (empty($voted[0]['cus_sum_voted']))? 0 : $voted[0]['cus_sum_voted'];
    
    return $sum_voted;
    
}

									