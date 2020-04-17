<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vessels Controller
 *
 * @property \App\Model\Table\VesselsTable $Vessels
 *
 * @method \App\Model\Entity\Vessel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VesselsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $vessels = $this->paginate($this->Vessels);

        $this->set(compact('vessels'));
    }

    /**
     * View method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vessel = $this->Vessels->get($id, [
            'contain' => ['Statuses', 'Types'],
        ]);

        $this->set('vessel', $vessel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vessel = $this->Vessels->newEntity();
        if ($this->request->is('post')) {
            $vessel = $this->Vessels->patchEntity($vessel, $this->request->getData());
            if ($this->Vessels->save($vessel)) {
                $this->Flash->success(__('The vessel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vessel could not be saved. Please, try again.'));
        }
        $statuses = $this->Vessels->Statuses->find('list', ['limit' => 200]);
        $types = $this->Vessels->Types->find('list', ['limit' => 200]);
        $this->set(compact('vessel', 'statuses', 'types'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vessel = $this->Vessels->get($id, [
            'contain' => ['Statuses', 'Types'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vessel = $this->Vessels->patchEntity($vessel, $this->request->getData());
            if ($this->Vessels->save($vessel)) {
                $this->Flash->success(__('The vessel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vessel could not be saved. Please, try again.'));
        }
        $statuses = $this->Vessels->Statuses->find('list', ['limit' => 200]);
        $types = $this->Vessels->Types->find('list', ['limit' => 200]);
        $this->set(compact('vessel', 'statuses', 'types'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vessel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vessel = $this->Vessels->get($id);
        if ($this->Vessels->delete($vessel)) {
            $this->Flash->success(__('The vessel has been deleted.'));
        } else {
            $this->Flash->error(__('The vessel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
