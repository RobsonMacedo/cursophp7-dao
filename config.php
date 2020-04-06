<?php 

//require_once('sql.php');


spl_autoload_register(function($className){

	$fileName = 'class'.DIRECTORY_SEPARATOR.$className.'.php';

	if (file_exists(($fileName))){

		require_once($fileName);

	}

});


/*spl_autoload_register(function($className){

	var_dump($className);

	echo $className.'php';

});*/

 ?>