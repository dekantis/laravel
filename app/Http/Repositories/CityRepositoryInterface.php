<?php


namespace App\Http\Repositories;


interface CityRepositoryInterface
{
    public function findById($id);
    public function all();
    public function delete($id);
    public function update($id, array $data);

}
