<?php



$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}


require __DIR__ . '/../vendor/autoload.php';



// require __DIR__ . '/../src/app.php';

// $loader = new Twig_Loader_Array([
// 	'index' => 'Helo World!!! {{name}}'
// ]);

			          
$loader = new Twig_Loader_Filesystem(__DIR__.'/../twig_templates');


$twig = new Twig_Environment($loader);


echo $twig->render('index.html.twig', [name=>'Marcos Barbosa']);
