<?php

function Solartec_Custom_Post(){
	register_post_type('slider',
		array(
			'labels' => array(
				'name' =>'Slider',
				'menu_name' =>'Slider Menu',
				'add_new' =>'Add new slider',
				'add_new_item' =>'Add new slider',
				'edit_item' =>'Enter your Slider Title',
				'all_items' =>'All Slider'
			),
			'public' =>true,
			'supports' => array(
				'title','thumbnail'
			)
		)
	);
	register_post_type('service',
			array(
				'labels' => array(
					'name' =>'Service',
					'menu_name' =>'Service',
					'add_new' =>'Add new Service',
					'add_new_item' =>'Add new Service',
					'edit_item' =>'Enter your Service Title',
					'all_items' =>'All Service'
				),
				'public' =>true,
				'supports' => array(
					'title','editor','thumbnail'
				)
			)
		);
	register_post_type('portfolio',
			array(
				'labels' => array(
					'name' =>'Portfolio',
					'menu_name' =>'Portfolio',
					'add_new' =>'Add new Portfolio',
					'add_new_item' =>'Add new Portfolio',
					'edit_item' =>'Enter your Portfolio Title',
					'all_items' =>'All Portfolio'
				),
				'public' =>true,
				'supports' => array(
					'title','thumbnail'
				)
			)
		);
	register_taxonomy('portfolios',
		array('portfolio'),
		array(
			'labels' => $labels,
			'hierarchical' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' =>'portfolios'),
		)
	);

	register_post_type('team_member',
		array(
			'labels' => array(
				'name' =>'Team',
				'menu_name' =>'Team',
				'add_new' =>'Add new Team',
				'add_new_item' =>'Add new Team',
				'edit_item' =>'Enter your Team Title',
				'all_items' =>'All Team'
			),
			'public' =>true,
			'supports' => array(
				'title','thumbnail'
			)
		)
	);
	register_post_type('testimonial',
		array(
			'labels' => array(
				'name' =>'Testimonial',
				'menu_name' =>'Testimonial',
				'add_new' =>'Add new Testimonial',
				'add_new_item' =>'Add new Testimonial',
				'edit_item' =>'Enter your Testimonial Title',
				'all_items' =>'All Testimonial'
			),
			'public' =>true,
			'supports' => array(
				'title'
			)
		)
	);



}
add_action('init','Solartec_Custom_Post');