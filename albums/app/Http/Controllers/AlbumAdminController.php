<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumAdminController extends Controller
{
    public function index()
    {
        return view('album_admin.view', [
            "albums" => Album::all()
        ]);
    }
    public function create()
    {
        return view('album_admin.create');
    }
    public function store(Request $request)
    {
        //validate
        $data = $request;
        Album::create($data);
    }
}
