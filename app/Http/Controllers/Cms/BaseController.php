<?php


namespace App\Http\Controllers\Cms;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

abstract class BaseController extends Controller
{
    public function index(Model $model)
    {
        $model::all();
        return view('cities.index', compact('cities'));
    }
}
