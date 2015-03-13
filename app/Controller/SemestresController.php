<?php
    class SemestresController extends AppController {
        public $helpers = array('Html','Form');
        public $name = 'Semestres';
        //public $components = array('Session');
        
        function index(){
            $this->set('semestres',$this->Semestre->find('all'));
        }
        function edit($id = null){
            $this->Semestre->id = $id;
            if($this->request->is('get')){
                $this->request->data = $this->Semestre->read();
            }
            else{
                    if($this->Semestre->save($this->request->data)){
                            $this->Session->setFlash("Registro Editado com sucesso!");
                            $this->redirect(array('action'=>'index'));
                    }
                
            }
        }
        function add (){
            if($this->request->is('post')){
                if($this->Semestre->save($this->request->data)){
                $this->Session->setFlash("Semestre Adicionado com Sucesso!");
                $this->redirect(array('action'=>'index'));
                }
            }
        }
        function delete ($id = null){
            $this->Semestre->id = $id;
            if($this->request->is('get')){
                throw new MethodNotAllowedException();
            }
            if($this->Semestre->delete($id)){
                $this->Session->setFlash("Registro excluido com sucesso!");
                $this->redirect(array('action'=>'index'));
            }
        }
    }

?>