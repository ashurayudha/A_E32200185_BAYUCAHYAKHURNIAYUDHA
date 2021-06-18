<?php

/*namespace App\Http\Controllers\Backend;

use App\Pendidikan;
use Illuminate\Http\Request;
    App\Http\Controllers\Controller;
use Illuminate\Support\Facedes\Response;

class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan,201);
    }
}
