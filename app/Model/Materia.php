<?php 
	class Materia extends AppModel {
		public $name = 'Materia';
                
                public $validate = array(
                            'titulo' => array('rule'=>'notEmpty'),
                             'assuntos' => array('rule'=>'notEmpty')   
            
            
        );
		
	}
    
            


?>