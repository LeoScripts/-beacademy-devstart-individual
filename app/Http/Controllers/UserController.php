<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        return view('users.index');
    }

    public function create( )
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if($request->image){
            $file = $request['avatar'];
            $path = $file->store('profile','public');
            $data['image'] = $path;
        }


        $this->model->create($data);

        return redirect()->route('users.create');
    }
}
