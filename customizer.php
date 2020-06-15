<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register($wp_customize) {
  //All our sections, settings, and controls will be added here


    // Background Colour
    $wp_customize->add_setting( 'backgroundColour' , array(
        'default'   => '#ffffff',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'backgroundColourControl', array(
    	'label'      => __( 'Background Colour', 'help-theme' ),
     'description' => 'Change the background Colour',
    	'section'    => 'colors',
    	'settings'   => 'backgroundColour',
    ) ) );

    // Header and Footer garden_backgroundColour // Background Colour
     $wp_customize->add_setting( 'headerFooterColour' , array(
         'default'   => '#022568',
         'transport' => 'refresh',
     ) );


     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'headerFooterColourControl', array(
     	'label'      => __( 'Header and Footer Colour', 'help-theme' ),
      'description' => 'Change the Header and Footer Colour',
     	'section'    => 'colors',
     	'settings'   => 'headerFooterColour',
     ) ) );

     // Button Background colour
      $wp_customize->add_setting( 'secondaryButtonColour' , array(
          'default'   => '#FCAB51',
          'transport' => 'refresh',
      ) );


      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondaryButtonColourControl', array(
        'label'      => __( 'Button Colour', 'help-theme' ),
       'description' => 'Change the background colour of the buttons',
        'section'    => 'colors',
        'settings'   => 'secondaryButtonColour',
      ) ) );

    }

  add_action( 'customize_register', 'mytheme_customize_register' );


 //Hook2: wp_head to output custom-generated CSS
  function mytheme_customize_css()
  {
    ?>
     <style type="text/css">
     body {
             background-color: <?php echo get_theme_mod('backgroundColour','#ffffff'); ?>!important;
          }
    .myTheme{
              background-color: <?php echo get_theme_mod('headerFooterColour', '#022568'); ?>!important ;
            }
    .btn-secondary, #searchsubmit{
                background-color: <?php echo get_theme_mod('secondaryButtonColour', '#FCAB51'); ?>!important ;
    }


   </style>
 <?php
 }
 add_action( 'wp_head', 'mytheme_customize_css');

 ?>
