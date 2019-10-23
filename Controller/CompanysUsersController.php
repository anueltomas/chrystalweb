<?php
App::uses('AppController', 'Controller');
/**
 * CompanysUsers Controller
 *
 * @property CompanysUser $CompanysUser
 * @property PaginatorComponent $Paginator
 */
class CompanysUsersController extends AppController {

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
		$this->CompanysUser->recursive = 0;
		$this->set('companysUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanysUser->exists($id)) {
			throw new NotFoundException(__('Invalid companys user'));
		}
		$options = array('conditions' => array('CompanysUser.' . $this->CompanysUser->primaryKey => $id));
		$this->set('companysUser', $this->CompanysUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanysUser->create();
			if ($this->CompanysUser->save($this->request->data)) {
				$this->Flash->success(__('The companys user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The companys user could not be saved. Please, try again.'));
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
		if (!$this->CompanysUser->exists($id)) {
			throw new NotFoundException(__('Invalid companys user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanysUser->save($this->request->data)) {
				$this->Flash->success(__('The companys user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The companys user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanysUser.' . $this->CompanysUser->primaryKey => $id));
			$this->request->data = $this->CompanysUser->find('first', $options);
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
		if (!$this->CompanysUser->exists($id)) {
			throw new NotFoundException(__('Invalid companys user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CompanysUser->delete($id)) {
			$this->Flash->success(__('The companys user has been deleted.'));
		} else {
			$this->Flash->error(__('The companys user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
