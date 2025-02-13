<?php

// all possible options will be stored
$config = array();

// a unique key that identifies this application - DO NOT LEAVE THIS EMPTY!
$config['app_key'] = 'ku4etwoe';

// a secret key to be used during encryption
$config['encryption_key'] = '';

// URL running the proxy app
$config['app_url'] = 'https://php-ku4etwoe.b4a.run/';

/*
how unique is each URL that is generated by this proxy app?
0 - no encoding of any sort. People can link to proxy pages directly: ?q=http://www.yahoo.com
1 - Base64 encoding only, people can hotlink to your proxy
2 - unique to the IP address that generated it. A person that generated that URL, can bookmark it and visit it and any point
3 - unique to that session and IP address - URL no longer valid anywhere when that browser session that generated it ends
*/

$config['url_mode'] = 1;

// plugins to load - plugins will be loaded in this exact order as in array
$config['plugins'] = array(
	'HeaderRewrite',
	'Stream',
	// ^^ do not disable any of the plugins above
	'Cookie',
	'Proxify',
	'UrlForm',
	// site specific plugins below
	'Youtube',
	'DailyMotion',
	'RedTube',
	'XHamster',
	'XVideos',
	'Xnxx',
	'Pornhub',
	'Twitter'
);

// additional curl options to go with each request
$config['curl'] = array(
	// CURLOPT_PROXY => '',
	// CURLOPT_CONNECTTIMEOUT => 5
);

//$config['replace_title'] = 'Google Search';

//$config['error_redirect'] = "https://unblockvideos.com/#error={error_msg}";
//$config['index_redirect'] = 'https://unblockvideos.com/';

// $config['replace_icon'] = 'icon_url';

// this better be here other Config::load fails
return $config;

?>
