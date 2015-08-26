<?php

class AvaliadorController extends AppController {
	 public $scaffold;


	public function index() { 
		$this->set("title", "Avaliador"); 
		$title_for_layout = "Listar avaliadores";
		$avaliadores = $this->Avaliador->find('all'); 
		$this->set('avaliadores', $avaliadores); 
	}

	 public function cadastrar(){ 
		 if($this->request->is("POST")){ 		  	
		  	if($this->Avaliador->save($this->request->data)){
               $this->Session->setFlash('O usuário foi adicionado com sucesso!');
               $this->redirect(array('action' => '/index/'));
            }else{
               $this->Session->setFlash('O usuário não foi adicionado. Tente novamente!');
            }

		 } 
	}
	
	public function editar($id = NULL) {
        $this->set("title", "Editar Usuário");
        $this->Avaliador->id = $id;
        if (!$this->Avaliador->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Avaliador->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Avaliador->read(NULL, $id);
        }
    }
    
    public function excluir($id = NULL) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Avaliador->id = $id;
        if (!$this->Avaliador->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->Avaliador->delete()) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array('action' => '/index/'));
        }
        $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
        $this->redirect(array('action' => '/index/'));
    }

}
