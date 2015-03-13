<?php
    class Semestre extends AppModel{
        public $name = 'Semestre';
        public $validate = array('titulo'=>array('rule'=>'notEmpty'));
    }
 
?>
