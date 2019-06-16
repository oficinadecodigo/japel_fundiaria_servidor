<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class UsuarioController.
 *
 * @author  The scaffold-interface created at 2019-06-16 04:47:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - usuario';
        $usuarios = Usuario::paginate(6);
        return view('usuario.index',compact('usuarios','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - usuario';
        
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        
        $usuario->nome = $request->nome;

        
        $usuario->cpf = $request->cpf;

        
        $usuario->email = $request->email;

        
        $usuario->login = $request->login;

        
        $usuario->senha = $request->senha;

        
        $usuario->administrador = $request->administrador;

        
        
        $usuario->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new usuario has been created !!']);

        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - usuario';

        if($request->ajax())
        {
            return URL::to('usuario/'.$id);
        }

        $usuario = Usuario::findOrfail($id);
        return view('usuario.show',compact('title','usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - usuario';
        if($request->ajax())
        {
            return URL::to('usuario/'. $id . '/edit');
        }

        
        $usuario = Usuario::findOrfail($id);
        return view('usuario.edit',compact('title','usuario'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $usuario = Usuario::findOrfail($id);
    	
        $usuario->nome = $request->nome;
        
        $usuario->cpf = $request->cpf;
        
        $usuario->email = $request->email;
        
        $usuario->login = $request->login;
        
        $usuario->senha = $request->senha;
        
        $usuario->administrador = $request->administrador;
        
        
        $usuario->save();

        return redirect('usuario');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/usuario/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$usuario = Usuario::findOrfail($id);
     	$usuario->delete();
        return URL::to('usuario');
    }
}
