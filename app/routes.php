<?php

$app->get('/',function($results, $recourses){

	return $recourses['loadTemplate']()->render('index.tpl', array('page' => 'home', 'framework' => $recourses['smooth']('framework')));

});

