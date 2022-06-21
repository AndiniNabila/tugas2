<?php

namespace App\Controllers;

use App\Core\Controller;

class Users extends Controller
{
    protected object $model;

    public function __construct() {
        $this->model = new \App\Models\Users();
    }

	public function index()
	{
		$data['rows'] = $this->model->all();
		$this->home('users/index', $data);

	}

	public function create()
	{
		$this->home('users/create');
	}

	public function store()
	{
		$this->model->store();
		header('location:' .  URL . '/users/index');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);	
		$this->home('users/edit', $data);
	}	

	public function update()
	{
		$this->model->update();
		header('location:' .  URL . '/users/index');
	}

	public function delete($id)
	{
		$this->model->delete($id);	
		header('location:' .  URL . '/users/index');
	}	


}
