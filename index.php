<?php

$ctrl = (isset($_GET['ctrl']) && $_GET['ctrl'] != '') ? $_GET['ctrl'] : 'home';
$subctrl = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : 'home';

if(!preg_match('[a-zA-Z1-9]*', $ctrl))
        exit('500 - Caractere non conforme dans le nom du controlleur');

if(!file_exists('model/'.$ctrl.'.php'))
        exit('404 - Controlleur non existant. Fichier non existant');

include_once 'model/'.$ctrl.'.php';

if(!class_exists(ucfirst($ctrl)))
        exit('404 - Controlleur non existant. Classe non exitante');

$cls = new ucfirst($ctrl);

if(!method_exists($cls, $subctrl))
        exit('404 - Page non existante');

$cls->$subctrl();