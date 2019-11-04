<?php

namespace Kamal\CleanStructure\Repositories\Classes;

use Kamal\CleanStructure\Interfaces\LaravelRepositoryInterface;

class LaravelRepositoryClass implements LaravelRepositoryInterface
{
    protected  $model;

    public function all($conditions = [])
    {
        return $conditions == [] ? $this->model->all() : $this->model->where($conditions)->get();
    }

    public function paginate($per_page = 15, $conditions = [])
    {
        return $conditions == []
            ? $this->model->paginate($per_page)
            : $this->model->where($conditions)->paginate($per_page) ;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function get($id, $conditions = [])
    {
        return $conditions == []
            ? $this->model->firstOrFail($id)
            : $this->model->where($conditions)->firstOrFail($id);
    }

    public function update($id, array $attributes, $conditions = [])
    {
        return $conditions == []
            ? $this->model->firstOrFail($id)->update($attributes)
            : $this->model->where($conditions)->firstOrFail($id)->update($attributes);
    }

    public function delete($id, $conditions = [])
    {
        return $conditions == []
            ? $this->model->findOrFail($id)->delete()
            : $this->model->where($conditions)->findOrFail($id)->delete();
    }
}
