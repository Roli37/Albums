<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
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
        return view('album_admin.create', [
            "artists" => Artist::all()
        ]);
    }
    public function store(Request $request)
    {
        //validate
        $data = $request->all();
        $fullpath = $data["cover"]->store("images");
        $path = explode('/', $fullpath)[1];
        $data['cover'] = $path;
        Album::create($data);
        return redirect()->route('admin-admin.create')->with('success', 'Album feltöltve');
    }
}
