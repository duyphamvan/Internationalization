<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 01/03/2019
 * Time: 22:46
 */

namespace App\Http\Repositories\Eloquent;


use App\Blog;
use App\Http\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $result = $this->model->all();
        return $result;

    }

    public function create($data)
    {
        return  $data->save();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $result = $this->model->find($id);
        return $result;

    }

    public function update($obj)
    {
       return $obj->save();
    }

    public function destroy($object)
    {
        $object->delete();
    }

}