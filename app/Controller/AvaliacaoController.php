<?php

class AvaliacaoController extends AppController {
	 public $scaffold;


	public function index() { 
		$this->set("title", "Avaliacao"); 
		$title_for_layout = "Listar avaliações";
		$avaliacoes = $this->Avaliacao->find('all'); 
		$this->set('avaliacoes', $avaliacoes); 
	}

	 public function cadastrar(){ 
		 
		$this->loadModel('Aluno');
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos); 
		
		$this->loadModel('Avaliador');
		$avaliadores = $this->Avaliador->find('all'); 
		$this->set('avaliadores', $avaliadores); 
		
		
		 if($this->request->is("POST")){ 		  	
		  	if($this->Avaliacao->save($this->request->data)){
               $this->Session->setFlash('O usuário foi adicionado com sucesso!');
               $this->redirect(array('action' => '/index/'));
            }else{
               $this->Session->setFlash('O usuário não foi adicionado. Tente novamente!');
            }

		 } 
	}
	
	public function editar($id = NULL) {
        $this->set("title", "Editar avaliação");
        $this->Avaliacao->id = $id;
        if (!$this->Avaliacao->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
		$this->loadModel('Aluno');
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos); 
		
		$this->loadModel('Avaliador');
		$avaliadores = $this->Avaliador->find('all'); 
		$this->set('avaliadores', $avaliadores); 
		

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Avaliacao->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Avaliacao->read(NULL, $id);
        }
    }
    
    public function excluir($id = NULL) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Avaliacao->id = $id;
        if (!$this->Avaliacao->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->Avaliacao->delete()) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array('action' => '/index/'));
        }
        $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
        $this->redirect(array('action' => '/index/'));
    }

}
