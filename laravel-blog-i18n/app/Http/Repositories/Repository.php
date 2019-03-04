<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 01/03/2019
 * Time: 22:33
 */

namespace App\Http\Repositories;


use Illuminate\Http\Request;

interface Repository
{
    public function getAll();
    public function create($data);
    public function findById($id);
    public function update($obj);
    public function destroy($id);
}