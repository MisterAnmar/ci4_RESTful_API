<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class News extends ResourceController
{
    protected $modelName = 'App\Models\NewsModel';
    protected $format    = 'json';
    // Handles GET Request (news)
    public function index()
    {
			return $this->respond($this->model
                              ->orderBy('created_at', 'asc')
                              ->findAll());
    }
    // Handles GET Request (news/new)
    public function new()
    {
      return $this->respond($this->model
                              ->orderBy('created_at', 'asc')
                              ->findAll(3));
    }
    // Handles GET Request (news/(:num) OR (:segment))
    public function show($id = null)
    {
      return $this->respond($this->model->find($id));
    }
    // Handles POST Request (news)
    public function create()
    {
      $saveData = $this->request->getPost();
      return $this->respond($this->model->insert($saveData));
    }
    // Handles GET Request (news/(:segment/edit))
    public function edit($id = null)
    {
      return $this->respond($this->model->find($id));
    }
    // Handles PUT Request (news/(:segment))
    // Handles PATCH Request (news/(:segment))
    public function update($id = null)
    {
      $updateData = $this->request->getRawInput();
      return $this->respond($this->model->update($id, $updateData));
    }
    // Handles DELETE Request (news/(:segment))
    public function delete($id = null)
    {
      $deleteData = $this->request->getRawInput();
      return $this->respond($this->model->delete($deleteData));
    }

}
