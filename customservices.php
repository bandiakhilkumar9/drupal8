<?php

namespace Drupal\customform\Services;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class customservice {

public $value;




 Public function savetoconfig($value)
 { 
		
	$config = \Drupal::service('service.factory')->getEditable('customform.settings');
	foreach($value as $m=>$n){

		$config->set($m,$n)->save();


      }
 }

}
