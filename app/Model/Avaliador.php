<?php

class Avaliador extends AppModel {			
	public $useTable = 'avaliador';
	var $primaryKey = 'avaliador_id';
	
	
	public $validate = array(
		'nome' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		),
		'cpf' => array(
			'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Você deve preencher este campo'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Você deve preencher este campo'
			)
		),
		'telefone' => array(
			'notempty' => array(
				'rule' => 'notempty',
				'message' => 'Você deve preencher este campo'
			),
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Você deve preencher este campo'
			)
		)
	);

}
