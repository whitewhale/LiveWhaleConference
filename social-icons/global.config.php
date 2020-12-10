<?php

/*

Add this to the global LiveWhale client configuration file 

Lets editors choose social icons from the formats menu in the LiveWhale toolbar 

*/

$_LW->CONFIG['STYLE_FORMATS']=[
	'title'=>['Link styles', 'selector'=>'a', 'classes'=>'mce-format-header', 'block'=>'h1'],
	'title'=>['Facebook Link', 'selector'=>'a','classes'=>'facebook-link'],
  'title'=>['Twitter Link','selector'=>'a','classes'=>'twitter-link'],
  'title'=>['Instagram Link','selector'=>'a','classes'=>'instagram-link'],
  'title'=>['Snapchat Link','selector'=>'a','classes'=>'snapchat-link'],
  'title'=>['YouTube Link','selector'=>'a','classes'=>'youtube-link'],
  'title'=>['Spotify Link','selector'=>'a','classes'=>'spotify-link']
];


?>