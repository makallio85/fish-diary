<?php
namespace FishDiary\Controller;

use FishDiary\Controller\AppController;

/**
 * CaughtFishNotes Controller
 *
 * @property \FishDiary\Model\Table\CaughtFishNotesTable $CaughtFishNotes
 */
class CaughtFishNotesController extends AppController
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
        $caughtFishNotes = $this->paginate($this->CaughtFishNotes);

        $this->set(compact('caughtFishNotes'));
        $this->set('_serialize', ['caughtFishNotes']);
    }

    /**
     * View method
     *
     * @param string|null $id Caught Fish Note id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caughtFishNote = $this->CaughtFishNotes->get($id, [
            'contain' => ['CaughtFish']
        ]);

        $this->set('caughtFishNote', $caughtFishNote);
        $this->set('_serialize', ['caughtFishNote']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caughtFishNote = $this->CaughtFishNotes->newEntity();
        if ($this->request->is('post')) {
            $caughtFishNote = $this->CaughtFishNotes->patchEntity($caughtFishNote, $this->request->getData());
            if ($this->CaughtFishNotes->save($caughtFishNote)) {
                $this->Flash->success(__('The caught fish note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish note could not be saved. Please, try again.'));
        }
        $caughtFish = $this->CaughtFishNotes->CaughtFish->find('list', ['limit' => 200]);
        $this->set(compact('caughtFishNote', 'caughtFish'));
        $this->set('_serialize', ['caughtFishNote']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Caught Fish Note id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caughtFishNote = $this->CaughtFishNotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caughtFishNote = $this->CaughtFishNotes->patchEntity($caughtFishNote, $this->request->getData());
            if ($this->CaughtFishNotes->save($caughtFishNote)) {
                $this->Flash->success(__('The caught fish note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caught fish note could not be saved. Please, try again.'));
        }
        $caughtFish = $this->CaughtFishNotes->CaughtFish->find('list', ['limit' => 200]);
        $this->set(compact('caughtFishNote', 'caughtFish'));
        $this->set('_serialize', ['caughtFishNote']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Caught Fish Note id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caughtFishNote = $this->CaughtFishNotes->get($id);
        if ($this->CaughtFishNotes->delete($caughtFishNote)) {
            $this->Flash->success(__('The caught fish note has been deleted.'));
        } else {
            $this->Flash->error(__('The caught fish note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
