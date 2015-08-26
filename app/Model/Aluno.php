<?php

class Aluno extends AppModel {			
	
	public $useTable = 'aluno';
	var $primaryKey = 'aluno_id';
	
	public $validate = array(
		'nome' => array(
			'notempty' => array(	
				'rule'=>'notempty',
				'message'=>"Você deve preencher este campo"
			)
		)
	);
}
