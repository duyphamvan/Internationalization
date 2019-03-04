<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 01/03/2019
 * Time: 22:59
 */

namespace App\Http\Repositories\Eloquent;


use App\Blog;
use App\Http\Repositories\BlogRepository;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = Blog::class;
        return $model;
    }
}