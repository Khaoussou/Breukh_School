<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index()
    {
        $niveau = Niveau::with("classes")->get();
        return [
            'statusCode' => Response::HTTP_OK,
            'message' => 'Bien !' ,
            'data'   => $niveau
        ];
    }
}
