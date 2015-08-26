

<div class="cadastro_aluno">
	<h3>Agendar</h3>
	<div id="form_aluno">
		
		
<?php 
echo $this->Form->create("Agendamento"); 
//criando o form para o model Agendamento. 

echo $this->Form->input("data", 
	array(
		"type" => "date", 
		'class' => 'campo data', 
		"label" =>"Data",
	    'dateFormat' => 'DMY',
	    'minYear' => date('Y') - 70,
	    'maxYear' => date('Y') + 6,
    )
); 
echo $this->Form->input("hora_inicio",
	array(
		"type" => "hour", 
		'class' => 'campo', 
		"label" =>"Hora início",
	    'dateFormat' => 'H'
    )
); 
echo $this->Form->input("hora_termino",
	array(
		"type" => "hour", 
		'class' => 'campo', 
		"label" =>"Hora término",
	    'dateFormat' => 'H'
    )
); 


?>

		
		
	<div class="input number">
		<label for="AgendamentoAlunoIdFk">Aluno</label>
		<select name="data[Agendamento][aluno_id_fk]" class="campo apenasnumeros" id="AgendamentoAlunoIdFk">	
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