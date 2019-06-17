<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moradium;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Pessoa;


use App\Usuario;


/**
 * Class MoradiumController.
 *
 * @author  The scaffold-interface created at 2019-06-17 01:50:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MoradiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - moradium';
        $moradias = Moradium::paginate(6);
        return view('moradium.index',compact('moradias','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - moradium';
        
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        $usuarios = Usuario::all()->pluck('nome','id');
        
        return view('moradium.create',compact('title','pessoas' , 'usuarios'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $moradium = new Moradium();

        
        $moradium->quadra = $request->quadra;

        
        $moradium->lote = $request->lote;

        
        $moradium->poligonal = $request->poligonal;

        
        $moradium->endereco = $request->endereco;

        
        $moradium->numero = $request->numero;

        
        $moradium->complemento = $request->complemento;

        
        $moradium->cep = $request->cep;

        
        $moradium->bairro = $request->bairro;

        
        $moradium->cidade = $request->cidade;

        
        $moradium->uf = $request->uf;

        
        $moradium->area_construida = $request->area_construida;

        
        $moradium->matricula_imovel = $request->matricula_imovel;

        
        $moradium->medida_frente = $request->medida_frente;

        
        $moradium->medida_direita = $request->medida_direita;

        
        $moradium->medida_esquerda = $request->medida_esquerda;

        
        $moradium->medida_fundo = $request->medida_fundo;

        
        $moradium->numero_lote_fundo = $request->numero_lote_fundo;

        
        $moradium->numero_lote_direito = $request->numero_lote_direito;

        
        $moradium->numero_lote_esquerdo = $request->numero_lote_esquerdo;

        
        $moradium->rua_frente = $request->rua_frente;

        
        $moradium->rua_direita = $request->rua_direita;

        
        $moradium->rua_esquerda = $request->rua_esquerda;

        
        $moradium->rua_fundo = $request->rua_fundo;

        
        $moradium->selagem = $request->selagem;

        
        $moradium->latitude = $request->latitude;

        
        $moradium->longitude = $request->longitude;

        
        $moradium->altitude = $request->altitude;

        
        $moradium->zona = $request->zona;

        
        $moradium->situacao_propriedade = $request->situacao_propriedade;

        
        $moradium->valor_aluguel = $request->valor_aluguel;

        
        $moradium->numero_quartos = $request->numero_quartos;

        
        $moradium->numero_comodos = $request->numero_comodos;

        
        $moradium->tipo_construcao = $request->tipo_construcao;

        
        $moradium->outro_tipo_construcao = $request->outro_tipo_construcao;

        
        $moradium->fonte_energia = $request->fonte_energia;

        
        $moradium->abastecimento_agua = $request->abastecimento_agua;

        
        $moradium->rede_esgoto = $request->rede_esgoto;

        
        $moradium->coleta_lixo = $request->coleta_lixo;

        
        $moradium->separacao_reciclaveis = $request->separacao_reciclaveis;

        
        $moradium->valor_beneficiario_prestacao_continuada = $request->valor_beneficiario_prestacao_continuada;

        
        $moradium->valor_bolsa_familia = $request->valor_bolsa_familia;

        
        $moradium->outro_beneficio = $request->outro_beneficio;

        
        $moradium->area_risco = $request->area_risco;

        
        $moradium->insalubre = $request->insalubre;

        
        $moradium->desabrigado = $request->desabrigado;

        
        $moradium->observacao = $request->observacao;

        
        $moradium->foto_comprovante_visita = $request->foto_comprovante_visita;

        
        $moradium->foto_fachada = $request->foto_fachada;

        
        $moradium->foto_comprovante_agua = $request->foto_comprovante_agua;

        
        $moradium->foto_comprovante_luz = $request->foto_comprovante_luz;

        
        $moradium->foto_comprovante_iptu = $request->foto_comprovante_iptu;

        
        $moradium->foto_documento_cartografico = $request->foto_documento_cartografico;

        
        
        $moradium->pessoa_id = $request->pessoa_id;

        
        $moradium->usuario_id = $request->usuario_id;

        
        $moradium->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new moradium has been created !!']);

        return redirect('moradium');
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
        $title = 'Show - moradium';

        if($request->ajax())
        {
            return URL::to('moradium/'.$id);
        }

        $moradium = Moradium::findOrfail($id);
        return view('moradium.show',compact('title','moradium'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - moradium';
        if($request->ajax())
        {
            return URL::to('moradium/'. $id . '/edit');
        }

        
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $usuarios = Usuario::all()->pluck('nome','id');

        
        $moradium = Moradium::findOrfail($id);
        return view('moradium.edit',compact('title','moradium' ,'pessoas', 'usuarios' ) );
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
        $moradium = Moradium::findOrfail($id);
    	
        $moradium->quadra = $request->quadra;
        
        $moradium->lote = $request->lote;
        
        $moradium->poligonal = $request->poligonal;
        
        $moradium->endereco = $request->endereco;
        
        $moradium->numero = $request->numero;
        
        $moradium->complemento = $request->complemento;
        
        $moradium->cep = $request->cep;
        
        $moradium->bairro = $request->bairro;
        
        $moradium->cidade = $request->cidade;
        
        $moradium->uf = $request->uf;
        
        $moradium->area_construida = $request->area_construida;
        
        $moradium->matricula_imovel = $request->matricula_imovel;
        
        $moradium->medida_frente = $request->medida_frente;
        
        $moradium->medida_direita = $request->medida_direita;
        
        $moradium->medida_esquerda = $request->medida_esquerda;
        
        $moradium->medida_fundo = $request->medida_fundo;
        
        $moradium->numero_lote_fundo = $request->numero_lote_fundo;
        
        $moradium->numero_lote_direito = $request->numero_lote_direito;
        
        $moradium->numero_lote_esquerdo = $request->numero_lote_esquerdo;
        
        $moradium->rua_frente = $request->rua_frente;
        
        $moradium->rua_direita = $request->rua_direita;
        
        $moradium->rua_esquerda = $request->rua_esquerda;
        
        $moradium->rua_fundo = $request->rua_fundo;
        
        $moradium->selagem = $request->selagem;
        
        $moradium->latitude = $request->latitude;
        
        $moradium->longitude = $request->longitude;
        
        $moradium->altitude = $request->altitude;
        
        $moradium->zona = $request->zona;
        
        $moradium->situacao_propriedade = $request->situacao_propriedade;
        
        $moradium->valor_aluguel = $request->valor_aluguel;
        
        $moradium->numero_quartos = $request->numero_quartos;
        
        $moradium->numero_comodos = $request->numero_comodos;
        
        $moradium->tipo_construcao = $request->tipo_construcao;
        
        $moradium->outro_tipo_construcao = $request->outro_tipo_construcao;
        
        $moradium->fonte_energia = $request->fonte_energia;
        
        $moradium->abastecimento_agua = $request->abastecimento_agua;
        
        $moradium->rede_esgoto = $request->rede_esgoto;
        
        $moradium->coleta_lixo = $request->coleta_lixo;
        
        $moradium->separacao_reciclaveis = $request->separacao_reciclaveis;
        
        $moradium->valor_beneficiario_prestacao_continuada = $request->valor_beneficiario_prestacao_continuada;
        
        $moradium->valor_bolsa_familia = $request->valor_bolsa_familia;
        
        $moradium->outro_beneficio = $request->outro_beneficio;
        
        $moradium->area_risco = $request->area_risco;
        
        $moradium->insalubre = $request->insalubre;
        
        $moradium->desabrigado = $request->desabrigado;
        
        $moradium->observacao = $request->observacao;
        
        $moradium->foto_comprovante_visita = $request->foto_comprovante_visita;
        
        $moradium->foto_fachada = $request->foto_fachada;
        
        $moradium->foto_comprovante_agua = $request->foto_comprovante_agua;
        
        $moradium->foto_comprovante_luz = $request->foto_comprovante_luz;
        
        $moradium->foto_comprovante_iptu = $request->foto_comprovante_iptu;
        
        $moradium->foto_documento_cartografico = $request->foto_documento_cartografico;
        
        
        $moradium->pessoa_id = $request->pessoa_id;

        
        $moradium->usuario_id = $request->usuario_id;

        
        $moradium->save();

        return redirect('moradium');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/moradium/'. $id . '/delete');

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
     	$moradium = Moradium::findOrfail($id);
     	$moradium->delete();
        return URL::to('moradium');
    }
}
