<?php
declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $users = $this->Users->get($id, [
            'contain' => ['Produits'],
        ]);
        $this->set(compact('users'));
    }

    public function add()
    {
        $users = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $users = $this->Users->patchEntity($users, $this->request->getData());
            if ($this->Users->save($users)) {
                $this->Flash->success(__('L\'utilisateur a été ajouté avec succès.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible d\'ajouter l\'utilisateur. Veuillez réessayer.'));
        }

        $this->set(compact('users'));
    }

    public function edit($id = null)
    {
        $users = $this->Users->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $users = $this->Users->patchEntity($users, $this->request->getData());
            if ($this->Users->save($users)) {
                $this->Flash->success(__('Les modifications de l\'utilisateur ont été sauvegardées.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvegarder les modifications. Veuillez réessayer.'));
        }

        $this->set(compact('users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $users = $this->Users->get($id);

        if ($this->Users->delete($users)) {
            $this->Flash->success(__('L\'utilisateur a été supprimé avec succès.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer l\'utilisateur. Veuillez réessayer.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
