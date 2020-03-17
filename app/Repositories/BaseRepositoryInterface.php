<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getAllList();
    public function getListById($id);
    public function store($input);
    public function update($id ,$input);
    public function delete($id);
}