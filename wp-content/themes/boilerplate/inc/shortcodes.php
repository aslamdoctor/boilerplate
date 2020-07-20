<?php
// Just a shortcode for testing purpose
function amd_my_test_shortcode(){
    $shortcode_text = 'Hello World!!';
    return $shortcode_text;
}
add_shortcode('my-shortcode', 'amd_my_test_shortcode');


