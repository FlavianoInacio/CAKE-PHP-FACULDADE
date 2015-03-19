<?php 
	class usersController extends AppController {

		public $helpers = array('Html','Form');
		public $name = 'Users';


		public function index (){
			$this->set('users',$this->User->find('all'));
		}
		public function add (){

			if($this->request->is('post')){
				if($this->User->save($this->request->data)){
					$this->Session->setFlash("Usuário adicionado com sucesso!");
					$this->redirect(array('action'=>'index'));
				}

			}
	}
	public function edit($id = null){
		$this->User->id = $id;
		if($this->request->is('get')){
			$this->request->data = $this->User->read();
		}
		else{
			if($this->User->save($this->request->data)){
				$this->Session->setFlash("Usuário Editado com sucesso!");
				$this->redirect(array('action'=>'index'));
			}
		}
	}

	public function delete($id = null){
		$this->User->id = $id;
		if($this->request->is('post')){
			if($this->User->delete($id)){
				$this->Session->setFlash("Usuário Excluido com sucesso!");
				$this->redirect(array('action'=>'index'));
			}
		}

	}

		public function login (){
		if($this->request->is('post')){
			if($this->Auth->login()){
			$this->redirect($this->Auth->redirect());
		}
		else
		{
		$this->Session->setFlash("Úsuário ou Senha invalidos");
		}

	}	
  }



}

 ?>