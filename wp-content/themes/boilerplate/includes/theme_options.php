<?php
/**
 * Theme Option Page
 */
function amd_theme_menu()
{
  add_theme_page( 'Social Media Links', 'Social Media Links', 'manage_options', 'amd_theme_options.php', 'amd_theme_page');  
}
add_action('admin_menu', 'amd_theme_menu');

/**
 * Callback function to the add_theme_page
 * Will display the theme options page
 */ 
function amd_theme_page()
{
?>
    <div class="section panel">
      <h1>Social Media Links</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        <?php 
          settings_fields('amd_theme_options'); 
        
          do_settings_sections('amd_theme_options.php');
        ?>
            <p class="submit">  
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
            </p>  
            
      </form>
    </div>
    <?php
}

/**
 * Register the settings to use on the theme options page
 */
add_action( 'admin_init', 'amd_register_settings' );

/**
 * Function to register the settings
 */
function amd_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'amd_theme_options', 'amd_theme_options', 'amd_validate_settings' );

    // Add settings section
    add_settings_section( 'amd_text_section', '', 'amd_display_section', 'amd_theme_options.php' );

    // Create textbox field
    $field_args = array(
      'type'            => 'text',
      'id'              => 'amd_twitter',
      'name'            => 'amd_twitter',
      'desc'            => '',
      'std'             => '',
      'label_for'       => 'amd_twitter',
      'class'           => 'css_class',
      'size'            => 100
    );
    add_settings_field( 'social_twitter_url', 'Twitter', 'amd_display_setting', 'amd_theme_options.php', 'amd_text_section', $field_args );

    // Create textbox field
    $field_args = array(
      'type'            => 'text',
      'id'              => 'amd_instagram',
      'name'            => 'amd_instagram',
      'desc'            => '',
      'std'             => '',
      'label_for'       => 'amd_instagram',
      'class'           => 'css_class',
      'size'            => 100
    );
    add_settings_field( 'social_instagram_url', 'Instagram', 'amd_display_setting', 'amd_theme_options.php', 'amd_text_section', $field_args );

    // Create textbox field
    $field_args = array(
      'type'            => 'text',
      'id'              => 'amd_facebook',
      'name'            => 'amd_facebook',
      'desc'            => '',
      'std'             => '',
      'label_for'       => 'amd_facebook',
      'class'           => 'css_class',
      'size'            => 100
    );
    add_settings_field( 'social_facebook_url', 'Facebook', 'amd_display_setting', 'amd_theme_options.php', 'amd_text_section', $field_args );

    // Create textbox field
    $field_args = array(
      'type'            => 'text',
      'id'              => 'amd_email',
      'name'            => 'amd_email',
      'desc'            => '',
      'std'             => '',
      'label_for'       => 'amd_email',
      'class'           => 'css_class',
      'size'            => 100
    );
    add_settings_field( 'social_email_url', 'Email', 'amd_display_setting', 'amd_theme_options.php', 'amd_text_section', $field_args );
}

/**
 * Function to add extra text to display on each section
 */
function amd_display_section($section){ 

}

/**
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */
function amd_display_setting($args)
{
    extract( $args );

    $option_name = 'amd_theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' size='$size' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";  
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break;  
    }
}


/**
 * Callback function to the register_settings function will pass through an input variable
 * You can then validate the values and the return variable will be the values stored in the database.
 */
function amd_validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);
    
    /*
    // Check the input is a letter or a number
    if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
      $newinput[$k] = '';
    }
    */
  }

  return $newinput;
}
?>

<?
// Get theme options
//$my_theme_options = get_option( 'amd_theme_options' );
?>
