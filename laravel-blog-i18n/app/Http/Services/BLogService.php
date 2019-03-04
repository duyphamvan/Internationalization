<?php
/**
 * Created by PhpStorm.
 * User: duy
 * Date: 01/03/2019
 * Time: 23:03
 */

namespace App\Http\Services;


interface BLogService
{
    public function getAll();
    public function findById($id);
    public function create($data);
    public function update($id, $data);
    public function destroy($id);
}