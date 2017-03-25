<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * CaughtFishes Controller
 *
 * @property \FishDiary\Model\Table\CaughtFishesTable $CaughtFishes
 */
class CaughtFishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FishTypes', 'FishingPlaces', 'Lures', 'WeatherTypes']
        ];
        $caughtFishes = $this->paginate($this->CaughtFishes);

        $this->set(compact('caughtFishes'));
        $this->set('_serialize', ['caughtFishes']);
    }


    /**
     * View method
     *
     * @param string|null $id Caught Fish id.
     *
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caughtFish = $this->CaughtFishes->get($id, [
            'contain' => ['FishTypes', 'FishingPlaces', 'Lures', 'WeatherTypes', 'CaughtFishNotes', 'CaughtFishPhotos']
        ]);

        $this->set('caughtFish', $caughtFish);
        $this->set('_serialize', ['caughtFish']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caughtFish = $this->CaughtFishes->newEntity();
        if ($this->request->is('post')) {
            $caughtFish = $this->CaughtFishes->patchEntity($caughtFish, $this->request->getData());
            if ($this->CaughtFishes->save($caughtFish)) {
                $this->Flash->success(__('The caught fish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish could not be saved. Please, try again.'));
        }
        $fishTypes = $this->CaughtFishes->FishTypes->find('list', ['limit' => 200]);
        $fishingPlaces = $this->CaughtFishes->FishingPlaces->find('list', ['limit' => 200]);
        $lures = $this->CaughtFishes->Lures->find('list', ['limit' => 200]);
        $weatherTypes = $this->CaughtFishes->WeatherTypes->find('list', ['limit' => 200]);
        $this->set(compact('caughtFish', 'fishTypes', 'fishingPlaces', 'lures', 'weatherTypes'));
        $this->set('_serialize', ['caughtFish']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Caught Fish id.
     *
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caughtFish = $this->CaughtFishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caughtFish = $this->CaughtFishes->patchEntity($caughtFish, $this->request->getData());
            if ($this->CaughtFishes->save($caughtFish)) {
                $this->Flash->success(__('The caught fish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish could not be saved. Please, try again.'));
        }
        $fishTypes = $this->CaughtFishes->FishTypes->find('list', ['limit' => 200]);
        $fishingPlaces = $this->CaughtFishes->FishingPlaces->find('list', ['limit' => 200]);
        $lures = $this->CaughtFishes->Lures->find('list', ['limit' => 200]);
        $weatherTypes = $this->CaughtFishes->WeatherTypes->find('list', ['limit' => 200]);
        $this->set(compact('caughtFish', 'fishTypes', 'fishingPlaces', 'lures', 'weatherTypes'));
        $this->set('_serialize', ['caughtFish']);
    }


    /**
     * Delete method
     *
     * @param string|null $id Caught Fish id.
     *
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caughtFish = $this->CaughtFishes->get($id);
        if ($this->CaughtFishes->delete($caughtFish)) {
            $this->Flash->success(__('The caught fish has been deleted.'));
        } else {
            $this->Flash->error(__('The caught fish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
