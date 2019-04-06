<?php 
$config = array(
	'thumbnails' => [
		array(
			'size_name' => 'featured-image',
			'width' => 1200,
			'height' => 400,
			'crop' => true
		),
		array(
			'size_name' => 'post-thumbnail',
			'width' => 100,
			'height' => 100,
			'crop' => true
		),
	],
	'generate_placeholder_images' => true,
	'menus' => [
		array(
			'menu_name' => 'Top Menu',
			'menu_slug' => 'top-menu',
		),
		array(
			'menu_name' => 'Mobile Menu',
			'menu_slug' => 'mobile-menu',
		),
		array(
			'menu_name' => 'Footer Menu',
			'menu_slug' => 'footer-menu',
		),
	],
	'custom_templates' => [
		array(
			'template_name' => 'Home Page',
			'file_name' => 'home-page.php',
		),
		array(
			'template_name' => 'Contact Page',
			'file_name' => 'contact-page.php',
		),
	]
);


// Thumbnails
$thumbnails_code = '';
$thumbnails = @$config['thumbnails'];
if($thumbnails){
	foreach($thumbnails as $thumbnail){
		$thumbnails_code.="add_image_size( '".$thumbnail['size_name']."', ".$thumbnail['width'].", ".$thumbnail['height'].", ".$thumbnail['height']." ); \n";

		// generate placeholder images
		if($config['generate_placeholder_images'] == true){
			generate_image($thumbnail['size_name'], $thumbnail['width'], $thumbnail['height'], '#b9b9b9');
		}
	}

	echo '<pre>';
	echo $thumbnails_code;
	echo '</pre>';
}


// Menus
$menus_code = '';
$menus = @$config['menus'];
if($menus){
	$menus_code.="register_nav_menus( \n
	array( \n";
	
	foreach($menus as $menu){
		$menus_code.="		'".$menu['menu_slug']."' => __( '".$menu['menu_name']."', 'amd' ), \n";
	}
	
	$menus_code.="	) \n
); \n";

	echo '<hr/>';

	echo '<pre>';
	echo $menus_code;
	echo '</pre>';
}



// Custom Templates
$custom_templates = @$config['custom_templates'];
if($custom_templates){
	echo '<hr/>';
	foreach($custom_templates as $custom_template){
		$template_code = 
"<?php
/*
*  Template Name: ".$custom_template['template_name']."
*/
?>";	
		$template_file_name = $custom_template['file_name'];
		file_put_contents("generated_files/".$template_file_name, $template_code);

		echo '<pre>';
		echo "File generated: ".$template_file_name."\n";
		echo '</pre>';
	}
}



// Place all generated code in one snippet file
$generated_code = "";
if(!empty($thumbnails_code)){
	$generated_code .= $thumbnails_code."\n\n\n";
}
if(!empty($menus_code)){
	$generated_code .= $menus_code."\n\n\n";;
}
file_put_contents("generated_files/snippets.php", $generated_code);





// Helper Functions
function generate_image($name, $width, $height, $color_hex){
	$im = imagecreatetruecolor($width, $height);

	// sets background color
	list($r, $g, $b) = sscanf($color_hex, "#%02x%02x%02x");
	$color = imagecolorallocate($im, $r, $g, $b);


	// generate image
	imagefill($im, 0, 0, $color);
	imagejpeg($im, "generated_files/".$name.'.jpg');
	imagedestroy($im);
}