<?php
add_shortcode( 'mkb', 'mkb_sr' );
function mkb_sr($atts, $content=null){

		$defaults = array(
			"show"	=> "-1",
			"cat"	=> "0",
		);
		$params 					= shortcode_atts($defaults, $atts);
		$show						= $params['show'];
		$cat						= $params['cat'];
		
ob_start();
if($cat>0){
	include(dirname(__FILE__)."/templates/single-item.php");
}else{
	include (dirname(__FILE__)."/templates/list.php");	
}

$content = ob_get_clean();
return $content;
}

