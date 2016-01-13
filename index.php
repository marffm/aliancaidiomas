<?php
require_once 'config.php';
require_once DIR_SYSTEM . 'Startup.php';

$registry = new Registry();

$url = new Url($registry);
$registry->set('url', $url);

$load = new Loader($registry);
$registry->set('loader', $load);

$document = new Document($registry);
$registry->set('document', $document);


$class = $url->getUrl();
$index = new $class[0]($registry);
$registry->set('controller', $index);
$index->index();

if (isset($class[2])){
	return $index->{$class[1]}($class[2]);
} else {
	if (isset($class[1])) {
		$index->{$class[1]}();		
	}
}










/* ---- Debug ---- */
echo '<br/><br/><hr>';
var_dump($document);
echo '<br/>I\'m in index page';