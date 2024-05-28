<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        Dog::create($request->all());

        return $this->index();
    }

    public function show($id)
    {
        return Dog::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $New_Dog = Dog::findOrFail($id);

        $New_Dog->update($request->all());

        return $this->show($id);
    }

    public function destroy($id)
    {
        $Dog = Dog::findOrFail($id);

        $Dog->delete();

        return $this->index();
    }
}
