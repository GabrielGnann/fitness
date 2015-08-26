<?php

class Avaliacao extends AppModel {			
	public $useTable = 'avaliacao';
	var $primaryKey = 'numero_avaliacao';
	
	public $validate = array(
		'altura' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'peso' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'imc' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'indice_gordura' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'braco_dir' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'braco_esq' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'torax' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'abdomen' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		)		
	);
}
