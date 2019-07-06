<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;
use App\Pessoa;
use App\Moradium;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class UsuarioController.
 *
 * @author  The scaffold-interface created at 2019-06-16 04:47:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function user()
    {
        return response()->json(Usuario::all());
    }

	function str_wrap($string = '', $char = '"')
{
    return str_pad($string, strlen($string) + 2, $char, STR_PAD_BOTH);
}

	/**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function pessoa(Request $request)
    {		
		$dados = json_decode($request->getContent(), true);
		$registro = new Pessoa();        
		$registro->nome = $dados['nome'];
	$registro->cpf = $dados['cpf'];
	$registro->rg = $dados['rg'];
	$registro->nome_mae = $dados['nome_mae'];
	$registro->nome_pai = $dados['nome_pai'];
	$registro->parentesco = $dados['parentesco'];
	$registro->sexo = $dados['sexo'];
	$registro->raca = $dados['raca'];
	$registro->data_nascimento = $dados['data_nascimento'];
	$registro->email = $dados['email'];
	$registro->nacionalidade = $dados['nacionalidade'];
	$registro->numero_ctps = $dados['numero_ctps'];
	$registro->pis_pasep = $dados['pis_pasep'];
	$registro->numero_cadunico = $dados['numero_cadunico'];
	$registro->nis = $dados['nis'];
	$registro->escolaridade = $dados['escolaridade'];
	$registro->estado_civil = $dados['estado_civil'];
	$registro->situacao_conjugal = $dados['situacao_conjugal'];
	$registro->profissao = $dados['profissao'];
	$registro->renda_formal = $dados['renda_formal'];
	$registro->extra1 = $dados['extra1'];
	$registro->situacao_renda_formal = $dados['situacao_renda_formal'];
	$registro->renda_informal = $dados['renda_informal'];
	$registro->situacao_renda_informal = $dados['situacao_renda_informal'];
	$registro->ramo_atividade = $dados['ramo_atividade'];
	$registro->empregador = $dados['empregador'];
	$registro->tempo_servico_empregado_atual = $dados['tempo_servico_empregado_atual'];
	$registro->fgts = $dados['fgts'];
	$registro->valor_fgts = $dados['valor_fgts'];
	$registro->telefone_fixo = $dados['telefone_fixo'];
	$registro->telefone_movel = $dados['telefone_movel'];
	$registro->telefone_recado = $dados['telefone_recado'];
	$registro->falar_com = $dados['falar_com'];
	$registro->tempo_residencia_imovel = $dados['tempo_residencia_imovel'];
	$registro->tempo_residencia_municipio = $dados['tempo_residencia_municipio'];
	$registro->interesse_moradia_urbana = $dados['interesse_moradia_urbana'];
	$registro->interesse_moradia_rural = $dados['interesse_moradia_rural'];
	$registro->interesse_lote = $dados['interesse_lote'];
	$registro->interesse_regulacao_fundiaria = $dados['interesse_regulacao_fundiaria'];
	$registro->deficiencia_auditiva_mudez = $dados['deficiencia_auditiva_mudez'];
	$registro->deficiencia_auditiva_surdez = $dados['deficiencia_auditiva_surdez'];
	$registro->deficiencia_cadeirante = $dados['deficiencia_cadeirante'];
	$registro->deficiencia_fisica = $dados['deficiencia_fisica'];
	$registro->deficiencia_intelectual = $dados['deficiencia_intelectual'];
	$registro->deficiencia_nanismo = $dados['deficiencia_nanismo'];
	$registro->deficiencia_visual = $dados['deficiencia_visual'];
	$registro->titular_conjuje_mulher_maria_penha = $dados['titular_conjuje_mulher_maria_penha'];
	$registro->proprietario_imovel = $dados['proprietario_imovel'];
	$registro->proprietario_lote = $dados['proprietario_lote'];
	$registro->proprietario_imovel_precario = $dados['proprietario_imovel_precario'];
	$registro->convenio = $dados['convenio'];
	$registro->tipo = $dados['tipo'];
	$registro->foto_pessoa = $dados['foto_pessoa'];
	$registro->foto_cpf = $dados['foto_cpf'];
	$registro->foto_rg = $dados['foto_rg'];
	$registro->foto_cnh = $dados['foto_cnh'];
	$registro->foto_carteira_trabalho = $dados['foto_carteira_trabalho'];
	$registro->foto_documento_casa = $dados['foto_documento_casa'];
	$registro->foto_comprovante_renda = $dados['foto_comprovante_renda'];
	$registro->foto_comprovante_estado_civil = $dados['foto_comprovante_estado_civil'];
	$registro->usuario_id = $dados['usuario_id'];
	$registro->pessoa_id = $dados['pessoa_id'];
	$registro->foto_rg_verso = $dados['foto_rg_verso'];
	$registro->fgts_receber = $dados['fgts_receber'];
        $registro->save();
        return response($registro->id);
		//return response($dados['nome']);
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function moradia(Request $request)
    {
		$dados = json_decode($request->getContent(), true);
		$registro = new Moradium();        
		$registro->quadra = $dados['quadra'];
	$registro->lote = $dados['lote'];
	$registro->poligonal = $dados['poligonal'];
	$registro->endereco = $dados['endereco'];
	$registro->numero = $dados['numero'];
	$registro->complemento = $dados['complemento'];
	$registro->cep = $dados['cep'];
	$registro->bairro = $dados['bairro'];
	$registro->cidade = $dados['cidade'];
	$registro->uf = $dados['uf'];
	$registro->area_construida = $dados['area_construida'];
	$registro->matricula_imovel = $dados['matricula_imovel'];
	$registro->medida_frente = $dados['medida_frente'];
	$registro->medida_direita = $dados['medida_direita'];
	$registro->medida_esquerda = $dados['medida_esquerda'];
	$registro->medida_fundo = $dados['medida_fundo'];
	$registro->numero_lote_fundo = $dados['numero_lote_fundo'];
	$registro->numero_lote_direito = $dados['numero_lote_direito'];
	$registro->numero_lote_esquerdo = $dados['numero_lote_esquerdo'];
	$registro->rua_frente = $dados['rua_frente'];
	$registro->rua_direita = $dados['rua_direita'];
	$registro->rua_esquerda = $dados['rua_esquerda'];
	$registro->rua_fundo = $dados['rua_fundo'];
	$registro->selagem = $dados['selagem'];
	$registro->latitude = $dados['latitude'];
	$registro->longitude = $dados['longitude'];
	$registro->altitude = $dados['altitude'];
	$registro->zona = $dados['zona'];
	$registro->situacao_propriedade = $dados['situacao_propriedade'];
	$registro->valor_aluguel = $dados['valor_aluguel'];
	$registro->numero_quartos = $dados['numero_quartos'];
	$registro->numero_comodos = $dados['numero_comodos'];
	$registro->tipo_construcao = $dados['tipo_construcao'];
	$registro->outro_tipo_construcao = $dados['outro_tipo_construcao'];
	$registro->fonte_energia = $dados['fonte_energia'];
	$registro->abastecimento_agua = $dados['abastecimento_agua'];
	$registro->rede_esgoto = $dados['rede_esgoto'];
	$registro->coleta_lixo = $dados['coleta_lixo'];
	$registro->separacao_reciclaveis = $dados['separacao_reciclaveis'];
	$registro->valor_beneficiario_prestacao_continuada = $dados['valor_beneficiario_prestacao_continuada'];
	$registro->valor_bolsa_familia = $dados['valor_bolsa_familia'];
	$registro->outro_beneficio = $dados['outro_beneficio'];
	$registro->area_risco = $dados['area_risco'];
	$registro->insalubre = $dados['insalubre'];
	$registro->desabrigado = $dados['desabrigado'];
	$registro->observacao = $dados['observacao'];
	$registro->foto_comprovante_visita = $dados['foto_comprovante_visita'];
	$registro->foto_fachada = $dados['foto_fachada'];
	$registro->foto_comprovante_agua = $dados['foto_comprovante_agua'];
	$registro->foto_comprovante_luz = $dados['foto_comprovante_luz'];
	$registro->foto_comprovante_iptu = $dados['foto_comprovante_iptu'];
	$registro->foto_documento_cartografico = $dados['foto_documento_cartografico'];
	$registro->pessoa_id = $dados['pessoa_id'];
	$registro->usuario_id = $dados['usuario_id'];
	$registro->revestimento_externo = $dados['revestimento_externo'];
	$registro->cobertura = $dados['cobertura'];
	$registro->caracterizacao_uso = $dados['caracterizacao_uso'];
        $registro->save();
        return response($registro->id);
    }

}
