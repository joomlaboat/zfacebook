<?php
/**
* ZFacebook Joomla! Native Component
* @version 1.3.4
* @author Ivan Komlev <support@joomlaboat.com>
* @link http://www.joomlaboat.com
* @license GNU/GPL */

defined('_JEXEC') or die('Restricted access');


	$href=$params->get( 'href' );
	$width=$params->get( 'width' );
	
	if($width<1 and $width!='auto')
	  $width='auto';
	  
	$height=$params->get( 'height' );
	
	$timeline=$params->get( 'timeline' );
	$events=$params->get( 'events' );
	$messages=(int)$params->get( 'messages' );
	$hide_cover=(int)$params->get( 'hide_cover' );
	$show_facepile=$params->get( 'show_facepile' );
	$small_header=(int)$params->get( 'small_header' );
	$adapt_container_width=$params->get( 'adapt_container_width' );
	$show_posts=$params->get( 'show_posts' );
	
	
	$z_language=$params->get( 'language' );
			
	if($z_language=='')
	  $z_language='en_US';
	


	$apiid='208507969202449';//$params->get( 'apiid' );
  
  
$b='
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/'.$z_language.'/sdk.js#xfbml=1&version=v2.8&appId='.$apiid.'";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>


';

  $tabs=array();

  if($timeline==1)
	$tabs[]='timeline';
	
  if($events==1)
	$tabs[]='events';
	
  if($messages==1)
	$tabs[]='messages';
	
  $tabs_str=implode(',',$tabs);
	
	  $b.=''
		.'<div class="fb-page" '
		.' href="'.$href.'" data-href="'.$href.'" '
		.' width="'.$width.'" data-width="'.$width.'"'
		.' height="'.$height.'" data-height="'.$height.'"'
		.' tabs="'.$tabs_str.'" data-tabs="'.$tabs_str.'"'
		.' hide_cover="'.($hide_cover ? 'true' : 'false').'" data-hide-cover="'.($hide_cover ? 'true' : 'false').'"'
		.' show_facepile="'.($show_facepile ? 'true' : 'false').'" data-show-facepile="'.($show_facepile ? 'true' : 'false').'"'
		.' small_header="'.($small_header ? 'true' : 'false').'" data-small-header="'.($small_header ? 'true' : 'false').'"'
		.' show_posts="'.($show_posts ? 'true' : 'false').'" data-show-posts="'.($show_posts ? 'true' : 'false').'"'
		.' adapt_container_width="'.($adapt_container_width ? 'true' : 'false').'" data-adapt-container-width="'.($adapt_container_width ? 'true' : 'false').'">'
		.'</div>'
		;
		
		
    //$document = JFactory::getDocument();
    //$document->addCustomTag($h);
    
    echo $b;
  

?>