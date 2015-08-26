<?php

class AgendamentoController extends AppController {
	 public $scaffold;


	public function index() { 
		$this->loadModel('Aluno');
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos);
		
		$this->set("title", "Agendamento"); 
		$title_for_layout = "Listar agendamentos";
		$agendamentos = $this->Agendamento->find('all', array(
		    'order' => array('Agendamento.data' => 'ASC')
		));
		$this->set('agendamentos', $agendamentos); 
	}

	 public function cadastrar(){ 
		$this->loadModel('Aluno');
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos); 
				
		if($this->request->is("POST")){ 		  	
			if($this->Agendamento->save($this->request->data)){
               $this->Session->setFlash('O agendamento foi adicionado com sucesso!');
               $this->redirect(array('action' => '/index/'));
            }else{
               $this->Session->setFlash('O agendamento não foi adicionado. Tente novamente!');
            }

		} 
	}
	
	public function editar($id = NULL) {
		$this->loadModel('Aluno');
		$alunos = $this->Aluno->find('all'); 
		$this->set('alunos', $alunos);
		
		
        $this->set("title", "Editar agendamento");
        $this->Agendamento->id = $id;
        if (!$this->Agendamento->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }

        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Agendamento->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Agendamento->read(NULL, $id);
        }
    }
    
    public function excluir($id = NULL) {
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Agendamento->id = $id;
        if (!$this->Agendamento->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
        if ($this->Agendamento->delete()) {
            $this->Session->setFlash(__('Registro excluído com sucesso.'));
            $this->redirect(array('action' => '/index/'));
        }
        $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
        $this->redirect(array('action' => '/index/'));
    }

}
