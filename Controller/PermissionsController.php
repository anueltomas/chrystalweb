<?php
App::uses('AppController', 'Controller');
/**
 * Permissions Controller
 *
 * @property Permission $Permission
 * @property PaginatorComponent $Paginator
 */
class PermissionsController extends AppController {

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
		$this->Permission->recursive = 0;
		$this->set('permissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid permission'));
		}
		$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
		$this->set('permission', $this->Permission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Permission->create();
			if ($this->Permission->save($this->request->data)) {
				$this->Flash->success(__('The permission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The permission could not be saved. Please, try again.'));
			}
		}
		$supervisors = $this->Permission->Supervisor->find('list');
		$actions = $this->Permission->Action->find('list');
		$rols = $this->Permission->Rol->find('list');
		$this->set(compact('supervisors', 'actions', 'rols'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid permission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Permission->save($this->request->data)) {
				$this->Flash->success(__('The permission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The permission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
			$this->request->data = $this->Permission->find('first', $options);
		}
		$supervisors = $this->Permission->Supervisor->find('list');
		$actions = $this->Permission->Action->find('list');
		$rols = $this->Permission->Rol->find('list');
		$this->set(compact('supervisors', 'actions', 'rols'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid permission'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Permission->delete($id)) {
			$this->Flash->success(__('The permission has been deleted.'));
		} else {
			$this->Flash->error(__('The permission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
