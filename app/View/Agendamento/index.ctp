

<?php 
foreach($agendamentos as $agendamento):	
	if($agendamento['Agendamento']['data']>=date("Y-m-d")):
	?>
		<div class="card">
			<h3>Código aluno: <?php echo $agendamento['Agendamento']['aluno_id_fk']; ?></h3>
			<p><?php echo date('d/m/Y', strtotime($agendamento['Agendamento']['data'])); ?></p>
			<p>Das <?php echo $agendamento['Agendamento']['hora_inicio']; ?>h às <?php echo $agendamento['Agendamento']['hora_termino']; ?>h</p>
			
			<?php echo $this->Html->link('Editar', array('action' => 'editar', $agendamento['Agendamento']['agendamento_id']),array('class' => 'bt bt_alterar')); ?>
		                <?php echo $this->Html->link(
		                    'Excluir', array(
		                        'action' => 'excluir',
		                        $agendamento['Agendamento']['agendamento_id']), array('confirm' => 'Você tem certeza que quer excluir este agendamento?','class' => 'bt bt_excluir')
		                ); ?>
		</div>
	<?php
	endif;
endforeach;
?>







<!--

<h4 class="adicionar"><?php echo $this->Html->link('Adicionar', array('action' => 'cadastrar')); ?></h4>

<div class="table-card">
	<div class="table-card-body">
		<table class="tabela">
		    <tr>
		        <th style="width:65px;text-align:center;">Código</th>
		        <th>Data</th>
		        <th>Descricao</th>
		        <th>Altura</th>
		        <th>Peso</th>
		        <th>IMC</th>
		        <th>Indice Gordura</th>
		        <th>Braço direito</th>
		        <th>Braço esquerdo</th>
		        <th>Tórax</th>
		        <th>Abdomên</th>
		        <th>Peso ideal</th>
		        <th>Gordura Ideal</th>
		        <th>Aluno ID</th>
		        <th>Avaliador ID</th>
		    </tr>
		    <?php
		    foreach ($agendamentoa as $agendamento) {
		        ?>
		        <tr>
		            <td><?php echo $avaliacao['Avaliacao']['numero_avaliacao']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['data']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['descricao']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['altura']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['peso']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['imc']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['indice_gordura']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['braco_dir']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['braco_esq']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['torax']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['abdomen']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['peso_ideal']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['gordura_ideal']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['aluno_id_fk']; ?></td>
		            <td><?php echo $avaliacao['Avaliacao']['avaliador_id_fk']; ?></td>
		            <td><?php echo $this->Html->link('Editar', array('action' => 'editar', $avaliacao['Avaliacao']['numero_avaliacao']),array('class' => 'bt bt_alterar')); ?>
		                <?php echo $this->Html->link(
		                    'Excluir', array(
		                        'action' => 'excluir',
		                        $avaliacao['Avaliacao']['numero_avaliacao']), array('confirm' => 'Você tem certeza que quer excluir este usuário?','class' => 'bt bt_excluir')
		                ); ?></td>
		        </tr>
		    <?php
		    }
		    ?>
		</table>
	</div>
</div>-->