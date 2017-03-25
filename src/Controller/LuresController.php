<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * Lures Controller
 *
 * @property \FishDiary\Model\Table\LuresTable $Lures
 */
class LuresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LureTypes']
        ];
        $lures = $this->paginate($this->Lures);

        $this->set(compact('lures'));
        $this->set('_serialize', ['lures']);
    }

    /**
     * View method
     *
     * @param string|null $id Lure id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lure = $this->Lures->get($id, [
            'contain' => ['LureTypes', 'CaughtFishes' => ['FishTypes']]
        ]);

        $this->set('title', $lure->name);

        $this->set('lure', $lure);
        $this->set('_serialize', ['lure']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', __('Add lure'));
        $lure = $this->Lures->newEntity();
        if ($this->request->is('post')) {
            $lure = $this->Lures->patchEntity($lure, $this->request->getData());
            if ($this->Lures->save($lure)) {
                $this->Flash->success(__('The lure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lure could not be saved. Please, try again.'));
        }
        $lureTypes = $this->Lures->LureTypes->find('list', ['limit' => 200]);
        $this->set(compact('lure', 'lureTypes'));
        $this->set('_serialize', ['lure']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lure id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lure = $this->Lures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lure = $this->Lures->patchEntity($lure, $this->request->getData());
            if ($this->Lures->save($lure)) {
                $this->Flash->success(__('The lure has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lure could not be saved. Please, try again.'));
        }
        $lureTypes = $this->Lures->LureTypes->find('list', ['limit' => 200]);
        $this->set(compact('lure', 'lureTypes'));
        $this->set('_serialize', ['lure']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lure id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lure = $this->Lures->get($id);
        if ($this->Lures->delete($lure)) {
            $this->Flash->success(__('The lure has been deleted.'));
        } else {
            $this->Flash->error(__('The lure could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
