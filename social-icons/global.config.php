<?php

/*

Add this to the global LiveWhale client configuration file 

Lets editors choose social icons from the formats menu in the LiveWhale toolbar 

*/

$_LW->CONFIG['STYLE_FORMATS']=array(
  array('title'=>'Link styles','selector'=>'a','classes'=>'mce-format-header', 'block'=>'h1'),
  array('title'=>'Facebook Link','selector'=>'a','classes'=>'facebook-link'),
  array('title'=>'Twitter Link','selector'=>'a','classes'=>'twitter-link'),
  array('title'=>'Instagram Link','selector'=>'a','classes'=>'instagram-link'),
  array('title'=>'Snapchat Link','selector'=>'a','classes'=>'snapchat-link'),
  array('title'=>'YouTube Link','selector'=>'a','classes'=>'youtube-link'),
  array('title'=>'Spotify Link','selector'=>'a','classes'=>'spotify-link'),
);


?>