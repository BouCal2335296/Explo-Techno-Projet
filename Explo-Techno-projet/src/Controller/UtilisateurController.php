<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Utility\Text;
use Cake\Http\Session;

/**
 * Utilisateur Controller
 *
 * @property \App\Model\Table\UtilisateurTable $Utilisateur
 */
class UtilisateurController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // Récupérer les utilisateurs avec la pagination
        $query = $this->Utilisateur->find();
        $utilisateur = $this->paginate($query);

        // Parcourir chaque utilisateur pour vérifier et traiter le mot de passe
        foreach ($utilisateur as $user) {
            if ($user->mdp !== null) {

                // Vérifier si c'est une ressource (par exemple, un champ binaire)
                if (is_resource($user->mdp)) {
                    // Si c'est une ressource, lire son contenu
                    $user->mdp = stream_get_contents($user->mdp);
                }
            }
        }

        // Passer les utilisateur à la vue
        $this->set(compact('utilisateur'));
    }


    /**
     * View method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $utilisateur = $this->Utilisateur->get($id);

        // Vérifier le type de la donnée de mot de passe
        if (is_resource($utilisateur->mdp)) {
            // Si c'est une ressource, lisez la ressource pour obtenir le contenu
            $utilisateur->mdp = stream_get_contents($utilisateur->mdp);
        }

        // Convertir la donnée binaire (si nécessaire)
        if (!is_string($utilisateur->mdp)) {
            $utilisateur->mdp = bin2hex($utilisateur->mdp);
        }

        $this->set(compact('utilisateur'));
    }

    public function inscription()
    {
        $utilisateur = $this->Utilisateur->newEmptyEntity();

        if ($this->request->is('post')) {
            // Récupérer le mot de passe depuis le formulaire
            $utilisateur = $this->Utilisateur->patchEntity($utilisateur, $this->request->getData());
            $motDePasse = $this->request->getData('mdp'); // Assurez-vous que le champ du mot de passe s'appelle 'mdp' dans le formulaire

            // Générer un sel aléatoire
            $sel = bin2hex(random_bytes(6)); 

            // Hacher le mot de passe avec le sel
            $motDePasseHache = password_hash($motDePasse, PASSWORD_BCRYPT);  // Le sel est ajouté au mot de passe avant de le hacher

            // Assigner le mot de passe haché et le sel à l'entité
            $utilisateur->mdp = $motDePasseHache;
            $utilisateur->sel = $sel; // Stocker le sel dans la base de données

            // Sauvegarder l'utilisateur avec le mot de passe haché et le sel
            if ($this->Utilisateur->save($utilisateur)) {
                //autoLogin($utilisateur);
                $this->Flash->success(__('Utilisateur ajouté avec succès.'));
                return $this->redirect(['controller' => 'Utilisateur', 'action' => 'connexion']);
            }
            $this->Flash->error(__('Impossible d\'ajouter l\'utilisateur.'));
        }

        $this->set(compact('utilisateur'));
    }
    
    public function connexion()
    {
       $utilisateur = $this->Utilisateur->newEmptyEntity();
       
       if ($this->request->is('post')) {
           $utilisateur = $this->Utilisateur->findByCourriel($this->request->getData('courriel'))->first();
       
           if ($utilisateur) {
                // Récupérer le mot de passe soumis
                $motDePasseForm = $this->request->getData('mdp'); // Mot de passe saisi par l'utilisateur
                $mdpBd = $utilisateur->mdp;
               
                // Vérifier si le mot de passe saisi correspond au hachage stocké en base de données
                if (password_verify($motDePasseForm, $mdpBd)) {
                    // Si la vérification réussit, connecter l'utilisateur
                    $this->request->getSession()->write('User.id', $utilisateur->noUtilisateur);
                    $this->request->getSession()->write('User.nom', $utilisateur->nomUtilisateur);
                    $this->request->getSession()->write('User.prenom', $utilisateur->prenomUtilisateur);

                    return $this->redirect(['controller' => 'Accueil', 'action' => 'index']);
                } else 
                {
                    // Si la vérification échoue
                    $this->Flash->error(__('Identifiants incorrects.'));
                }
            } else {
                $this->Flash->error(__('Utilisateur non trouvé.'));
            }
        }
        $this->set(compact('utilisateur'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $utilisateur = $this->Utilisateur->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $utilisateur = $this->Utilisateur->patchEntity($utilisateur, $this->request->getData());
            if ($this->Utilisateur->save($utilisateur)) {
                $this->Flash->success(__('The utilisateur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The utilisateur could not be saved. Please, try again.'));
        }
        $this->set(compact('utilisateur'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Utilisateur id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $utilisateur = $this->Utilisateur->get($id);
        if ($this->Utilisateur->delete($utilisateur)) {
            $this->Flash->success(__('The utilisateur has been deleted.'));
        } else {
            $this->Flash->error(__('The utilisateur could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
