<?php
// load shayanfp.ir platform
define("ShayanFP_BEST", 1); include 'setup.php';

// $path = $_SERVER['REQUEST_URI'];
$base_directory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
$request_uri = strtok($_SERVER['REQUEST_URI'], '?');
$path = substr($request_uri, strlen($base_directory));
if (empty($path) || $path === '/index.php') {
    $path = '/';
}
if (strpos($path, "?") !== false) {
    $path = strstr($path, "?", true);
} else {
    $path = $path;
}

$path = rtrim($path, '/');


if($path==''){
    $path = '/';
}

if($path == '/en'){
    echo shayanfp_head('en','Shayan Farhang Pazhooh | Web Designer', 
"My name is Shayan Farhang Pazhooh. I'm founder of ShayanWeb.com and a webdesigner. Read more about me, here.",
'Shayan Farhang Pazhooh');
    echo shayanfp_header('en');
    echo shayanfp_home_main('en');
    echo shayanfp_footer('en');
}elseif($path == '/'){
    echo shayanfp_head();
    echo shayanfp_alert();
    echo shayanfp_header();
    echo shayanfp_home_main();
    echo shayanfp_footer();
} else { //404
    http_response_code(404);
    echo shayanfp_404();
}