<?php

	// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}
/**
 * Error and Exception handling
 */

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if ($url != NULL) {
    $url = rtrim($url, '/');
    $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
}else{
    unset($url);
}


if (isset($url[0])) {
    include 'app/Http/Controllers/'.$url[0].'.php';
    $controller = new $url[0]();
    if (isset($url[2])) {
        $controller->{$url[1]}($url[2]);
    }else{
        if (isset($url[1])) {
            $controller->{$url[1]}();
        }else{

        }
    }
}else{
    include 'app/Http/Controllers/DashboardController.php';
    $controller = new DashboardController();
    $controller->home();
}

?>