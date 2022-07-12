<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;

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

    public function store(StoreUpdateUserFormRequest $request)
    {
        // dd($request->all());

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if($request->avatar){
            $file = $request['avatar'];
            $path = $file->store('profile','public');
            $data['avatar'] = $path;
        }


        $this->model->create($data);

        return redirect()->route('users.create');
    }
}
