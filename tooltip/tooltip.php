<?php

//  Kirby Tooptip
//  made by Claus Artz @mydarktime
//
// the complete tag could be called like
// 
// (tooltip: text for hover text: the text you want to get displayed)



kirbytext::$tags['tooltip'] = array(
		'attr' => array(
		'text'
	),
	'html' => function($tag) {

			// setting the default content
			$text = $tag->attr('text', 'There is no text left inside.');

			// setting the number of the modal relative to the content of your page. there should not be the same number twice!
			$number = mt_rand();

			// builds modal html output
			$html  = '<span class="tooltip" data-tooltip="' . $text .'">';		
			$html .= '' . $tag->attr('tooltip') . '';
			$html .= '</span>';
		
			return $html;
		
	}

);
?>