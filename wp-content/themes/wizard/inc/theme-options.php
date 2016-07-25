<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
      array(
        'id'          => 'general_default',
        'title'       => 'General'
      ),
       array(
        'id'          => 'loading',
        'title'       => 'Loading page'
      ),
      array(
        'id'          => 'appearance',
        'title'       => 'Appearances'
      ),
      array(
        'id'          => 'blog',
        'title'       => 'Blog'
      ),
      array(
        'id'          => 'portfolio',
        'title'       => 'Portfolio'
      ),
      array(
        'id'          => 'font',
        'title'       => 'Choose Fonts'
      ),
      array(
        'id'          => 'contact',
        'title'       => 'Contact Form'
      ),
       array(
        'id'          => 'footer_content',
        'title'       => 'Footer Content'
      ),
      
      array(
        'id'          => '404',
        'title'       => '404 page'
      ),
      array(
        'id'          => 'code',
        'title'       => 'Extra Code'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'logo_url',
        'label'       => 'Logo URL',
        'desc'        => 'Url when you click on logo',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'logo',
        'label'       => 'Logo image',
        'desc'        => 'Your logo image',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'logo_w',
        'label'       => 'Logo Image Width',
        'desc'        => 'in pixels',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'logo_h',
        'label'       => 'Logo Image Height',
        'desc'        => 'in pixels',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'favico',
        'label'       => 'Fav Icon',
        'desc'        => 'A favicon is a graphic image (icon) associated with a particular Web page and/or Web site.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'mobi_menu',
        'label'       => 'Mobile Menu',
        'desc'        => 'Name of menu to display on mobile devices',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
array(
        'id'          => 'enable_submenus_navigation',
        'label'       => 'Enable submenus navigation',
        'desc'        => 'only choose this option if you want to use the submenus as navigation (not direct links)',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => 'yes',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'section_links',
        'label'       => 'Homepage sections - permalinks',
        'desc'        => '',
        'std'         => 'panelBlock',
        'type'        => 'text',
        'section'     => 'general_default',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => 'loading_page_display',
        'label'       => 'Hide loading page',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'loading',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => 'yes',
            'src'         => ''
          )
        )
      ),

      array(
        'id'          => 'general_layout_mode',
        'label'       => 'General Settings',
        'desc'        => 'General Settings',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
        array(
        'id'          => 'theme_color_schema',
        'label'       => 'Select Primary Theme Color',
        'desc'        => '',
        'std'         => 'blue',
        'type'        => 'select',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'custom',
            'label'       => 'custom',
            'src'         => ''
          ),
          array(
            'value'       => 'green',
            'label'       => 'green',
            'src'         => ''
          ),
          array(
            'value'       => 'blue',
            'label'       => 'blue',
            'src'         => ''
          ),
          
        )
      ),
      array(
        'id'          => 'theme_color',
        'label'       => 'Select primary color:',
        'desc'        => 'default color: #00acc1',
        'std'         => '#00acc1',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => 'theme_color_2',
        'label'       => 'Select secondary color:',
        'desc'        => 'default color: #4dd0e1',
        'std'         => '#4dd0e1',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
     
     
      array(
        'id'          => 'posts_fields',
        'label'       => 'Hide meta fields from post info',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'date',
            'label'       => 'date',
            'src'         => ''
          ),
          array(
            'value'       => 'categories',
            'label'       => 'categories',
            'src'         => ''
          ),
          array(
            'value'       => 'author',
            'label'       => 'author',
            'src'         => ''
          ),
           array(
            'value'       => 'comments_number',
            'label'       => 'comments_number',
            'src'         => ''
          )
		  
        )
      ),
      array(
        'id'          => 'blogg4',
        'label'       => 'blogg4',
        'desc'        => 'Blog - single page',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
    
       array(
        'id'          => 'share_disp',
        'label'       => 'Hide share area',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => 'yes',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_single_navi',
        'label'       => 'Show navigation',
        'desc'        => 'next and previous links',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => 'yes',
            'src'         => ''
          )
        )
      ),

      array(
        'id'          => 'blog_single_sidebar',
        'label'       => 'Single post pages sidebar:',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'Blog Sidebar',
            'label'       => 'Blog Sidebar',
            'src'         => ''
          ),
          array(
            'value'       => 'Sidebar 1',
            'label'       => 'Sidebar 1',
            'src'         => ''
          ),
          array(
            'value'       => 'Sidebar 2',
            'label'       => 'Sidebar 2',
            'src'         => ''
          ),
          array(
            'value'       => 'Sidebar 3',
            'label'       => 'Sidebar 3',
            'src'         => ''
          ),
          array(
            'value'       => 'Sidebar 4',
            'label'       => 'Sidebar 4',
            'src'         => ''
          ),
          array(
            'value'       => 'Sidebar 5',
            'label'       => 'Sidebar 5',
            'src'         => ''
          )
        )
      ),
      
      array(
        'id'          => 'blogg3',
        'label'       => 'blogg',
        'desc'        => 'Blog - main page',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'blog_excerpt',
        'label'       => 'Blog page post\'s content:',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'Excerpt',
            'label'       => 'Excerpt',
            'src'         => ''
          ),
          array(
            'value'       => 'Total post content',
            'label'       => 'Total post content',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_excerpt_len',
        'label'       => 'Blog page post excerpt number of words:',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => 'port_single_related',
        'label'       => 'Related Items text',
        'desc'        => '',
        'std'         => 'Related Items',
        'type'        => 'text',
        'section'     => 'portfolio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'body',
        'label'       => 'Body',
        'desc'        => 'Paragraph Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'body_font_select',
        'label'       => 'Paragraph',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'body_font_custom',
        'label'       => 'Paragraph custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'body_font_weight_select',
        'label'       => 'Paragraph font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'body_font_style_select',
        'label'       => 'Paragraph font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'body_font_size_select',
        'label'       => 'Paragraph font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'menu',
        'label'       => 'Menu',
        'desc'        => 'Menu Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'menu_font_select',
        'label'       => 'Menu',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'menu_font_custom',
        'label'       => 'Menu custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'menu_font_weight_select',
        'label'       => 'Menu font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'menu_font_style_select',
        'label'       => 'Menu font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'menu_font_size_select',
        'label'       => 'Menu font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h1',
        'label'       => 'h1',
        'desc'        => 'Heading 1 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h1_font_select',
        'label'       => 'Heading 1',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h1_font_custom',
        'label'       => 'Heading 1 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h1_font_weight_select',
        'label'       => 'Heading 1 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h1_font_style_select',
        'label'       => 'Heading 1 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h1_font_size_select',
        'label'       => 'Heading 1 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h2',
        'label'       => 'h2',
        'desc'        => 'Heading 2 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h2_font_select',
        'label'       => 'Heading 2',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h2_font_custom',
        'label'       => 'Heading 2 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h2_font_weight_select',
        'label'       => 'Heading 2 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h2_font_style_select',
        'label'       => 'Heading 2 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h2_font_size_select',
        'label'       => 'Heading 2 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h3',
        'label'       => 'h3',
        'desc'        => 'Heading 3 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h3_font_select',
        'label'       => 'Heading 3',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h3_font_custom',
        'label'       => 'Heading 3 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h3_font_weight_select',
        'label'       => 'Heading 3 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h3_font_style_select',
        'label'       => 'Heading 3 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h3_font_size_select',
        'label'       => 'Heading 3 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h4',
        'label'       => 'Heading 4',
        'desc'        => 'Heading 4 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h4_font_select',
        'label'       => 'Heading 4',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h4_font_custom',
        'label'       => 'Heading 4 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h4_font_weight_select',
        'label'       => 'Heading 4 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h4_font_style_select',
        'label'       => 'Heading 4 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h4_font_size_select',
        'label'       => 'Heading 4 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h5',
        'label'       => 'Heading 5',
        'desc'        => 'Heading 5 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h5_font_select',
        'label'       => 'Heading 5',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h5_font_custom',
        'label'       => 'Heading 5 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h5_font_weight_select',
        'label'       => 'Heading 5 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h5_font_style_select',
        'label'       => 'Heading 5 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h5_font_size_select',
        'label'       => 'Heading 5 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'Heading 6',
        'label'       => 'Heading 6',
        'desc'        => 'Heading 6 Google Fonts',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h6_font_select',
        'label'       => 'Heading 6',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
        array(
            'value'       => 'default',
            'label'       => 'default',
            'src'         => ''
          ),
          array(
            'value'       => 'Aclonica',
            'label'       => 'Aclonica',
            'src'         => ''
          ),
          array(
            'value'       => 'Allan',
            'label'       => 'Allan',
            'src'         => ''
          ),
          array(
            'value'       => 'Annie Use Your Telescope',
            'label'       => 'Annie Use Your Telescope',
            'src'         => ''
          ),
          array(
            'value'       => 'Anonymous Pro',
            'label'       => 'Anonymous Pro',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta Stencil',
            'label'       => 'Allerta Stencil',
            'src'         => ''
          ),
          array(
            'value'       => 'Allerta',
            'label'       => 'Allerta',
            'src'         => ''
          ),
          array(
            'value'       => 'Amaranth',
            'label'       => 'Amaranth',
            'src'         => ''
          ),
          array(
            'value'       => 'Anton',
            'label'       => 'Anton',
            'src'         => ''
          ),
          array(
            'value'       => 'Architects Daughter',
            'label'       => 'Architects Daughter',
            'src'         => ''
          ),
          array(
            'value'       => 'Arimo',
            'label'       => 'Arimo',
            'src'         => ''
          ),
          array(
            'value'       => 'Arvo',
            'label'       => 'Arvo',
            'src'         => ''
          ),
          array(
            'value'       => 'Astloch',
            'label'       => 'Astloch',
            'src'         => ''
          ),
          array(
            'value'       => 'Bangers',
            'label'       => 'Bangers',
            'src'         => ''
          ),
          array(
            'value'       => 'Bentham',
            'label'       => 'Bentham',
            'src'         => ''
          ),
          array(
            'value'       => 'Bevan',
            'label'       => 'Bevan',
            'src'         => ''
          ),
          array(
            'value'       => 'Bigshot One',
            'label'       => 'Bigshot One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin',
            'label'       => 'Cabin',
            'src'         => ''
          ),
          array(
            'value'       => 'Cabin Sketch',
            'label'       => 'Cabin Sketch',
            'src'         => ''
          ),
          array(
            'value'       => 'Calligraffitti',
            'label'       => 'Calligraffitti',
            'src'         => ''
          ),
          array(
            'value'       => 'Candal',
            'label'       => 'Candal',
            'src'         => ''
          ),
          array(
            'value'       => 'Cantarell',
            'label'       => 'Cantarell',
            'src'         => ''
          ),
          array(
            'value'       => 'Cardo',
            'label'       => 'Cardo',
            'src'         => ''
          ),
          array(
            'value'       => 'Carter One',
            'label'       => 'Carter One',
            'src'         => ''
          ),
          array(
            'value'       => 'Cherry Cream Soda',
            'label'       => 'Cherry Cream Soda',
            'src'         => ''
          ),
          array(
            'value'       => 'Chewy',
            'label'       => 'Chewy',
            'src'         => ''
          ),
          array(
            'value'       => 'Coda',
            'label'       => 'Coda',
            'src'         => ''
          ),
          array(
            'value'       => 'Coming Soon',
            'label'       => 'Coming Soon',
            'src'         => ''
          ),
          array(
            'value'       => 'Copse',
            'label'       => 'Copse',
            'src'         => ''
          ),
          array(
            'value'       => 'Corben',
            'label'       => 'Corben',
            'src'         => ''
          ),
          array(
            'value'       => 'Cousine',
            'label'       => 'Cousine',
            'src'         => ''
          ),
          array(
            'value'       => 'Covered By Your Grace',
            'label'       => 'Covered By Your Grace',
            'src'         => ''
          ),
          array(
            'value'       => 'Crafty Girls',
            'label'       => 'Crafty Girls',
            'src'         => ''
          ),
          array(
            'value'       => 'Crimson Text',
            'label'       => 'Crimson Text',
            'src'         => ''
          ),
          array(
            'value'       => 'Crushed',
            'label'       => 'Crushed',
            'src'         => ''
          ),
          array(
            'value'       => 'Cuprum',
            'label'       => 'Cuprum',
            'src'         => ''
          ),
          array(
            'value'       => 'Damion',
            'label'       => 'Damion',
            'src'         => ''
          ),
          array(
            'value'       => 'Dancing Script',
            'label'       => 'Dancing Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Dawning of a New Day',
            'label'       => 'Dawning of a New Day',
            'src'         => ''
          ),
          array(
            'value'       => 'Didact Gothic',
            'label'       => 'Didact Gothic',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans',
            'label'       => 'Droid Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Sans Mono',
            'label'       => 'Droid Sans Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Droid Serif',
            'label'       => 'Droid Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'EB Garamond',
            'label'       => 'EB Garamond',
            'src'         => ''
          ),
          array(
            'value'       => 'Expletus Sans',
            'label'       => 'Expletus Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Fontdiner Swanky',
            'label'       => 'Fontdiner Swanky',
            'src'         => ''
          ),
          array(
            'value'       => 'Francois One',
            'label'       => 'Francois One',
            'src'         => ''
          ),
          array(
            'value'       => 'Geo',
            'label'       => 'Geo',
            'src'         => ''
          ),
          array(
            'value'       => 'Goudy Bookletter 1911',
            'label'       => 'Goudy Bookletter 1911',
            'src'         => ''
          ),
          array(
            'value'       => 'Gruppo',
            'label'       => 'Gruppo',
            'src'         => ''
          ),
          array(
            'value'       => 'Holtwood One SC',
            'label'       => 'Holtwood One SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Homemade Apple',
            'label'       => 'Homemade Apple',
            'src'         => ''
          ),
          array(
            'value'       => 'Inconsolata',
            'label'       => 'Inconsolata',
            'src'         => ''
          ),
          array(
            'value'       => 'Indie Flower',
            'label'       => 'Indie Flower',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica',
            'label'       => 'IM Fell DW Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell DW Pica SC',
            'label'       => 'IM Fell DW Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica',
            'label'       => 'IM Fell Double Pica',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Double Pica SC',
            'label'       => 'IM Fell Double Pica SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English',
            'label'       => 'IM Fell English',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell English SC',
            'label'       => 'IM Fell English SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon',
            'label'       => 'IM Fell French Canon',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell French Canon SC',
            'label'       => 'IM Fell French Canon SC',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer',
            'label'       => 'IM Fell Great Primer',
            'src'         => ''
          ),
          array(
            'value'       => 'IM Fell Great Primer SC',
            'label'       => 'IM Fell Great Primer SC',
            'src'         => ''
          ),
          array(
            'value'       => 'Irish Grover',
            'label'       => 'Irish Grover',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Sans',
            'label'       => 'Josefin Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Josefin Slab',
            'label'       => 'Josefin Slab',
            'src'         => ''
          ),
          array(
            'value'       => 'Judson',
            'label'       => 'Judson',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Another Hand',
            'label'       => 'Just Another Hand',
            'src'         => ''
          ),
          array(
            'value'       => 'Just Me Again Down Here',
            'label'       => 'Just Me Again Down Here',
            'src'         => ''
          ),
          array(
            'value'       => 'Kenia',
            'label'       => 'Kenia',
            'src'         => ''
          ),
          array(
            'value'       => 'Kranky',
            'label'       => 'Kranky',
            'src'         => ''
          ),
          array(
            'value'       => 'Kreon',
            'label'       => 'Kreon',
            'src'         => ''
          ),
          array(
            'value'       => 'Kristi',
            'label'       => 'Kristi',
            'src'         => ''
          ),
          array(
            'value'       => 'Lato',
            'label'       => 'Lato',
            'src'         => ''
          ),
          array(
            'value'       => 'League Script',
            'label'       => 'League Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Lekton',
            'label'       => 'Lekton',
            'src'         => ''
          ),
          array(
            'value'       => 'Lobster',
            'label'       => 'Lobster',
            'src'         => ''
          ),
          array(
            'value'       => 'Luckiest Guy',
            'label'       => 'Luckiest Guy',
            'src'         => ''
          ),
          array(
            'value'       => 'Maiden Orange',
            'label'       => 'Maiden Orange',
            'src'         => ''
          ),
          array(
            'value'       => 'Mako',
            'label'       => 'Mako',
            'src'         => ''
          ),
          array(
            'value'       => 'Meddon',
            'label'       => 'Meddon',
            'src'         => ''
          ),
          array(
            'value'       => 'MedievalSharp',
            'label'       => 'MedievalSharp',
            'src'         => ''
          ),
          array(
            'value'       => 'Megrim',
            'label'       => 'Megrim',
            'src'         => ''
          ),
          array(
            'value'       => 'Merriweather',
            'label'       => 'Merriweather',
            'src'         => ''
          ),
          array(
            'value'       => 'Metrophobic',
            'label'       => 'Metrophobic',
            'src'         => ''
          ),
          array(
            'value'       => 'Michroma',
            'label'       => 'Michroma',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian Tattoo',
            'label'       => 'Miltonian Tattoo',
            'src'         => ''
          ),
          array(
            'value'       => 'Miltonian',
            'label'       => 'Miltonian',
            'src'         => ''
          ),
          array(
            'value'       => 'Monofett',
            'label'       => 'Monofett',
            'src'         => ''
          ),
          array(
            'value'       => 'Molengo',
            'label'       => 'Molengo',
            'src'         => ''
          ),
          array(
            'value'       => 'Mountains of Christmas',
            'label'       => 'Mountains of Christmas',
            'src'         => ''
          ),
          array(
            'value'       => 'News Cycle',
            'label'       => 'News Cycle',
            'src'         => ''
          ),
          array(
            'value'       => 'Nobile',
            'label'       => 'Nobile',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Cut',
            'label'       => 'Nova Cut',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Flat',
            'label'       => 'Nova Flat',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Mono',
            'label'       => 'Nova Mono',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Oval',
            'label'       => 'Nova Oval',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Round',
            'label'       => 'Nova Round',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Script',
            'label'       => 'Nova Script',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Slim',
            'label'       => 'Nova Slim',
            'src'         => ''
          ),
          array(
            'value'       => 'Nova Square',
            'label'       => 'Nova Square',
            'src'         => ''
          ),
          array(
            'value'       => 'Neucha',
            'label'       => 'Neucha',
            'src'         => ''
          ),
          array(
            'value'       => 'Neuton',
            'label'       => 'Neuton',
            'src'         => ''
          ),
          array(
            'value'       => 'OFL Sorts Mill Goudy TT',
            'label'       => 'OFL Sorts Mill Goudy TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Old Standard TT',
            'label'       => 'Old Standard TT',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans',
            'label'       => 'Open Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Open Sans Condensed',
            'label'       => 'Open Sans Condensed',
            'src'         => ''
          ),
          array(
            'value'       => 'Orbitron',
            'label'       => 'Orbitron',
            'src'         => ''
          ),
          array(
            'value'       => 'Oswald',
            'label'       => 'Oswald',
            'src'         => ''
          ),
          array(
            'value'       => 'Over the Rainbow',
            'label'       => 'Over the Rainbow',
            'src'         => ''
          ),
          array(
            'value'       => 'Reenie Beanie',
            'label'       => 'Reenie Beanie',
            'src'         => ''
          ),
          array(
            'value'       => 'Pacifico',
            'label'       => 'Pacifico',
            'src'         => ''
          ),
          array(
            'value'       => 'Paytone One',
            'label'       => 'Paytone One',
            'src'         => ''
          ),
          array(
            'value'       => 'Permanent Marker',
            'label'       => 'Permanent Marker',
            'src'         => ''
          ),
          array(
            'value'       => 'Philosopher',
            'label'       => 'Philosopher',
            'src'         => ''
          ),
          array(
            'value'       => 'Play',
            'label'       => 'Play',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans',
            'label'       => 'PT Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Caption',
            'label'       => 'PT Sans Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Sans Narrow',
            'label'       => 'PT Sans Narrow',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif',
            'label'       => 'PT Serif',
            'src'         => ''
          ),
          array(
            'value'       => 'PT Serif Caption',
            'label'       => 'PT Serif Caption',
            'src'         => ''
          ),
          array(
            'value'       => 'Puritan',
            'label'       => 'Puritan',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento',
            'label'       => 'Quattrocento',
            'src'         => ''
          ),
          array(
            'value'       => 'Quattrocento Sans',
            'label'       => 'Quattrocento Sans',
            'src'         => ''
          ),
          array(
            'value'       => 'Radley',
            'label'       => 'Radley',
            'src'         => ''
          ),
          array(
            'value'       => 'Rock Salt',
            'label'       => 'Rock Salt',
            'src'         => ''
          ),
          array(
            'value'       => 'Rokkitt',
            'label'       => 'Rokkitt',
            'src'         => ''
          ),
          array(
            'value'       => 'Schoolbell',
            'label'       => 'Schoolbell',
            'src'         => ''
          ),
          array(
            'value'       => 'Shanti',
            'label'       => 'Shanti',
            'src'         => ''
          ),
          array(
            'value'       => 'Sigmar One',
            'label'       => 'Sigmar One',
            'src'         => ''
          ),
          array(
            'value'       => 'Six Caps',
            'label'       => 'Six Caps',
            'src'         => ''
          ),
          array(
            'value'       => 'Slackey',
            'label'       => 'Slackey',
            'src'         => ''
          ),
          array(
            'value'       => 'Smythe',
            'label'       => 'Smythe',
            'src'         => ''
          ),
          array(
            'value'       => 'Sniglet',
            'label'       => 'Sniglet',
            'src'         => ''
          ),
          array(
            'value'       => 'Special Elite',
            'label'       => 'Special Elite',
            'src'         => ''
          ),
          array(
            'value'       => 'Sue Ellen Francisco',
            'label'       => 'Sue Ellen Francisco',
            'src'         => ''
          ),
          array(
            'value'       => 'Sunshiney',
            'label'       => 'Sunshiney',
            'src'         => ''
          ),
          array(
            'value'       => 'Swanky and Moo Moo',
            'label'       => 'Swanky and Moo Moo',
            'src'         => ''
          ),
          array(
            'value'       => 'Syncopate',
            'label'       => 'Syncopate',
            'src'         => ''
          ),
          array(
            'value'       => 'Tangerine',
            'label'       => 'Tangerine',
            'src'         => ''
          ),
          array(
            'value'       => 'Terminal Dosis Light',
            'label'       => 'Terminal Dosis Light',
            'src'         => ''
          ),
          array(
            'value'       => 'The Girl Next Door',
            'label'       => 'The Girl Next Door',
            'src'         => ''
          ),
          array(
            'value'       => 'Tinos',
            'label'       => 'Tinos',
            'src'         => ''
          ),
          array(
            'value'       => 'Ubuntu',
            'label'       => 'Ubuntu',
            'src'         => ''
          ),
          array(
            'value'       => 'Ultra',
            'label'       => 'Ultra',
            'src'         => ''
          ),
          array(
            'value'       => 'Unkempt',
            'label'       => 'Unkempt',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturCook',
            'label'       => 'UnifrakturCook',
            'src'         => ''
          ),
          array(
            'value'       => 'UnifrakturMaguntia',
            'label'       => 'UnifrakturMaguntia',
            'src'         => ''
          ),
          array(
            'value'       => 'Vibur',
            'label'       => 'Vibur',
            'src'         => ''
          ),
          array(
            'value'       => 'Vollkorn',
            'label'       => 'Vollkorn',
            'src'         => ''
          ),
          array(
            'value'       => 'VT323',
            'label'       => 'VT323',
            'src'         => ''
          ),
          array(
            'value'       => 'Waiting for the Sunrise',
            'label'       => 'Waiting for the Sunrise',
            'src'         => ''
          ),
          array(
            'value'       => 'Wallpoet',
            'label'       => 'Wallpoet',
            'src'         => ''
          ),
          array(
            'value'       => 'Walter Turncoat',
            'label'       => 'Walter Turncoat',
            'src'         => ''
          ),
          array(
            'value'       => 'Yanone Kaffeesatz',
            'label'       => 'Yanone Kaffeesatz',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h6_font_custom',
        'label'       => 'Heading 6 custom font',
        'desc'        => 'enter the NAME of the Custom Google Font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'h6_font_weight_select',
        'label'       => 'Heading 6 font - weight',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'normal',
            'label'       => 'normal',
            'src'         => ''
          ),
          array(
            'value'       => 'bold',
            'label'       => 'bold',
            'src'         => ''
          ),
          array(
            'value'       => 'bolder',
            'label'       => 'bolder',
            'src'         => ''
          ),
          array(
            'value'       => 'lighter',
            'label'       => 'lighter',
            'src'         => ''
          ),
          array(
            'value'       => '100',
            'label'       => '100',
            'src'         => ''
          ),
          array(
            'value'       => '200',
            'label'       => '200',
            'src'         => ''
          ),
          array(
            'value'       => '300',
            'label'       => '300',
            'src'         => ''
          ),
          array(
            'value'       => '400',
            'label'       => '400',
            'src'         => ''
          ),
          array(
            'value'       => '500',
            'label'       => '500',
            'src'         => ''
          ),
          array(
            'value'       => '600',
            'label'       => '600',
            'src'         => ''
          ),
          array(
            'value'       => '700',
            'label'       => '700',
            'src'         => ''
          ),
          array(
            'value'       => '800',
            'label'       => '800',
            'src'         => ''
          ),
          array(
            'value'       => '900',
            'label'       => '900',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h6_font_style_select',
        'label'       => 'Heading 6 font - style',
        'desc'        => '',
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => '',
        'choices'     => array( 
          array(
            'value'       => 'italic',
            'label'       => 'italic',
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'h6_font_size_select',
        'label'       => 'Heading 6 font - size',
        'desc'        => 'px',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'font',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
     
      array(
        'id'          => 'c_email',
        'label'       => 'Contact email',
        'desc'        => 'Address where the emails will be sent.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'c_form_name',
        'label'       => 'Contact form "name" - wording',
        'desc'        => '',
        'std'         => 'Your Name',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'c_form_email',
        'label'       => 'Contact form "email" - wording',
        'desc'        => '',
        'std'         => 'Your Email',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'c_form_subject',
        'label'       => 'Contact form "subject" - wording',
        'desc'        => '',
        'std'         => 'Your Subject',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'c_form_message',
        'label'       => 'Contact form "message" - wording',
        'desc'        => '',
        'std'         => 'Your Message',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
        array(
        'id'          => 'c_form_send',
        'label'       => 'Contact form "Send Your Message" - button text',
        'desc'        => '',
        'std'         => 'Send Your Message',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'success_msg',
        'label'       => 'Success message',
        'desc'        => '',
        'std'         => 'Your message has been sent sucessfully!',
        'type'        => 'textarea_simple',
        'section'     => 'contact',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'error_msg',
        'label'       => 'Error message',
        'desc'        => '',
        'std'         => 'Please check if you\'ve filled all the fields with valid information and try again. Thank you.',
        'type'        => 'textarea_simple',
        'section'     => 'contact',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
     
      array(
        'id'          => '404_content',
        'label'       => '404 error page content',
        'desc'        => '',
        'std'         => '<div class="page-header-wrap animate-fadeIn">
<h2 class="featured-area-title"><span data-color="#00acc1">Woops!</span></h2>
<div data-height="30"> </div>
<div class="featured-area-subtitle">Sorry, you\'re looking for something that doesn\'t exist.</div>
</div>
<div class="button raised icon blue ripple">
<div><a href="http://wizard-business.beantownthemes.com/"><i class="fa fa-home"></i>Return Home</a></div>
</div>',
        'type'        => 'textarea-simple',
        'section'     => '404',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      
	  
	   array(
        'id'          => '404_img',
        'label'       => 'Background image',
        'desc'        => 'Choose background image:',
        'std'         => 'http://wizard-photography.beantownthemes.com/wp-content/uploads/footer-bg-image1.jpg',
        'type'        => 'upload',
        'section'     => '404',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => '404_color',
        'label'       => 'Background color',
        'desc'        => 'Choose background color:',
        'std'         => '#212121',
        'type'        => 'colorpicker',
        'section'     => '404',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
       ),
       array(
        'id'          => '404_ov_color',
        'label'       => 'Overlay color',
        'desc'        => 'Choose background color:',
        'std'         => '#212121',
        'type'        => 'colorpicker',
        'section'     => '404',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => '404_ov_opacity',
        'label'       => 'Overlay Opacity',
        'desc'        => 'number netween 0 and 1',
        'std'         => '0.5',
        'type'        => 'text',
        'section'     => '404',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      
	   array(
        'id'          => 'footer_content',
        'label'       => 'Footer content',
        'desc'        => '',
        'std'         => '<div class="wpb_raw_code wpb_content_element wpb_raw_html">
<div data-height="30"></div>
                    
                    <!--Footer Logo-->
                    <div class="footer-logo animate-fadeIn">
                        <a href="#"><img src="http://wizard-photography.beantownthemes.com/wp-content/uploads/footer-logo1.png" alt="footer logo" /></a>
                    </div>
                    
                    <div data-height="80"></div>
                    
                    <!--Footer Description-->
                    <div class="footer-description animate-fadeIn">
                        Sed fringilla <span data-color="#00acc1">egestas morbi</span> condimentum
                    </div>
                    <div data-height="35"></div>
                    <div class="footer-subdescription animate-fadeIn">
                        Lorem ipsum dolor sit amet consectetur adipiscing<br>mauris magna lacinia purus quis.
                    </div>
                    
                    <div data-height="80"></div>
                    
                    <div class="animate-fadeIn">
                    
                        <!--Footer Social Media-->
                        <div class="social-media">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        
                        <!--Copyright-->
                        <div class="copyright">
                            Copyrights © 2015 <a href="#">Wizard</a>. All Rights Reserved.
                        </div>
                    
                    </div>
</div>',
                    
        'type'        => 'textarea-simple',
        'section'     => 'footer_content',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      	   array(
        'id'          => 'footer_img',
        'label'       => 'Background image',
        'desc'        => 'Choose background image:',
        'std'         => 'http://wizard-photography.beantownthemes.com/wp-content/uploads/footer-bg-image1.jpg',
        'type'        => 'upload',
        'section'     => 'footer_content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => 'footer_color',
        'label'       => 'Background color',
        'desc'        => 'Choose background color:',
        'std'         => '#111111',
        'type'        => 'colorpicker',
        'section'     => 'footer_content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
       ),
       array(
        'id'          => 'footer_ov_color',
        'label'       => 'Overlay color',
        'desc'        => 'Choose background color:',
        'std'         => '#111111',
        'type'        => 'colorpicker',
        'section'     => 'footer_content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
       array(
        'id'          => 'footer_ov_opacity',
        'label'       => 'Overlay Opacity',
        'desc'        => 'number netween 0 and 1',
        'std'         => '0.8',
        'type'        => 'text',
        'section'     => 'footer_content',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      
      array(
        'id'          => 'css',
        'label'       => 'Extra CSS',
        'desc'        => 'Extra CSS',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'code',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'extra_css',
        'label'       => 'Add Extra CSS',
        'desc'        => '',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'code',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      ),
      array(
        'id'          => 'google_analitics',
        'label'       => 'Add Google Analytics Code',
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'code',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}