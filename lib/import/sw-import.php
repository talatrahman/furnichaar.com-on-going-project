<?php

function sw_import_files() { 
  return array(
    array(
		'import_file_name'             => 'Demo Homepage 1',
		'page_title'                   => 'Home Elementor',
		'header_title'				   => 'Header Style 1',
		'footer_title'				   => 'Footer_1',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/slideshow1.zip' 
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-1/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-1/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 2',
		'page_title'                   => 'Home Page 2 Elementor',
		'header_title'				   => 'Header Style 2',
		'footer_title'				   => 'Footer_2',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/slideshow2.zip',
			'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/slideshow3.zip' 
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-2/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-2/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout2/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 3',
		'page_title'                   => 'Home Page 3 Elementor',
		'header_title'				   => 'Header Style 3',
		'footer_title'				   => 'Footer_3',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/slideshow4.zip' 
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-3/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-3/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout3/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 4',
		'page_title'                   => 'Home Page 4 Elementor',
		'header_title'				   => 'Header Style 4',
		'footer_title'				   => 'Footer_2',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/slideshow5.zip' 
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-4/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-4/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout4/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 5',
		'page_title'                   => 'Home Page 5 Elementor',
		'header_title'				   => 'Header Style 8',
		'footer_title'				   => 'Footer_5',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/slideshow6.zip',
			'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/slideshow6_1.zip' 
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-5/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-5/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout567/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 6',
		'page_title'                   => 'Home Page 6 Elementor',
		'header_title'				   => 'Header Style 9',
		'footer_title'				   => 'Footer_4',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/slideshow7.zip',
			'slide2' => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/slide7_1.zip',
		),
		'local_import_options'         => array(
		array(
			'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-6/theme_options.txt',
			'option_name' => 'emarket_theme',
		),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-6/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout567/home-page-6-elementor/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 7',
		'page_title'                   => 'Home Page 7 Elementor',
		'header_title'				   => 'Header Style 10',
		'footer_title'				   => 'Footer_8',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/slide73.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-7/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-7/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout567/home-page-7-elementor/',
	),
  
	array(
		'import_file_name'             => 'Demo Christmas Layout',
		'page_title'                   => 'Home Page 8',
		'header_title'				   => 'Header Christmas',
		'footer_title'				   => 'Footer_8',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/slide8.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-8/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-8/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout8/',
	),

	array(
		'import_file_name'             => 'Demo Homepage 8',
		'page_title'                   => 'Home Page 9',
		'header_title'				   => 'Header Style 10',
		'footer_title'				   => 'Footer_5',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/widgets.json',
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-9/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-9/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout9/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 9',
		'page_title'                   => 'Home Page 10',
		'header_title'				   => 'Header Style 12',
		'footer_title'				   => 'Footer_6',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/slide10.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-10/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-10/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout10/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 10',
		'page_title'                   => 'Home Page 11',
		'header_title'				   => 'Header Style 13',
		'footer_title'				   => 'Footer_7',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/widgets.json',
		'local_import_revslider'       => array( 
			'slide1' => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/slide11.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-11/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-11/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout11/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 11',
		'page_title'                   => 'Home Page 12',
		'header_title'				   => 'Header Style 14',
		'footer_title'				   => 'Footer_12',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/widgets.json',
		'local_import_revslider'       => array( 
			'slideshow12' => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/slideshow12.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-12/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-12/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'http://demo.wpthemego.com/themes/sw_emarket/layout12/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 12',
		'page_title'                   => 'Home Page 13',
		'header_title'				   => 'Header Style 15',
		'footer_title'				   => 'Footer_13',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/widgets.json',
		'local_import_revslider'       => array( 
			'slide13' => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/slide13.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-13/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-13/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout12/home-page-13/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 13',
		'page_title'                   => 'Home Page 14',
		'header_title'				   => 'Header Style 16',
		'footer_title'				   => 'Footer_13',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/widgets.json',
		'local_import_revslider'       => array( 
			'slide14' => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/slide14.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-14/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-14/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout13/home-page-14/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 14',
		'page_title'                   => 'Home Page 15',
		'header_title'				   => 'Header Style 17',
		'footer_title'				   => 'Footer_14',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/widgets.json',
		'local_import_revslider'       => array( 
			'slide15' => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/slide15.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-15/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-15/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout13/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 15',
		'page_title'                   => 'Home Page 16',
		'header_title'				   => 'Header Style 18',
		'footer_title'				   => 'Footer_15',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/widgets.json',
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-16/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-16/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout14/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 16',
		'page_title'                   => 'Home Page 17',
		'header_title'				   => 'Header Style 19',
		'footer_title'				   => 'Footer_News',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/widgets.json',
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-17/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-17/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout15/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 17',
		'page_title'                   => 'Home Page 18',
		'header_title'				   => 'Header Style 20',
		'footer_title'				   => 'Footer_18',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/widgets.json',
		'local_import_revslider'       => array( 
			'slideshow17' => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/slideshow17.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-18/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-18/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout16/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 18',
		'page_title'                   => 'Home Page 19',
		'header_title'				   => 'Header Style 21',
		'footer_title'				   => 'Footer_19',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/widgets.json',
		'local_import_revslider'       => array( 
			'slide-18' => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/slide-18.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-19/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-19/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout17/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 19',
		'page_title'                   => 'Home Page 20',
		'header_title'				   => 'Header Style 20',
		'footer_title'				   => 'Footer_19',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/widgets.json',
		'local_import_revslider'       => array( 
			'slide20' => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/slide20.zip',
			'bg-video' => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/bg-video.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-20/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-20/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout18/',
	),
  
	array(
		'import_file_name'             => 'Demo Homepage 20',
		'page_title'                   => 'Home Page 21',
		'header_title'				   => 'Header Style 23',
		'footer_title'				   => 'Footer_21',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content.xml',
		'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-page.xml',
		'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/demo-content-pagemenu.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/widgets.json',
		'local_import_revslider'       => array( 
			'slide21' => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/slide21.zip',
		),
		'local_import_options'         => array(
			array(
				'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-21/theme_options.txt',
				'option_name' => 'emarket_theme',
			),
		),
		'menu_locate'                  => array(
			'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
			'vertical_menu' => 'Verticle Menu',
			'mobile_menu' => 'Menu Mobile 1'
		),
		'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-21/screenshot.png',
		'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
		'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout19/',
	),
  
	array(
	'import_file_name'             => 'Demo Homepage 21',
	'page_title'                   => 'Home Page 22',
	'header_title'				   => 'Header Style 24',
	'footer_title'				   => 'Footer_22',
	'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content.xml',
	'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-page.xml',
	'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/demo-content-pagemenu.xml',
	'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/widgets.json',
	'local_import_revslider'       => array( 
		'slide22' => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/slide22.zip',
	),
	'local_import_options'         => array(
		array(
			'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-22/theme_options.txt',
			'option_name' => 'emarket_theme',
		),
	),
	'menu_locate'                  => array(
		'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
		'vertical_menu' => 'Verticle Menu',
		'mobile_menu' => 'Menu Mobile 1'
	),
	'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-22/screenshot.png',
	'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
	'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout20/',
	),
  
	array(
	'import_file_name'             => 'Demo Homepage 22',
	'page_title'                   => 'Home Page 23',
	'header_title'				   => 'Header Style 25',
	'footer_title'				   => 'Footer_23',
	'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content.xml',
	'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-page.xml',
	'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/demo-content-pagemenu.xml',
	'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/widgets.json',
	'local_import_revslider'       => array( 
		'slide23' => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/slide23.zip',
	),
	'local_import_options'         => array(
		array(
			'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-23/theme_options.txt',
			'option_name' => 'emarket_theme',
		),
	),
	'menu_locate'                  => array(
		'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
		'vertical_menu' => 'Verticle Menu',
		'mobile_menu' => 'Menu Mobile 1'
	),
	'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-23/screenshot.png',
	'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
	'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout21/',
	),
	
	array(
	'import_file_name'             => 'Demo Homepage 23',
	'page_title'                   => 'Home Page 24',
	'header_title'				   => 'Header Style 26',
	'footer_title'				   => 'Footer_24',
	'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content.xml',
	'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-page.xml',
	'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/demo-content-pagemenu.xml',
	'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/widgets.json',
	'local_import_revslider'       => array( 
		'slide24' => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/slide24.zip',
	),
	'local_import_options'         => array(
		array(
			'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-24/theme_options.txt',
			'option_name' => 'emarket_theme',
		),
	),
	'menu_locate'                  => array(
		'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
		'vertical_menu' => 'Verticle Menu',
		'mobile_menu' => 'Menu Mobile 1'
	),
	'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-24/screenshot.png',
	'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
	'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout22/',
	),
	
	array(
	'import_file_name'             => 'Demo Homepage 24',
	'page_title'                   => 'Home Page 25',
	'header_title'				   => 'Header Style 27',
	'footer_title'				   => 'Footer_25',
	'local_import_file'            => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content.xml',
	'local_import_page_file'       => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-page.xml',
	'local_import_pagemenu_file'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/demo-content-pagemenu.xml',
	'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/widgets.json',
	'local_import_options'         => array(
		array(
			'file_path'   => trailingslashit( get_template_directory() ) . 'lib/import/demo-25/theme_options.txt',
			'option_name' => 'emarket_theme',
		),
	),
	'menu_locate'                  => array(
		'primary_menu' => 'Primary Menu',   /* menu location => menu name for that location */
		'vertical_menu' => 'Verticle Menu',
		'mobile_menu' => 'Menu Mobile 1'
	),
	'import_preview_image_url'     => get_template_directory_uri() . '/lib/import/demo-25/screenshot.png',
	'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately. This import maybe finish on 5-10 minutes', 'emarket' ),
	'preview_url'                  => 'https://demo.wpthemego.com/themes/sw_emarket/layout23/',
	),
  
);
}
add_filter( 'pt-ocdi/import_files', 'sw_import_files' );

