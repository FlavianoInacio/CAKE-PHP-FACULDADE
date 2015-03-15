<h1>Materias da faculdade 2015.1</h1>
<br>
<p><?php echo $this->Html->link('Adicionar uma Matéria',array('action'=>'add')); ?></p>
<table>
<tr>
<th>Id</th>
<th>Título</th>
<th>Data de Criação</th>
<th></th>
<th></th>
</tr>
<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
as informações dos posts -->

<?php 
	foreach ($materias as $materia){ ?>
	<tr>
		<td><?php echo $materia['Materia']['id']; ?></td>
		<td><?php echo $this->Html->link($materia['Materia']['titulo'],array('controller' => 'materias','action'=>'view',$materia['Materia']['id'])); ?> </td>
		<td><?php echo $materia['Materia']['created']?></td>
                <td><?php echo $this->Html->link('Alterar',array('action'=>'edit',$materia['Materia']['id']));?></td>
                <td><?php echo $this->Form->postLink('Delete',array('action'=>'delete',$materia['Materia']['id']),array('confirm'=>'Tem certeza que deseja excluir?'))?></td>
	</tr>
	<?php }?>
	</table>
	
	
	