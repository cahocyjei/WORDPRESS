<?php


$foodie_restaurant_custom_css = '';

	/*---------------------------text-transform-------------------*/
	
	$foodie_restaurant_text_transform = get_theme_mod( 'menu_text_transform_foodie_restaurant','CAPITALISE');
    if($foodie_restaurant_text_transform == 'CAPITALISE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'UPPERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: uppercase ; font-size: 14px !important ;';

		$foodie_restaurant_custom_css .='}';

	}else if($foodie_restaurant_text_transform == 'LOWERCASE'){

		$foodie_restaurant_custom_css .='#main-menu ul li a{';

			$foodie_restaurant_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$foodie_restaurant_custom_css .='}';
	}

	