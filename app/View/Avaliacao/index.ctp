<h4 class="adicionar"><?php echo $this->Html->link('Adicionar', array('action' => 'cadastrar')); ?></h4>

<div class="table-card">
	<div class="table-card-body">
		<table class="tabela">
		    <tr>
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
		    foreach ($avaliacoes as $avaliacao) {
		        ?>
		        <tr>
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
</div>