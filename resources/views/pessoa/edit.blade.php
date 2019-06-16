@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Editar pessoa
    </h1>
    <form method = 'get' action = '{!!url("pessoa")!!}'>
        <button class = 'btn blue'>Pesquisa pessoas</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("pessoa")!!}/{!!$pessoa->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="nome" name = "nome" type="text" class="validate" value="{!!$pessoa->
            nome!!}"> 
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
            <input id="cpf" name = "cpf" type="text" class="validate" value="{!!$pessoa->
            cpf!!}"> 
            <label for="cpf">CPF</label>
        </div>
        <div class="input-field col s6">
            <input id="rg" name = "rg" type="text" class="validate" value="{!!$pessoa->
            rg!!}"> 
            <label for="rg">RG</label>
        </div>
        <div class="input-field col s6">
            <input id="nome_mae" name = "nome_mae" type="text" class="validate" value="{!!$pessoa->
            nome_mae!!}"> 
            <label for="nome_mae">Nome mãe</label>
        </div>
        <div class="input-field col s6">
            <input id="nome_pai" name = "nome_pai" type="text" class="validate" value="{!!$pessoa->
            nome_pai!!}"> 
            <label for="nome_pai">Nome pai</label>
        </div>
        <div class="input-field col s6">
            <input id="parentesco" name = "parentesco" type="text" class="validate" value="{!!$pessoa->
            parentesco!!}"> 
            <label for="parentesco">Parentesco</label>
        </div>
        <div class="input-field col s6">
            <input id="sexo" name = "sexo" type="text" class="validate" value="{!!$pessoa->
            sexo!!}"> 
            <label for="sexo">Sexo</label>
        </div>
        <div class="input-field col s6">
            <input id="raca" name = "raca" type="text" class="validate" value="{!!$pessoa->
            raca!!}"> 
            <label for="raca">Reça</label>
        </div>
        <div class="input-field col s6">
            <input id="data_nascimento" name = "data_nascimento" type="text" class="validate" value="{!!$pessoa->
            data_nascimento!!}"> 
            <label for="data_nascimento">Data nascimento</label>
        </div>
        <div class="input-field col s6">
            <input id="email" name = "email" type="text" class="validate" value="{!!$pessoa->
            email!!}"> 
            <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
            <input id="nacionalidade" name = "nacionalidade" type="text" class="validate" value="{!!$pessoa->
            nacionalidade!!}"> 
            <label for="nacionalidade">Nacionalidade</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_ctps" name = "numero_ctps" type="text" class="validate" value="{!!$pessoa->
            numero_ctps!!}"> 
            <label for="numero_ctps">Número CTPS</label>
        </div>
        <div class="input-field col s6">
            <input id="pis_pasep" name = "pis_pasep" type="text" class="validate" value="{!!$pessoa->
            pis_pasep!!}"> 
            <label for="pis_pasep">PIS/PASEP</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_cadunico" name = "numero_cadunico" type="text" class="validate" value="{!!$pessoa->
            numero_cadunico!!}"> 
            <label for="numero_cadunico">Número CADUNICO</label>
        </div>
        <div class="input-field col s6">
            <input id="nis" name = "nis" type="text" class="validate" value="{!!$pessoa->
            nis!!}"> 
            <label for="nis">NIS</label>
        </div>
        <div class="input-field col s6">
            <input id="escolaridade" name = "escolaridade" type="text" class="validate" value="{!!$pessoa->
            escolaridade!!}"> 
            <label for="escolaridade">Escolaridade</label>
        </div>
        <div class="input-field col s6">
            <input id="estado_civil" name = "estado_civil" type="text" class="validate" value="{!!$pessoa->
            estado_civil!!}"> 
            <label for="estado_civil">Estado civil</label>
        </div>
        <div class="input-field col s6">
            <input id="situacao_conjugal" name = "situacao_conjugal" type="text" class="validate" value="{!!$pessoa->
            situacao_conjugal!!}"> 
            <label for="situacao_conjugal">Situação conjugal</label>
        </div>
        <div class="input-field col s6">
            <input id="profissao" name = "profissao" type="text" class="validate" value="{!!$pessoa->
            profissao!!}"> 
            <label for="profissao">Profissão</label>
        </div>
        <div class="input-field col s6">
            <input id="renda_formal" name = "renda_formal" type="text" class="validate" value="{!!$pessoa->
            renda_formal!!}"> 
            <label for="renda_formal">Renda formal</label>
        </div>
        <div class="input-field col s6">
            <input id="situacao_renda_formal" name = "situacao_renda_formal" type="text" class="validate" value="{!!$pessoa->
            situacao_renda_formal!!}"> 
            <label for="situacao_renda_formal">Situação renda formal</label>
        </div>
        <div class="input-field col s6">
            <input id="renda_informal" name = "renda_informal" type="text" class="validate" value="{!!$pessoa->
            renda_informal!!}"> 
            <label for="renda_informal">Renda informal</label>
        </div>
        <div class="input-field col s6">
            <input id="situacao_renda_informal" name = "situacao_renda_informal" type="text" class="validate" value="{!!$pessoa->
            situacao_renda_informal!!}"> 
            <label for="situacao_renda_informal">Situação renda informal</label>
        </div>
        <div class="input-field col s6">
            <input id="ramo_atividade" name = "ramo_atividade" type="text" class="validate" value="{!!$pessoa->
            ramo_atividade!!}"> 
            <label for="ramo_atividade">Ramo atividade</label>
        </div>
        <div class="input-field col s6">
            <input id="empregador" name = "empregador" type="text" class="validate" value="{!!$pessoa->
            empregador!!}"> 
            <label for="empregador">Empregador</label>
        </div>
        <div class="input-field col s6">
            <input id="tempo_servico_empregado_atual" name = "tempo_servico_empregado_atual" type="text" class="validate" value="{!!$pessoa->
            tempo_servico_empregado_atual!!}"> 
            <label for="tempo_servico_empregado_atual">Tempo serviço emprego atual</label>
        </div>
        <div class="input-field col s6">
            <input id="fgts" name = "fgts" type="text" class="validate" value="{!!$pessoa->
            fgts!!}"> 
            <label for="fgts">FGTS</label>
        </div>
        <div class="input-field col s6">
            <input id="valor_fgts" name = "valor_fgts" type="text" class="validate" value="{!!$pessoa->
            valor_fgts!!}"> 
            <label for="valor_fgts">Valor FGTS</label>
        </div>
        <div class="input-field col s6">
            <input id="telefone_fixo" name = "telefone_fixo" type="text" class="validate" value="{!!$pessoa->
            telefone_fixo!!}"> 
            <label for="telefone_fixo">Telefone fixo</label>
        </div>
        <div class="input-field col s6">
            <input id="telefone_movel" name = "telefone_movel" type="text" class="validate" value="{!!$pessoa->
            telefone_movel!!}"> 
            <label for="telefone_movel">Telefone móvel</label>
        </div>
        <div class="input-field col s6">
            <input id="telefone_recado" name = "telefone_recado" type="text" class="validate" value="{!!$pessoa->
            telefone_recado!!}"> 
            <label for="telefone_recado">Telefone recado</label>
        </div>
        <div class="input-field col s6">
            <input id="falar_com" name = "falar_com" type="text" class="validate" value="{!!$pessoa->
            falar_com!!}"> 
            <label for="falar_com">Falar com</label>
        </div>
        <div class="input-field col s6">
            <input id="tempo_residencia_imovel" name = "tempo_residencia_imovel" type="text" class="validate" value="{!!$pessoa->
            tempo_residencia_imovel!!}"> 
            <label for="tempo_residencia_imovel">Tempo residência imóvel</label>
        </div>
        <div class="input-field col s6">
            <input id="tempo_residencia_municipio" name = "tempo_residencia_municipio" type="text" class="validate" value="{!!$pessoa->
            tempo_residencia_municipio!!}"> 
            <label for="tempo_residencia_municipio">Tempo residência município</label>
        </div>
        <div class="input-field col s6">
            <input id="interesse_moradia_urbana" name = "interesse_moradia_urbana" type="text" class="validate" value="{!!$pessoa->
            interesse_moradia_urbana!!}"> 
            <label for="interesse_moradia_urbana">Interesse moradia urbana</label>
        </div>
        <div class="input-field col s6">
            <input id="interesse_moradia_rural" name = "interesse_moradia_rural" type="text" class="validate" value="{!!$pessoa->
            interesse_moradia_rural!!}"> 
            <label for="interesse_moradia_rural">Interesse moradia rural</label>
        </div>
        <div class="input-field col s6">
            <input id="interesse_lote" name = "interesse_lote" type="text" class="validate" value="{!!$pessoa->
            interesse_lote!!}"> 
            <label for="interesse_lote">Interesse lote</label>
        </div>
        <div class="input-field col s6">
            <input id="interesse_regulacao_fundiaria" name = "interesse_regulacao_fundiaria" type="text" class="validate" value="{!!$pessoa->
            interesse_regulacao_fundiaria!!}"> 
            <label for="interesse_regulacao_fundiaria">Interesse regulação fundiária</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_auditiva_mudez" name = "deficiencia_auditiva_mudez" type="text" class="validate" value="{!!$pessoa->
            deficiencia_auditiva_mudez!!}"> 
            <label for="deficiencia_auditiva_mudez">Deficiência auditiva mudez</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_auditiva_surdez" name = "deficiencia_auditiva_surdez" type="text" class="validate" value="{!!$pessoa->
            deficiencia_auditiva_surdez!!}"> 
            <label for="deficiencia_auditiva_surdez">Deficiência auditiva mudez</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_cadeirante" name = "deficiencia_cadeirante" type="text" class="validate" value="{!!$pessoa->
            deficiencia_cadeirante!!}"> 
            <label for="deficiencia_cadeirante">Deficiência cadeirante</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_fisica" name = "deficiencia_fisica" type="text" class="validate" value="{!!$pessoa->
            deficiencia_fisica!!}"> 
            <label for="deficiencia_fisica">Deficiência física</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_intelectual" name = "deficiencia_intelectual" type="text" class="validate" value="{!!$pessoa->
            deficiencia_intelectual!!}"> 
            <label for="deficiencia_intelectual">Deficiência intelectual</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_nanismo" name = "deficiencia_nanismo" type="text" class="validate" value="{!!$pessoa->
            deficiencia_nanismo!!}"> 
            <label for="deficiencia_nanismo">Deficiência nanismo</label>
        </div>
        <div class="input-field col s6">
            <input id="deficiencia_visual" name = "deficiencia_visual" type="text" class="validate" value="{!!$pessoa->
            deficiencia_visual!!}"> 
            <label for="deficiencia_visual">Deficiência visual</label>
        </div>
        <div class="input-field col s6">
            <input id="titular_conjuje_mulher_maria_penha" name = "titular_conjuje_mulher_maria_penha" type="text" class="validate" value="{!!$pessoa->
            titular_conjuje_mulher_maria_penha!!}"> 
            <label for="titular_conjuje_mulher_maria_penha">Titular cônjuje maria penha</label>
        </div>
        <div class="input-field col s6">
            <input id="proprietario_imovel" name = "proprietario_imovel" type="text" class="validate" value="{!!$pessoa->
            proprietario_imovel!!}"> 
            <label for="proprietario_imovel">Proprietário imóvel</label>
        </div>
        <div class="input-field col s6">
            <input id="proprietario_lote" name = "proprietario_lote" type="text" class="validate" value="{!!$pessoa->
            proprietario_lote!!}"> 
            <label for="proprietario_lote">Proprietário lote</label>
        </div>
        <div class="input-field col s6">
            <input id="proprietario_imovel_precario" name = "proprietario_imovel_precario" type="text" class="validate" value="{!!$pessoa->
            proprietario_imovel_precario!!}"> 
            <label for="proprietario_imovel_precario">Proprietário imóvel precário</label>
        </div>
        <div class="input-field col s6">
            <input id="convenio" name = "convenio" type="text" class="validate" value="{!!$pessoa->
            convenio!!}"> 
            <label for="convenio">Convênio</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo" name = "tipo" type="text" class="validate" value="{!!$pessoa->
            tipo!!}"> 
            <label for="tipo">Tipo</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_pessoa" name = "foto_pessoa" type="text" class="validate" value="{!!$pessoa->
            foto_pessoa!!}"> 
            <label for="foto_pessoa">Foto pessoa</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_cpf" name = "foto_cpf" type="text" class="validate" value="{!!$pessoa->
            foto_cpf!!}"> 
            <label for="foto_cpf">Foto CPF</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_rg" name = "foto_rg" type="text" class="validate" value="{!!$pessoa->
            foto_rg!!}"> 
            <label for="foto_rg">Foto RG</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_cnh" name = "foto_cnh" type="text" class="validate" value="{!!$pessoa->
            foto_cnh!!}"> 
            <label for="foto_cnh">Foto CNH</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_carteira_trabalho" name = "foto_carteira_trabalho" type="text" class="validate" value="{!!$pessoa->
            foto_carteira_trabalho!!}"> 
            <label for="foto_carteira_trabalho">Foto carteira trabalho</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_documento_casa" name = "foto_documento_casa" type="text" class="validate" value="{!!$pessoa->
            foto_documento_casa!!}"> 
            <label for="foto_documento_casa">Foto documento casa</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_renda" name = "foto_comprovante_renda" type="text" class="validate" value="{!!$pessoa->
            foto_comprovante_renda!!}"> 
            <label for="foto_comprovante_renda">Foto comprovante renda</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_estado_civil" name = "foto_comprovante_estado_civil" type="text" class="validate" value="{!!$pessoa->
            foto_comprovante_estado_civil!!}"> 
            <label for="foto_comprovante_estado_civil">Foto comprovante estado civil</label>
        </div>
        <div class="input-field col s6">
            <input id="extra1" name = "extra1" type="text" class="validate" value="{!!$pessoa->
            extra1!!}"> 
            <label for="extra1">Extra 01</label>
        </div>
        <div class="input-field col s12">
            <select name = 'usuario_id' selected="{!!$pessoa->usuario->id!!}">
                @foreach($usuarios as $key => $value) 
                <option value="{{$key}}"      {{ ($pessoa->usuario->id==$key) ? "selected='selected'" : "" }}      >{{$value}}</option>
                @endforeach 
            </select>
            <label>Usuário</label>
        </div>
        <div class="input-field col s12">
            <select name = 'pessoa_id' selected="{!!$pessoa->pessoa->id!!}">
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}"      {{ ($pessoa->pessoa->id==$key) ? "selected='selected'" : "" }}      >{{$value}}</option>
                @endforeach 
            </select>
            <label>Pessoa</label>
        </div>
        <button class = 'btn red' type ='submit'>Editar</button>
    </form>
</div>
@endsection