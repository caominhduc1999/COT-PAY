<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function list()
    {
        return $this->model->all();
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function store($input)
    {
        return $this->model->create($input);

    }

    public function update($id ,$input)
    {
        $result = $this->model->find($id);
        if ($result) {
            $result->update($input);
            return $result;
        }
        return false;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

} 
