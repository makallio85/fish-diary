<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * FishingPlaces Controller
 *
 * @property \FishDiary\Model\Table\FishingPlacesTable $FishingPlaces
 */
class FishingPlacesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fishingPlaces = $this->paginate($this->FishingPlaces);

        $this->set(compact('fishingPlaces'));
        $this->set('_serialize', ['fishingPlaces']);
    }

    /**
     * View method
     *
     * @param string|null $id Fishing Place id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fishingPlace = $this->FishingPlaces->get($id, [
            'contain' => ['CaughtFishes']
        ]);

        $this->set('fishingPlace', $fishingPlace);
        $this->set('_serialize', ['fishingPlace']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fishingPlace = $this->FishingPlaces->newEntity();
        if ($this->request->is('post')) {
            $fishingPlace = $this->FishingPlaces->patchEntity($fishingPlace, $this->request->getData());
            if ($this->FishingPlaces->save($fishingPlace)) {
                $this->Flash->success(__('The fishing place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fishing place could not be saved. Please, try again.'));
        }
        $this->set(compact('fishingPlace'));
        $this->set('_serialize', ['fishingPlace']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fishing Place id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fishingPlace = $this->FishingPlaces->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fishingPlace = $this->FishingPlaces->patchEntity($fishingPlace, $this->request->getData());
            if ($this->FishingPlaces->save($fishingPlace)) {
                $this->Flash->success(__('The fishing place has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fishing place could not be saved. Please, try again.'));
        }
        $this->set(compact('fishingPlace'));
        $this->set('_serialize', ['fishingPlace']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fishing Place id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fishingPlace = $this->FishingPlaces->get($id);
        if ($this->FishingPlaces->delete($fishingPlace)) {
            $this->Flash->success(__('The fishing place has been deleted.'));
        } else {
            $this->Flash->error(__('The fishing place could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
