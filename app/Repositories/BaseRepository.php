<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function getModel()
    {
        return app()->make($this->model);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->model->find($id);

        if ($model) {
            return $model->update($data);
        }

        return false;
    }

    public function delete($id)
    {
        $model = $this->model->find($id);

        if ($model) {
            return $model->delete();
        }

        return false;
    }

    public function findBy($column, $value)
    {
        return $this->model->where($column, $value)->first();
    }

    public function paginate($perPage = 15)
    {
        return $this->model->paginate($perPage);
    }

    public function query()
    {
        return $this->model;
    }
}
