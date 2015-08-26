

<div class="cadastro_aluno">
	<h3>Editar aluno</h3>
	<div id="form_aluno">
<?php 
echo $this->Form->create("Aluno"); 

echo $this->Form->input('aluno_id', array('type' => 'hidden'));
echo $this->Form->input("nome", array('class' => 'campo')); 

echo $this->Form->input("data_nascimento", 
	array(
		"type" => "date", 
		'class' => 'campo data', 
		"label" =>"Data de nascimento",
	    'dateFormat' => 'DMY',
	    'minYear' => date('Y') - 70,
	    'maxYear' => date('Y') - 15,
    )
); 
    
echo $this->Form->input("cpf", array('class' => 'campo','type' => 'number', 'min' => '0', 'label' => 'CPF','maxLength'=>'11', 'type' => 'text')); 
echo $this->Form->input("telefone", array('class' => 'campo', 'type' => 'tel','maxLength'=>'11')); 

echo $this->Form->input("sexo",
	array(
		"class"=>"campo",
		"type"=>"select",
		"options" => array("M"=>"Masculino","F"=>"Feminino"),
		"label" =>"Selecione o sexo", 
		'style' => 'height: 20px' 
	)
);

echo $this->Form->input("email", array('type' => 'email', 'class' => 'campo','maxLength'=>'90', 'type' => 'text')); 
echo $this->Form->input("cidade", array('class' => 'campo','maxLength'=>'40', 'type' => 'text')); 
echo $this->Form->input("logradouro", array('class' => 'campo','maxLength'=>'40', 'type' => 'text')); 
echo $this->Form->input("estado", array('class' => 'campo apenasletras','maxLength'=>'2', 'type' => 'text')); 
echo $this->Form->input("cep", array('class' => 'campo apenasnumeros', 'label' => 'CEP','maxLength'=>'8', 'type' => 'text')); 
echo $this->Form->input("bairro", array('class' => 'campo','maxLength'=>'40', 'type' => 'text'));  

echo $this->Form->end("Salvar"); 
//fecha o form e coloca um botão submit. 

?>
	</div>
</div>

<script>
jQuery('.apenasnumeros').keyup(function () { 
    this.value = this.value.replace(/[^0-9\.]/g,'');
});

jQuery('.apenasletras').keyup(function () { 
    this.value = this.value.replace(/[0-9]+/,'');
});
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){        
        $('#AlunoCpf').focus();
        $("#AlunoCpf").mask("999.999.999-99"); 
        $('#AlunoTelefone').focus();
        $("#AlunoTelefone").mask("(99) 9999-9999?");
    });
</script>