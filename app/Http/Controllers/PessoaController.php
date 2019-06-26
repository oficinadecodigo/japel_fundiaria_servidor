<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Usuario;


/**
 * Class PessoaController.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - pessoa';
        $pessoas = Pessoa::paginate(6);
        return view('pessoa.index',compact('pessoas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - pessoa';
        
        $usuarios = Usuario::all()->pluck('nome','id');
        $pessoas = Pessoa::all()->pluck('nome','id');
        
        return view('pessoa.create',compact('title','usuarios','pessoas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();

        
        $pessoa->nome = $request->nome;

        
        $pessoa->cpf = $request->cpf;

        
        $pessoa->rg = $request->rg;

        
        $pessoa->nome_mae = $request->nome_mae;

        
        $pessoa->nome_pai = $request->nome_pai;

        
        $pessoa->parentesco = $request->parentesco;

        
        $pessoa->sexo = $request->sexo;

        
        $pessoa->raca = $request->raca;

        
        $pessoa->data_nascimento = $request->data_nascimento;

        
        $pessoa->email = $request->email;

        
        $pessoa->nacionalidade = $request->nacionalidade;

        
        $pessoa->numero_ctps = $request->numero_ctps;

        
        $pessoa->pis_pasep = $request->pis_pasep;

        
        $pessoa->numero_cadunico = $request->numero_cadunico;

        
        $pessoa->nis = $request->nis;

        
        $pessoa->escolaridade = $request->escolaridade;

        
        $pessoa->estado_civil = $request->estado_civil;

        
        $pessoa->situacao_conjugal = $request->situacao_conjugal;

        
        $pessoa->profissao = $request->profissao;

        
        $pessoa->renda_formal = $request->renda_formal;

        
        $pessoa->extra1 = $request->extra1;

        
        $pessoa->situacao_renda_formal = $request->situacao_renda_formal;

        
        $pessoa->renda_informal = $request->renda_informal;

        
        $pessoa->situacao_renda_informal = $request->situacao_renda_informal;

        
        $pessoa->ramo_atividade = $request->ramo_atividade;

        
        $pessoa->empregador = $request->empregador;

        
        $pessoa->tempo_servico_empregado_atual = $request->tempo_servico_empregado_atual;

        
        $pessoa->fgts = $request->fgts;

        
        $pessoa->valor_fgts = $request->valor_fgts;

        
        $pessoa->telefone_fixo = $request->telefone_fixo;

        
        $pessoa->telefone_movel = $request->telefone_movel;

        
        $pessoa->telefone_recado = $request->telefone_recado;

        
        $pessoa->falar_com = $request->falar_com;

        
        $pessoa->tempo_residencia_imovel = $request->tempo_residencia_imovel;

        
        $pessoa->tempo_residencia_municipio = $request->tempo_residencia_municipio;

        
        $pessoa->interesse_moradia_urbana = $request->interesse_moradia_urbana;

        
        $pessoa->interesse_moradia_rural = $request->interesse_moradia_rural;

        
        $pessoa->interesse_lote = $request->interesse_lote;

        
        $pessoa->interesse_regulacao_fundiaria = $request->interesse_regulacao_fundiaria;

        
        $pessoa->deficiencia_auditiva_mudez = $request->deficiencia_auditiva_mudez;

        
        $pessoa->deficiencia_auditiva_surdez = $request->deficiencia_auditiva_surdez;

        
        $pessoa->deficiencia_cadeirante = $request->deficiencia_cadeirante;

        
        $pessoa->deficiencia_fisica = $request->deficiencia_fisica;

        
        $pessoa->deficiencia_intelectual = $request->deficiencia_intelectual;

        
        $pessoa->deficiencia_nanismo = $request->deficiencia_nanismo;

        
        $pessoa->deficiencia_visual = $request->deficiencia_visual;

        
        $pessoa->titular_conjuje_mulher_maria_penha = $request->titular_conjuje_mulher_maria_penha;

        
        $pessoa->proprietario_imovel = $request->proprietario_imovel;

        
        $pessoa->proprietario_lote = $request->proprietario_lote;

        
        $pessoa->proprietario_imovel_precario = $request->proprietario_imovel_precario;

        
        $pessoa->convenio = $request->convenio;

        
        $pessoa->tipo = $request->tipo;

        
        $pessoa->foto_pessoa = $request->foto_pessoa;

        
        $pessoa->foto_cpf = $request->foto_cpf;

        
        $pessoa->foto_rg = $request->foto_rg;

        
        $pessoa->foto_cnh = $request->foto_cnh;

        
        $pessoa->foto_carteira_trabalho = $request->foto_carteira_trabalho;

        
        $pessoa->foto_documento_casa = $request->foto_documento_casa;

        
        $pessoa->foto_comprovante_renda = $request->foto_comprovante_renda;

        
        $pessoa->foto_comprovante_estado_civil = $request->foto_comprovante_estado_civil;

        
        
        $pessoa->usuario_id = $request->usuario_id;
        $pessoa->pessoa_id = $request->pessoa_id;

        
        $pessoa->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new pessoa has been created !!']);

        return redirect('pessoa');
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
        $title = 'Show - pessoa';

        if($request->ajax())
        {
            return URL::to('pessoa/'.$id);
        }

        $pessoa = Pessoa::findOrfail($id);
        return view('pessoa.show',compact('title','pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - pessoa';
        if($request->ajax())
        {
            return URL::to('pessoa/'. $id . '/edit');
        }

        
        $usuarios = Usuario::all()->pluck('nome','id');
        $pessoas = Pessoa::all()->pluck('nome','id');

        
        $pessoa = Pessoa::findOrfail($id);
        return view('pessoa.edit',compact('title','pessoa' ,'usuarios', 'pessoas' ) );
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
        $pessoa = Pessoa::findOrfail($id);
    	
        $pessoa->nome = $request->nome;
        
        $pessoa->cpf = $request->cpf;
        
        $pessoa->rg = $request->rg;
        
        $pessoa->nome_mae = $request->nome_mae;
        
        $pessoa->nome_pai = $request->nome_pai;
        
        $pessoa->parentesco = $request->parentesco;
        
        $pessoa->sexo = $request->sexo;
        
        $pessoa->raca = $request->raca;
        
        $pessoa->data_nascimento = $request->data_nascimento;
        
        $pessoa->email = $request->email;
        
        $pessoa->nacionalidade = $request->nacionalidade;
        
        $pessoa->numero_ctps = $request->numero_ctps;
        
        $pessoa->pis_pasep = $request->pis_pasep;
        
        $pessoa->numero_cadunico = $request->numero_cadunico;
        
        $pessoa->nis = $request->nis;
        
        $pessoa->escolaridade = $request->escolaridade;
        
        $pessoa->estado_civil = $request->estado_civil;
        
        $pessoa->situacao_conjugal = $request->situacao_conjugal;
        
        $pessoa->profissao = $request->profissao;
        
        $pessoa->renda_formal = $request->renda_formal;
        
        $pessoa->extra1 = $request->extra1;
        
        $pessoa->situacao_renda_formal = $request->situacao_renda_formal;
        
        $pessoa->renda_informal = $request->renda_informal;
        
        $pessoa->situacao_renda_informal = $request->situacao_renda_informal;
        
        $pessoa->ramo_atividade = $request->ramo_atividade;
        
        $pessoa->empregador = $request->empregador;
        
        $pessoa->tempo_servico_empregado_atual = $request->tempo_servico_empregado_atual;
        
        $pessoa->fgts = $request->fgts;
        
        $pessoa->valor_fgts = $request->valor_fgts;
        
        $pessoa->telefone_fixo = $request->telefone_fixo;
        
        $pessoa->telefone_movel = $request->telefone_movel;
        
        $pessoa->telefone_recado = $request->telefone_recado;
        
        $pessoa->falar_com = $request->falar_com;
        
        $pessoa->tempo_residencia_imovel = $request->tempo_residencia_imovel;
        
        $pessoa->tempo_residencia_municipio = $request->tempo_residencia_municipio;
        
        $pessoa->interesse_moradia_urbana = $request->interesse_moradia_urbana;
        
        $pessoa->interesse_moradia_rural = $request->interesse_moradia_rural;
        
        $pessoa->interesse_lote = $request->interesse_lote;
        
        $pessoa->interesse_regulacao_fundiaria = $request->interesse_regulacao_fundiaria;
        
        $pessoa->deficiencia_auditiva_mudez = $request->deficiencia_auditiva_mudez;
        
        $pessoa->deficiencia_auditiva_surdez = $request->deficiencia_auditiva_surdez;
        
        $pessoa->deficiencia_cadeirante = $request->deficiencia_cadeirante;
        
        $pessoa->deficiencia_fisica = $request->deficiencia_fisica;
        
        $pessoa->deficiencia_intelectual = $request->deficiencia_intelectual;
        
        $pessoa->deficiencia_nanismo = $request->deficiencia_nanismo;
        
        $pessoa->deficiencia_visual = $request->deficiencia_visual;
        
        $pessoa->titular_conjuje_mulher_maria_penha = $request->titular_conjuje_mulher_maria_penha;
        
        $pessoa->proprietario_imovel = $request->proprietario_imovel;
        
        $pessoa->proprietario_lote = $request->proprietario_lote;
        
        $pessoa->proprietario_imovel_precario = $request->proprietario_imovel_precario;
        
        $pessoa->convenio = $request->convenio;
        
        $pessoa->tipo = $request->tipo;
        
        $pessoa->foto_pessoa = $request->foto_pessoa;
        
        $pessoa->foto_cpf = $request->foto_cpf;
        
        $pessoa->foto_rg = $request->foto_rg;
        
        $pessoa->foto_cnh = $request->foto_cnh;
        
        $pessoa->foto_carteira_trabalho = $request->foto_carteira_trabalho;
        
        $pessoa->foto_documento_casa = $request->foto_documento_casa;
        
        $pessoa->foto_comprovante_renda = $request->foto_comprovante_renda;
        
        $pessoa->foto_comprovante_estado_civil = $request->foto_comprovante_estado_civil;
        
        
        $pessoa->usuario_id = $request->usuario_id;
        $pessoa->pessoa_id = $request->pessoa_id;

        
        $pessoa->save();

        return redirect('pessoa');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/pessoa/'. $id . '/delete');

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
     	$pessoa = Pessoa::findOrfail($id);
     	$pessoa->delete();
        return URL::to('pessoa');
    }
}
