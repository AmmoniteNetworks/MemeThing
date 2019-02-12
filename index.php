<?php
require __DIR__ . '/vendor/autoload.php';

// Kickstart the framework
$f3 = \Base::instance();



\Cloudinary::config(array(
    "cloud_name" => "ammonite-networks",
    "api_key" => "843834995579177",
    "api_secret" => "tjlm2xN70tacBJWv1NNnJEZOHzQ"
));
 

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$f3->route('GET /',
	function($f3) {
	    https://res.cloudinary.com/demo/image/upload/l_text:Arial_45_bold:Hello World,g_north_west,x_20,y_20/face_center.jpg
	    $image = cloudinary_url("1303_lcueen.jpg",["width" => '500', "height" => '600', "crop" => "lpad", "gravity" => "north"]);
	    $f3->set('image',$image);
		$f3->set('content','welcome.htm');
		echo View::instance()->render('layout.htm');
	}
);

$f3->route('GET /userref',
	function($f3) {
		$f3->set('content','userref.htm');
		echo View::instance()->render('layout.htm');
	}
);

$f3->run();
