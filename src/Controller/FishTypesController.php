<?php
namespace FishDiary\Controller;

use Cake\Utility\Inflector;
use FishDiary\Controller\AppController;

/**
 * FishTypes Controller
 *
 * @property \FishDiary\Model\Table\FishTypesTable $FishTypes
 */
class FishTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->set('title', __('Fish types'));
        $fishTypes = $this->paginate($this->FishTypes);

        $this->set(compact('fishTypes'));
        $this->set('_serialize', ['fishTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Fish Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fishType = $this->FishTypes->get($id, [
            'contain' => ['CaughtFishes' => ['FishingPlaces']]
        ]);
        $this->set('title', Inflector::pluralize($fishType->name));

        $this->set('fishType', $fishType);
        $this->set('_serialize', ['fishType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('title', __('Add fish type'));
        $fishType = $this->FishTypes->newEntity();
        if ($this->request->is('post')) {
            $fishType = $this->FishTypes->patchEntity($fishType, $this->request->getData());
            if ($this->FishTypes->save($fishType)) {
                $this->Flash->success(__('The fish type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fish type could not be saved. Please, try again.'));
        }
        $this->set(compact('fishType'));
        $this->set('_serialize', ['fishType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fish Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fishType = $this->FishTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fishType = $this->FishTypes->patchEntity($fishType, $this->request->getData());
            if ($this->FishTypes->save($fishType)) {
                $this->Flash->success(__('The fish type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fish type could not be saved. Please, try again.'));
        }
        $this->set(compact('fishType'));
        $this->set('_serialize', ['fishType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fish Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fishType = $this->FishTypes->get($id);
        if ($this->FishTypes->delete($fishType)) {
            $this->Flash->success(__('The fish type has been deleted.'));
        } else {
            $this->Flash->error(__('The fish type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
