<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateProfileUserRequest;

class UserController extends Controller
{

    private $user;


    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function registring(RegisterUserRequest $request)
    {
        //Recuper todos os dados do formulário
        $dataForm = $request->all();
        //criptografa a senha 
        $password = $dataForm['password'];
        $dataForm['password'] = bcrypt($dataForm['password']);
        //Cadastra o usuario
        $insert = $this->user->create($dataForm);
        //Verifica se cadastrou com sucesso
        if ($insert) {
            if (Auth::attempt(['email' => $dataForm['email'], 'password' => $password]))
                return redirect()->route('profile');
            else
                return redirect('/login');
        } else {
            return redirect()->back()->with(['errors' => 'Falha ao cadastrar']);
        }
    }

    public function profile()
    {
        $title = "Meu Perfil";

        return view('loja.user.profile', compact('title'));
    }


    public function profileUpdate(UpdateProfileUserRequest $request)
    {

        $dataForm = $request->all();

        $user = $this->user->find(auth()->user()->id);

        if ($dataForm['password'] != '')
            $dataForm['password'] = bcrypt($dataForm['password']);
        else

            unset($dataForm['password']);

        $update = $user->update($dataForm);


        //verifica se atualizao correto
        if ($update)
            return redirect()->back()->with(['success' => 'Perfil Atualizado']);
        else
            return redirect()->back()->with(['errors' => 'Falha ao editar']);
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }

    public function register()
    {
        return view('loja.user.register');
    }
}
