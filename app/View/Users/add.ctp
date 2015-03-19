<?php 
	echo $this->Form->create('User');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('role',array('options'=> array('admin','author')));
	echo $this->Form->end('Salvar');

 ?>	