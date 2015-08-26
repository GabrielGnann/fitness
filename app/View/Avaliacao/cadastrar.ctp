
<?php
	
		//print_r($avaliadores);
		//die();
	?>
	
	
	
<div class="cadastro_aluno">
	<h3>Cadastro de avaliação</h3>
	<div id="form_aluno">
<?php 
echo $this->Form->create("Avaliacao"); 
//criando o form para o model Avaliacao. 

echo $this->Form->input("data", 
	array(
		"type" => "date", 
		'class' => 'campo data', 
		"label" =>"Data",
	    'dateFormat' => 'DMY',
	    'minYear' => date('Y') - 70,
	    'maxYear' => date('Y'),
    )
); 
echo $this->Form->input("descricao", array('class' => 'campo','maxLength'=>'200', 'type' => 'text')); 
echo $this->Form->input("altura", array('class' => 'campo apenasnumeros','type' => 'number', 'min' => '0', 'label' => 'Altura em CM', 'maxLength'=>'3', 'type' => 'text')); 
echo $this->Form->input("peso", array('class' => 'campo', 'min' => '0', 'maxLength'=>'6', 'type' => 'text', 'label' => 'Peso em KG')); 
echo $this->Form->input("imc", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'4', 'type' => 'text')); 

echo $this->Form->input("indice_gordura", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'3', 'type' => 'text')); 
echo $this->Form->input("braco_dir", array('class' => 'campo apenasnumeros', 'label' => 'Braço direito em cm', 'min' => '0', 'maxLength'=>'3', 'type' => 'text')); 
echo $this->Form->input("braco_esq", array('class' => 'campo apenasnumeros', 'label' => 'Braço esquerdo em cm', 'min' => '0', 'maxLength'=>'3', 'type' => 'text')); 
echo $this->Form->input("torax", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'4', 'type' => 'text', 'label' => 'Tórax em CM')); 
echo $this->Form->input("abdomen", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'3', 'type' => 'text', 'label' => 'Abdomên em CM')); 
echo $this->Form->input("peso_ideal", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'3', 'type' => 'text')); 
echo $this->Form->input("gordura_ideal", array('class' => 'campo apenasnumeros', 'min' => '0', 'maxLength'=>'3', 'type' => 'text')); 

?>


	<div class="input number">
		<label for="AvaliacaoAlunoIdFk">Aluno</label>
		<select name="data[Avaliacao][aluno_id_fk]" class="campo apenasnumeros" id="AvaliacaoAlunoIdFk">	
		<?php 
			foreach ($alunos as $aluno): 
		?>
		<option value="<?php echo $aluno["Aluno"]["aluno_id"]; ?>">
			<?php echo $aluno["Aluno"]["nome"]; ?>
		</option>
		<?php 
			endforeach; 
		?>
		</select>
	</div>
	
	
	<div class="input number">
		<label for="AvaliacaoAvaliadorIdFk">Avaliador</label>
		<select name="data[Avaliacao][avaliador_id_fk]" class="campo apenasnumeros" id="AvaliacaoAvaliadorIdFk">	
		<?php 
			foreach ($avaliadores as $avaliador): 
		?>
		<option value="<?php echo $avaliador["Avaliador"]["avaliador_id"]; ?>">
			<?php echo $avaliador["Avaliador"]["nome"]; ?>
		</option>
		<?php 
			endforeach; 
		?>
		</select>
	</div>

<?php
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
        $("#AvaliacaoPeso").mask("999.99");
    });
</script>