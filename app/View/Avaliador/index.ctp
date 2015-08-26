<h4 class="adicionar"><?php echo $this->Html->link('Adicionar', array('action' => 'cadastrar')); ?></h4>

<div class="table-card">
	<div class="table-card-body">
		<table class="tabela">
		    <tr>
		        <th style="width:65px;text-align:center;">Código</th>
		        <th>Nome</th>
		        <th>CPF</th>
		        <th>Telefone</th>
		        <th>Sexo</th>
		        <th>E-mail</th>
		        <th>Logradouro</th>
		        <th>Bairro</th>
		        <th>Cidade</th>
		        <th>Estado</th>
		        <th>CEP</th>
		    </tr>
		    <?php
		    foreach ($avaliadores as $avaliador) {
		        ?>
		        <tr>
		            <td><?php echo $avaliador['Avaliador']['avaliador_id']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['nome']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['cpf']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['telefone']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['sexo']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['email']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['logradouro']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['bairro']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['cidade']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['estado']; ?></td>
		            <td><?php echo $avaliador['Avaliador']['cep']; ?></td>
		            <td><?php echo $this->Html->link('Editar', array('action' => 'editar', $avaliador['Avaliador']['avaliador_id']),array('class' => 'bt bt_alterar')); ?>
		                <?php echo $this->Html->link(
		                    'Excluir', array(
		                        'action' => 'excluir',
		                        $avaliador['Avaliador']['avaliador_id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?','class' => 'bt bt_excluir')
		                ); ?></td>
		        </tr>
		    <?php
		    }
		    ?>
		</table>
	</div>
</div>