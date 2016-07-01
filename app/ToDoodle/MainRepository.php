<?php 
 
namespace ToDoodle;

use ToDoodle\MainRepositoryInterface;

abstract class MainRepository implements MainRepositoryInterface
{
	protected $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function all()
	{
		return $this->model->all();
	}

	public function update(array $data, $id)
	{
		return $this->model->where('id', $id)->update($data);
	}

	public function store(array $data)
	{
		return $this->model->create($data);
	}

	public function get($id)
	{
		return $this->model->find($id);
	}

	public function delete($id)
	{
		return $this->model->destroy($id);
	}
}