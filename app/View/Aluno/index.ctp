<h4 class="adicionar"><?php echo $this->Html->link('Adicionar', array('action' => 'cadastrar')); ?></h4>

<div class="table-card">
	<div class="table-card-body">
		<table class="tabela">
		    <tr>
		        <th style="width:65px;text-align:center;">Código</th>
		        <th>Nome</th>
		        <th>Data de nascimento</th>
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
		    foreach ($alunos as $aluno) {
		        ?>
		        <tr>
		            <td><?php echo $aluno['Aluno']['aluno_id']; ?></td>
		            <td><?php echo $aluno['Aluno']['nome']; ?></td>
		            <td><?php echo date('d/m/Y', strtotime($aluno['Aluno']['data_nascimento'])); ?></td>
		            <td><?php echo $aluno['Aluno']['cpf']; ?></td>
		            <td><?php echo $aluno['Aluno']['telefone']; ?></td>
		            <td><?php echo $aluno['Aluno']['sexo']; ?></td>
		            <td><?php echo $aluno['Aluno']['email']; ?></td>
		            <td><?php echo $aluno['Aluno']['logradouro']; ?></td>
		            <td><?php echo $aluno['Aluno']['bairro']; ?></td>
		            <td><?php echo $aluno['Aluno']['cidade']; ?></td>
		            <td><?php echo $aluno['Aluno']['estado']; ?></td>
		            <td><?php echo $aluno['Aluno']['cep']; ?></td>
		            <td><?php echo $this->Html->link('Editar', array('action' => 'editar', $aluno['Aluno']['aluno_id']),array('class' => 'bt bt_alterar')); ?>
		                <?php echo $this->Html->link(
		                    'Excluir', array(
		                        'action' => 'excluir',
		                        $aluno['Aluno']['aluno_id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?','class' => 'bt bt_excluir')
		                ); ?></td>
		        </tr>
		    <?php
		    }
		    ?>
		</table>
	</div>
</div>