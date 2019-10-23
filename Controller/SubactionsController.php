<?php
App::uses('AppController', 'Controller');
/**
 * Subactions Controller
 *
 * @property Subaction $Subaction
 * @property PaginatorComponent $Paginator
 */
class SubactionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subaction->recursive = 0;
		$this->set('subactions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subaction->exists($id)) {
			throw new NotFoundException(__('Invalid subaction'));
		}
		$options = array('conditions' => array('Subaction.' . $this->Subaction->primaryKey => $id));
		$this->set('subaction', $this->Subaction->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subaction->create();
			if ($this->Subaction->save($this->request->data)) {
				$this->Flash->success(__('The subaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subaction could not be saved. Please, try again.'));
			}
		}
		$actions = $this->Subaction->Action->find('list');
		$this->set(compact('actions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subaction->exists($id)) {
			throw new NotFoundException(__('Invalid subaction'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subaction->save($this->request->data)) {
				$this->Flash->success(__('The subaction has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subaction could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subaction.' . $this->Subaction->primaryKey => $id));
			$this->request->data = $this->Subaction->find('first', $options);
		}
		$actions = $this->Subaction->Action->find('list');
		$this->set(compact('actions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Subaction->exists($id)) {
			throw new NotFoundException(__('Invalid subaction'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subaction->delete($id)) {
			$this->Flash->success(__('The subaction has been deleted.'));
		} else {
			$this->Flash->error(__('The subaction could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
