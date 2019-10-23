<?php
App::uses('AppController', 'Controller');
/**
 * RolsUsers Controller
 *
 * @property RolsUser $RolsUser
 * @property PaginatorComponent $Paginator
 */
class RolsUsersController extends AppController {

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
		$this->RolsUser->recursive = 0;
		$this->set('rolsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RolsUser->exists($id)) {
			throw new NotFoundException(__('Invalid rols user'));
		}
		$options = array('conditions' => array('RolsUser.' . $this->RolsUser->primaryKey => $id));
		$this->set('rolsUser', $this->RolsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RolsUser->create();
			if ($this->RolsUser->save($this->request->data)) {
				$this->Flash->success(__('The rols user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rols user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RolsUser->exists($id)) {
			throw new NotFoundException(__('Invalid rols user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RolsUser->save($this->request->data)) {
				$this->Flash->success(__('The rols user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The rols user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RolsUser.' . $this->RolsUser->primaryKey => $id));
			$this->request->data = $this->RolsUser->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->RolsUser->exists($id)) {
			throw new NotFoundException(__('Invalid rols user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RolsUser->delete($id)) {
			$this->Flash->success(__('The rols user has been deleted.'));
		} else {
			$this->Flash->error(__('The rols user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
