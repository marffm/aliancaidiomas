<?php

// ---- AutoLoader ----
function library($className) {
	$file = DIR_LIBS . ucwords($className) . '.php' ;

	if (is_file($file)) {
		include_once ($file);
		return true;
	} else {
		return false;
	}

}

function librarySystem($Name) {
	$file = DIR_SYSTEM . ucwords($Name) . '.php' ;

	if (is_file($file)) {
		include_once ($file);
		return true;
	} else {
		return false;
	}	
}

function controllers($controllers) {
	$file = DIR_CONTROLLERS . $controllers . '.php' ;

	if (is_file($file)) {
		include_once ($file);
		return true;
	} else {
		return false;
	}	
}


function models($models) {
	$file = DIR_MODELS . $models . '.models.php' ;

	if (is_file($file)) {
		include_once ($file);
		return true;
	} else {
		return false;
	}	
}

function views($views) {
	$file = DIR_VIEWS . $views . '.tpl' ;

	if (is_file($file)) {
		include_once ($file);
		return true;
	} else {
		return false;
	}	
}

spl_autoload_register('library');
spl_autoload_register('librarySystem');
spl_autoload_register('controllers');
spl_autoload_register('models');




//echo '<br />We load the startup.php<br/>';