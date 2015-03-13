<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Adicionar Semestre',array('controller' => 'semestres' , 'action' => 'add')); ?>
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
    <?php foreach($semestres as $semestre){ ?>
<tr>
    <td><?php echo $semestre['Semestre']['id']; ?></td>
    <td><?php echo $this->Html->link($semestre['Semestre']['titulo'],array('action' => 'view' , $semestre['Semestre']['id']));?></td>
    <td><?php echo $semestre['Semestre']['created']; ?></td>
    <td><?php echo $this->Html->link('Editar',array('action' =>'edit',$semestre['Semestre']['id']));?></td>
    <td><?php echo $this->Form->postLink('Deletar',array('action'=>'delete',$semestre['Semestre']['id']),array('confirm'=>'Deseja realmente excluir?')) ?></td>
</tr>
    <?php } ?>
</table>           