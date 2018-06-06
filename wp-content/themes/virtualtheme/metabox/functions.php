<?php

//Our Team member metabox 
function team_member_metabox(array $ourteam){
		
	$prefix = "_virtual_";
	
	$ourteam[] = array(
		'id' => 'team_member_list',
		'title' => __('Team member content area','virtual'),
		'object_types' => array('team_member'),
		'fields' => array(
			array(
				'name' => __('Member Position','virtual'),
				'desc' => __( 'Write your team member lead position', 'virtual' ),
				'type' => 'text',
				'id'   => $prefix.'member_position'
			),
			array(
				'name' => __('Member Image','virtual'),
				'desc' => __('Upload an image as a Team Member the member also image size should be width:270px and height:270px', 'virtual' ),
				'type' => 'file',
				'id'   => $prefix.'member_image'
			),
			array(
				'name' => __('Hover Image','virtual'),
				'desc' => __('Upload an image as a hover effect also image size should be width:270px and height:270px', 'virtual' ),
				'type' => 'file',
				'id'   => $prefix.'member_image_hover'
			),
			array(
				'name' => __('Facebook URL','virtual'),
				'type' => 'text_url',
				'id'   => $prefix.'facebook'
			),
			array(
				'name' => __('Twiter URL','virtual'),
				'type' => 'text_url',
				'id'   => $prefix.'twitter'
			),
			array(
				'name' => __('Google Plus URL','virtual'),
				'type' => 'text_url',
				'id'   => $prefix.'googleplus'
			),
			array(
				'name' => __('Dribbble URL','virtual'),
				'type' => 'text_url',
				'id'   => $prefix.'dribbble'
			),
			array(
				'name' => __('Linkedin URL','virtual'),
				'type' => 'text_url',
				'id'   => $prefix.'linkedin'
			)
		)
	);
	return $ourteam;
	
}
add_filter('cmb2_meta_boxes','team_member_metabox');


//Portfolio metabox :)

function portfolio_metabox(array $portfolio){
		
	$prefix = "_virtual_";
	
	$portfolio[] = array(
		'id' => 'poerfolio_list',
		'title' => __('Portfolio content area','virtual'),
		'object_types' => array('portfolio_section'),
		'fields' => array(
			array(
				'name' => __('Portfolio Image','virtual'),
				'desc' => __( 'Upload here your portfolio Image the image size should be 440px width and 260px height', 'virtual' ),
				'type' => 'file',
				'id'   => $prefix.'portfolio_image'
			),
			array(
				'name' => __('Hover Video','virtual'),
				'desc' => __( 'Past here your youtube video link', 'virtual' ),
				'type' => 'text_url',
				'id'   => $prefix.'portfolio_video'
			),
		)
	);
	return $portfolio;
	
}
add_filter('cmb2_meta_boxes','portfolio_metabox');









