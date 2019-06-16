@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Informações pessoa
    </h1>
    <form method = 'get' action = '{!!url("pessoa")!!}'>
        <button class = 'btn blue'>Pesquisa pessoas</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Campo</th>
            <th>Valor</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>Nome : </i></b>
                </td>
                <td>{!!$pessoa->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>CPF : </i></b>
                </td>
                <td>{!!$pessoa->cpf!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>RG : </i></b>
                </td>
                <td>{!!$pessoa->rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nome mãe : </i></b>
                </td>
                <td>{!!$pessoa->nome_mae!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nome pai : </i></b>
                </td>
                <td>{!!$pessoa->nome_pai!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Parentesco : </i></b>
                </td>
                <td>{!!$pessoa->parentesco!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Sexo : </i></b>
                </td>
                <td>{!!$pessoa->sexo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Raça : </i></b>
                </td>
                <td>{!!$pessoa->raca!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Data nascimento : </i></b>
                </td>
                <td>{!!$pessoa->data_nascimento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Email : </i></b>
                </td>
                <td>{!!$pessoa->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nacionalidade : </i></b>
                </td>
                <td>{!!$pessoa->nacionalidade!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Número CTPS : </i></b>
                </td>
                <td>{!!$pessoa->numero_ctps!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>PIS/PASEP : </i></b>
                </td>
                <td>{!!$pessoa->pis_pasep!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Número CADUNICO : </i></b>
                </td>
                <td>{!!$pessoa->numero_cadunico!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>NIS : </i></b>
                </td>
                <td>{!!$pessoa->nis!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Escolaridade : </i></b>
                </td>
                <td>{!!$pessoa->escolaridade!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Estado civil : </i></b>
                </td>
                <td>{!!$pessoa->estado_civil!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Situação conjugal : </i></b>
                </td>
                <td>{!!$pessoa->situacao_conjugal!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Profissão : </i></b>
                </td>
                <td>{!!$pessoa->profissao!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Renda formal : </i></b>
                </td>
                <td>{!!$pessoa->renda_formal!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Situação renda formal : </i></b>
                </td>
                <td>{!!$pessoa->situacao_renda_formal!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Renda informal : </i></b>
                </td>
                <td>{!!$pessoa->renda_informal!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Situação renda informal : </i></b>
                </td>
                <td>{!!$pessoa->situacao_renda_informal!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Ramo atividade : </i></b>
                </td>
                <td>{!!$pessoa->ramo_atividade!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Empregador : </i></b>
                </td>
                <td>{!!$pessoa->empregador!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Tempo serviço emprego atual : </i></b>
                </td>
                <td>{!!$pessoa->tempo_servico_empregado_atual!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>FGTS : </i></b>
                </td>
                <td>{!!$pessoa->fgts!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Valor FGTS : </i></b>
                </td>
                <td>{!!$pessoa->valor_fgts!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Telefone fixo : </i></b>
                </td>
                <td>{!!$pessoa->telefone_fixo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Telefone móvel : </i></b>
                </td>
                <td>{!!$pessoa->telefone_movel!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Telefone recado : </i></b>
                </td>
                <td>{!!$pessoa->telefone_recado!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Falar com : </i></b>
                </td>
                <td>{!!$pessoa->falar_com!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>tempo_residencia_imovel : </i></b>
                </td>
                <td>{!!$pessoa->tempo_residencia_imovel!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Tempo residência município : </i></b>
                </td>
                <td>{!!$pessoa->tempo_residencia_municipio!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Interesse moradia urbana : </i></b>
                </td>
                <td>{!!$pessoa->interesse_moradia_urbana!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Interesse moradia rural : </i></b>
                </td>
                <td>{!!$pessoa->interesse_moradia_rural!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Interesse lote : </i></b>
                </td>
                <td>{!!$pessoa->interesse_lote!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Interesse regulação fundiária : </i></b>
                </td>
                <td>{!!$pessoa->interesse_regulacao_fundiaria!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência auditiva mudez : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_auditiva_mudez!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência auditiva mudez : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_auditiva_surdez!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência cadeirante : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_cadeirante!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência física : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_fisica!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência intelectual : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_intelectual!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência nanismo : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_nanismo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Deficiência visual : </i></b>
                </td>
                <td>{!!$pessoa->deficiencia_visual!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Titular conjuje maria penha : </i></b>
                </td>
                <td>{!!$pessoa->titular_conjuje_mulher_maria_penha!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Proprietário imóvel : </i></b>
                </td>
                <td>{!!$pessoa->proprietario_imovel!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Proprietário lote : </i></b>
                </td>
                <td>{!!$pessoa->proprietario_lote!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Proprietário imóvel precário : </i></b>
                </td>
                <td>{!!$pessoa->proprietario_imovel_precario!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Convênio : </i></b>
                </td>
                <td>{!!$pessoa->convenio!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Tipo : </i></b>
                </td>
                <td>{!!$pessoa->tipo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto pessoa : </i></b>
                </td>
                <td>{!!$pessoa->foto_pessoa!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto CPF : </i></b>
                </td>
                <td>{!!$pessoa->foto_cpf!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto RG : </i></b>
                </td>
                <td>{!!$pessoa->foto_rg!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto CNH : </i></b>
                </td>
                <td>{!!$pessoa->foto_cnh!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto carteira trabalho : </i></b>
                </td>
                <td>{!!$pessoa->foto_carteira_trabalho!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto documento casa : </i></b>
                </td>
                <td>{!!$pessoa->foto_documento_casa!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto comprovente renda : </i></b>
                </td>
                <td>{!!$pessoa->foto_comprovante_renda!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Foto comprovante estado civil : </i></b>
                </td>
                <td>{!!$pessoa->foto_comprovante_estado_civil!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Extra 01 : </i></b>
                </td>
                <td>{!!$pessoa->extra1!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>Usuário : </i>
                        <b>
                        </td>
                        <td>{!!$pessoa->usuario->nome!!}</td>
                    </tr>
			</tr>
			</tbody>
			</table>
			</div>
            @endsection
			