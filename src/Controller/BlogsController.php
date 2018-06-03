<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $blog['new'] = $this->Blogs->find()->order(['created' => 'DESC'])->limit(5);
        $blog['khuyenmai'] = $this->Blogs->find()->where(['category_id' => 1])->order(['created' => 'DESC'])->limit(5);
        $blog['topviewers'] = $this->Blogs->find()->order(['viewers' => 'DESC'])->limit(5);

        $this->set([
            'blogs' => $blog
        ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($type = 0)
    {
        $this->viewBuilder()->layout('homepage');
        $this->paginate = [
            'contain' => ['Categories','Comments'],
            'limit' => 15
        ];

        $query = $this->Blogs->find()->order(['created' => 'DESC']);

        if($type == 1) $query->where(['category_id' => 1]);
        if($type == 2) $query->order(['viewers' => 'DESC']);
        if($type > 2) $type = 0;

        $blogList = $this->paginate($query);

        $this->set(compact(['blogList','type']));
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('homepage');
        $blog = $this->Blogs->get($id);


        $this->set('single_blog', $blog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blog = $this->Blogs->newEntity();
        if ($this->request->is('post')) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $categories = $this->Blogs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('blog', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The blog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog could not be saved. Please, try again.'));
        }
        $categories = $this->Blogs->Categories->find('list', ['limit' => 200]);
        $this->set(compact('blog', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The blog has been deleted.'));
        } else {
            $this->Flash->error(__('The blog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
