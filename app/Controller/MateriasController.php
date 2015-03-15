<?php 
	class MateriasController extends AppController{
		public $helpers = array('Html','Form');
		public $name = 'Materias';
                public $componets = array('Session');
                public $uses = array('Semestres');
		
		public function index (){
			$this->set('materias',$this->Materia->find('all'));
		}
                public function view($id = null){
                    $this->Materia->id = $id;
                    $this->set('materia',$this->Materia->read());         
                }
                public function add (){
                    if($this->request->is('post')){
                        if($this->Materia->save($this->request->data)){
                                $this->Session->setFlash("Materia Salva com Sucesso!");
                                $this->redirect(array('action'=>'index'));
                        }
                    }
                }
                public function edit($id = null){
                    $this->Materia->id = $id;
                    if($this->request->is('get')){
                        $this->request->data = $this->Materia->read();       
                    }else{
                        if($this->Materia->save($this->request->data)){
                            $this->Session->setFlash("Registro Editado com sucesso!");
                            $this->redirect(array('action'=>'index'));
                        }
                    }
                }
                public function delete ($id = null){
                    if(!$this->request->is('post')){
                        throw new MethodNotAllowedException();
                    }
                    if($this->Materia->delete($id)){
                        $this->Session->setFlash("Registro excluido com sucesso!");
                        $this->redirect(array('action'=>'index'));
                    }
                }
	
	}


?>