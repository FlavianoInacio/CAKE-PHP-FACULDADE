<html>
<head>
	<title>Usuários</title>
</head>
<body>
	<?php  echo $this->Html->link('Adiocionar Usuario',array('controller' => 'Users','action'=>'add')); ?>
	<table>
		<tr>
			<th>
				Usuarios
			</th>
			<th>
				Papel
			</th>
			<th>
				Editar
			</th>
			<th>
				Deletar
			</th>


		</tr>
		<?php foreach ($users as $key => $value) {
		?>
		<tr>

			<td>
				<?php echo $value['User']['username']; ?>
			</td>
			<td>
				<?php echo $value['User']['role']; ?>
			</td>
			<td>
				<?php echo $this->Html->link('Editar',array('controller'=>'Users','action'=>'edit',$value['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink('Deletar',
					array('controller'=>'Users','action'=>'delete',$value['User']['id']),
					array('confirm'=>'Deseja realmente excluir?')
					); ?>
			</td>

		</tr>
		<?php } ?>
	</table>
</body>
</html>