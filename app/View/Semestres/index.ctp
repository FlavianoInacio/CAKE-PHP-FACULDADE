<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<h1>Semestres</h1>
<br>
<?php echo $this->Html->link('Adicionar Semestre',array('controller' => 'semestres' , 'action' => 'add')); ?>
<br>
<?php echo $this->Html->link('Adicionar Usuário',array('controller'=>'Users','action'=>'add')) ?>
<br>
<br>
<table>
<tr>
<th>Id</th>
<th>TITULO</th>
<th>DATA DE CRIACAO</th>
<th>EDITAR</th>
<th>DELETAR</th>
</tr>
<!-- Aqui � onde n�s percorremos nossa matriz $posts, imprimindo
as informa��es dos posts -->
    <?php foreach($semestres as $semestre){ ?>
<tr>
    <td><?php echo $semestre['Semestre']['id']; ?></td>
    <td><?php echo $this->Html->link($semestre['Semestre']['titulo'],array('controller' => 'materias','action' => 'index' , $semestre['Semestre']['id']));?></td>
    <td><?php echo $semestre['Semestre']['created']; ?></td>
    <td><?php echo $this->Html->link('Editar',array('action' =>'edit',$semestre['Semestre']['id']));?></td>
    <td><?php echo $this->Form->postLink('Deletar',array('action'=>'delete',$semestre['Semestre']['id']),array('confirm'=>'Deseja realmente excluir?')) ?></td>
</tr>
    <?php } ?>
</table>           