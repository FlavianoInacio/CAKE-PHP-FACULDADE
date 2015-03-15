<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Adicionar Semestre',array('controller' => 'semestres' , 'action' => 'add')); ?>
<table>
<tr>
<th>Id</th>
<th>T�tulo</th>
<th>Data de Cria��o</th>
<th></th>
<th></th>
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