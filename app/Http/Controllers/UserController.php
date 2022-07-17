<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user =  User::find($id);
        if(!$user == Auth::user()->id){
            return redirect()->route('users.index');
        }
        return view('users.show', compact('user'));
    }

    public function create( )
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        if(!$request->avatar){
            $data['avatar'] = 'profile/avatar.png';
        }else{
            $file = $request['avatar'];
            $path = $file->store('profile','public');
            $data['avatar'] = $path;
        }
        $this->model->create($data);
        return redirect()->route('index')->with('create', 'Usuario criado com sucesso');
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $data = $request->all();
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }
        if($request->avatar){
            Storage::delete('public/'.$user['avatar']);
            $file = $request['avatar'];
            $path = $file->store('profile','public');
            $data['avatar'] = $path;
        }
        if($request->password)
            $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect()->route('users.show', ['id' => $id])->with('edit', 'Usuario atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $user->delete();
        if($user['avatar'] !== 'profile/avatar.png')
            Storage::delete('public/'.$user['avatar']);

        return redirect()->route('users.index')->with('destroy', 'Usuario removido com sucesso');;
    }

}

