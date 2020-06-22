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
         'default'   => '#0c0244',
         'transport' => 'refresh',
     ) );


     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'headerFooterColourControl', array(
     	'label'      => __( 'Header and Footer Colour', 'help-theme' ),
      'description' => 'Change the Header, Footer Background Colour & Heading 1, Heading 3 and Paragraph text colour',
     	'section'    => 'colors',
     	'settings'   => 'headerFooterColour',
     ) ) );

     // Button Background colour
      $wp_customize->add_setting( 'secondaryButtonColour' , array(
          'default'   => '#b72a98',
          'transport' => 'refresh',
      ) );


      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondaryButtonColourControl', array(
        'label'      => __( 'Primary Colour', 'help-theme' ),
       'description' => 'Change the background colour of the buttons and Heading 2 text colour.',
        'section'    => 'colors',
        'settings'   => 'secondaryButtonColour',
      ) ) );

      // Footer Message
     $wp_customize->add_section( 'footerSection' , array(
         'title'      => __( 'Footer Text', 'help-theme' ),
         'priority'   => 30,
     ));

     $wp_customize->add_setting( 'footerMessage' , array(
         'default'   => 'Copyright 2020 &#169;',
         'transport' => 'refresh',
     ) );

     $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-message', array(
       'label'      => __( 'Footer Text', 'help-theme' ),
       'section'    => 'footerSection',
       'settings'   => 'footerMessage',
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
    .myTheme {
              background-color: <?php echo get_theme_mod('headerFooterColour', '#0c0244'); ?>!important ;
            }
    h1, h3, p {
              color: <?php echo get_theme_mod('headerFooterColour', '#0c0244'); ?>!important ;
    }
    .btn-secondary, #searchsubmit, #wpforms-submit-82, .button {
              background-color: <?php echo get_theme_mod('secondaryButtonColour', '#b72a98'); ?>!important ;
    }
    h2 {
              color: <?php echo get_theme_mod('secondaryButtonColour', '#b72a98'); ?>!important ;
    }
    .list-section {
                border-left: 2px solid <?php echo get_theme_mod('secondaryButtonColour', '#b72a98'); ?>!important ;
    }


   </style>
 <?php
 }
 add_action( 'wp_head', 'mytheme_customize_css');

 ?>
