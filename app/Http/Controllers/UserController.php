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
        return view('index');
    }

    public function create( )
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
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

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->only('name','email');
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect("/users/{$id}/edit");
    }
}
