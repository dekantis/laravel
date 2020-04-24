<?php

namespace App\Http\Repositories;

use App\Models\City;

/**
 * Class CityRepository.
 */
class CityCityRepository implements CityRepositoryInterface
{
    public function findById($id)
    {
        return City::find($id);
    }

    public function all()
    {
        return City::all();
    }

    public function delete($id)
    {
        City::destroy($id);
    }

    public function update($id, array $data)
    {
        City::find($id)->update($data);
    }
}
