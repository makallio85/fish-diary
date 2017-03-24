<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * WeatherTypes Controller
 *
 * @property \FishDiary\Model\Table\WeatherTypesTable $WeatherTypes
 */
class WeatherTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $weatherTypes = $this->paginate($this->WeatherTypes);

        $this->set(compact('weatherTypes'));
        $this->set('_serialize', ['weatherTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Weather Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weatherType = $this->WeatherTypes->get($id, [
            'contain' => ['CaughtFishes']
        ]);

        $this->set('weatherType', $weatherType);
        $this->set('_serialize', ['weatherType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weatherType = $this->WeatherTypes->newEntity();
        if ($this->request->is('post')) {
            $weatherType = $this->WeatherTypes->patchEntity($weatherType, $this->request->getData());
            if ($this->WeatherTypes->save($weatherType)) {
                $this->Flash->success(__('The weather type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weather type could not be saved. Please, try again.'));
        }
        $this->set(compact('weatherType'));
        $this->set('_serialize', ['weatherType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Weather Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weatherType = $this->WeatherTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weatherType = $this->WeatherTypes->patchEntity($weatherType, $this->request->getData());
            if ($this->WeatherTypes->save($weatherType)) {
                $this->Flash->success(__('The weather type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The weather type could not be saved. Please, try again.'));
        }
        $this->set(compact('weatherType'));
        $this->set('_serialize', ['weatherType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Weather Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weatherType = $this->WeatherTypes->get($id);
        if ($this->WeatherTypes->delete($weatherType)) {
            $this->Flash->success(__('The weather type has been deleted.'));
        } else {
            $this->Flash->error(__('The weather type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
