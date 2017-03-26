<?php
namespace FishDiary\Controller;

/**
 * CaughtFishPhotos Controller
 *
 * @property \FishDiary\Model\Table\CaughtFishPhotosTable $CaughtFishPhotos
 */
class CaughtFishPhotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CaughtFish']
        ];
        $caughtFishPhotos = $this->paginate($this->CaughtFishPhotos);

        $this->set(compact('caughtFishPhotos'));
        $this->set('_serialize', ['caughtFishPhotos']);
    }


    /**
     * View method
     *
     * @param string|null $id Caught Fish Photo id.
     *
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caughtFishPhoto = $this->CaughtFishPhotos->get($id, [
            'contain' => ['CaughtFishes']
        ]);
        $this->response->type('jpg');

        return $this->response->withFile(
            WWW_ROOT . 'img' . DS . 'caught-fishes' . DS . $caughtFishPhoto->get('photo'),
            ['download' => false, 'name' => $caughtFishPhoto->get('photo')]
        );
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caughtFishPhoto = $this->CaughtFishPhotos->newEntity();
        if ($this->request->is('post')) {
            $caughtFishPhoto = $this->CaughtFishPhotos->patchEntity($caughtFishPhoto, $this->request->getData());
            if ($this->CaughtFishPhotos->save($caughtFishPhoto)) {
                $this->Flash->success(__('The caught fish photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish photo could not be saved. Please, try again.'));
        }
        $caughtFish = $this->CaughtFishPhotos->CaughtFish->find('list', ['limit' => 200]);
        $this->set(compact('caughtFishPhoto', 'caughtFish'));
        $this->set('_serialize', ['caughtFishPhoto']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Caught Fish Photo id.
     *
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caughtFishPhoto = $this->CaughtFishPhotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caughtFishPhoto = $this->CaughtFishPhotos->patchEntity($caughtFishPhoto, $this->request->getData());
            if ($this->CaughtFishPhotos->save($caughtFishPhoto)) {
                $this->Flash->success(__('The caught fish photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish photo could not be saved. Please, try again.'));
        }
        $caughtFish = $this->CaughtFishPhotos->CaughtFish->find('list', ['limit' => 200]);
        $this->set(compact('caughtFishPhoto', 'caughtFish'));
        $this->set('_serialize', ['caughtFishPhoto']);
    }


    /**
     * Delete method
     *
     * @param string|null $id Caught Fish Photo id.
     *
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caughtFishPhoto = $this->CaughtFishPhotos->get($id);
        if ($this->CaughtFishPhotos->delete($caughtFishPhoto)) {
            $this->Flash->success(__('The caught fish photo has been deleted.'));
        } else {
            $this->Flash->error(__('The caught fish photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
