<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * LureTypes Controller
 *
 * @property \FishDiary\Model\Table\LureTypesTable $LureTypes
 */
class LureTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $lureTypes = $this->paginate($this->LureTypes);

        $this->set(compact('lureTypes'));
        $this->set('_serialize', ['lureTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Lure Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lureType = $this->LureTypes->get($id, [
            'contain' => ['Lures']
        ]);

        $this->set('lureType', $lureType);
        $this->set('_serialize', ['lureType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lureType = $this->LureTypes->newEntity();
        if ($this->request->is('post')) {
            $lureType = $this->LureTypes->patchEntity($lureType, $this->request->getData());
            if ($this->LureTypes->save($lureType)) {
                $this->Flash->success(__('The lure type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lure type could not be saved. Please, try again.'));
        }
        $this->set(compact('lureType'));
        $this->set('_serialize', ['lureType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lure Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lureType = $this->LureTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lureType = $this->LureTypes->patchEntity($lureType, $this->request->getData());
            if ($this->LureTypes->save($lureType)) {
                $this->Flash->success(__('The lure type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lure type could not be saved. Please, try again.'));
        }
        $this->set(compact('lureType'));
        $this->set('_serialize', ['lureType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lure Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lureType = $this->LureTypes->get($id);
        if ($this->LureTypes->delete($lureType)) {
            $this->Flash->success(__('The lure type has been deleted.'));
        } else {
            $this->Flash->error(__('The lure type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
