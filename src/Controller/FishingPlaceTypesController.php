<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * FishingPlaceTypes Controller
 *
 * @property \FishDiary\Model\Table\FishingPlaceTypesTable $FishingPlaceTypes
 */
class FishingPlaceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fishingPlaceTypes = $this->paginate($this->FishingPlaceTypes);

        $this->set(compact('fishingPlaceTypes'));
        $this->set('_serialize', ['fishingPlaceTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Fishing Place Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fishingPlaceType = $this->FishingPlaceTypes->get($id, [
            'contain' => []
        ]);

        $this->set('fishingPlaceType', $fishingPlaceType);
        $this->set('_serialize', ['fishingPlaceType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fishingPlaceType = $this->FishingPlaceTypes->newEntity();
        if ($this->request->is('post')) {
            $fishingPlaceType = $this->FishingPlaceTypes->patchEntity($fishingPlaceType, $this->request->getData());
            if ($this->FishingPlaceTypes->save($fishingPlaceType)) {
                $this->Flash->success(__('The fishing place type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fishing place type could not be saved. Please, try again.'));
        }
        $this->set(compact('fishingPlaceType'));
        $this->set('_serialize', ['fishingPlaceType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fishing Place Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fishingPlaceType = $this->FishingPlaceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fishingPlaceType = $this->FishingPlaceTypes->patchEntity($fishingPlaceType, $this->request->getData());
            if ($this->FishingPlaceTypes->save($fishingPlaceType)) {
                $this->Flash->success(__('The fishing place type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fishing place type could not be saved. Please, try again.'));
        }
        $this->set(compact('fishingPlaceType'));
        $this->set('_serialize', ['fishingPlaceType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fishing Place Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fishingPlaceType = $this->FishingPlaceTypes->get($id);
        if ($this->FishingPlaceTypes->delete($fishingPlaceType)) {
            $this->Flash->success(__('The fishing place type has been deleted.'));
        } else {
            $this->Flash->error(__('The fishing place type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
