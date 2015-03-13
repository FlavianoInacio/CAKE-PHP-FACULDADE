<?php
    echo $this->Form->create('Semestre',array('action'=>'edit'));
    echo $this->Form->input('titulo');
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->end('Salvar');

?>

