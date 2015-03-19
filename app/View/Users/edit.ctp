<?php 
	echo $this->Form->create('User',array('action'=>'edit'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('role',array('options'=> array('Usuario','Adm','Intermediario')));
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->end('Salvar');


 ?>