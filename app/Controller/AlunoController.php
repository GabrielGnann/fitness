<?php

class AlunoController extends AppController {

	public function index() { 
		$this->set("title", "Alunos"); 
		$title_for_layout = "Listar alunos";
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos); 
	}

	 public function cadastrar(){ 
		 if($this->request->is("POST")){ 		  	
		  	if($this->Aluno->save($this->request->data)){
               $this->Session->setFlash('O usuário foi adicionado com sucesso!');
               $this->redirect(array('action' => '/index/'));
            }else{
               $this->Session->setFlash('O usuário não foi adicionado. Tente novamente!');
            }

		 } 
	}
	
	public function editar($aluno_id = NULL) {
        $this->set("title", "Editar Usuário");
        $this->Aluno->id = $aluno_id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Aluno->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Aluno->read(NULL, $aluno_id);
        }
    }
    
    public function excluir($id = NULL) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Aluno->id = $id;
        if (!$this->Aluno->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->Aluno->delete()) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array('action' => '/index/'));
        }
        $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
        $this->redirect(array('action' => '/index/'));
    }
}
