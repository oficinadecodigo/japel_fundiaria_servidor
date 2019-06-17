@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
    <h1>
        Editar moradia
    </h1>
    <form method = 'get' action = '{!!url("moradium")!!}'>
        <button class = 'btn blue'>Pesquisa moradias</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("moradium")!!}/{!!$moradium->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="quadra" name = "quadra" type="text" class="validate" value="{!!$moradium->
            quadra!!}"> 
            <label for="quadra">Quadra</label>
        </div>
        <div class="input-field col s6">
            <input id="lote" name = "lote" type="text" class="validate" value="{!!$moradium->
            lote!!}"> 
            <label for="lote">Lote</label>
        </div>
        <div class="input-field col s6">
            <input id="poligonal" name = "poligonal" type="text" class="validate" value="{!!$moradium->
            poligonal!!}"> 
            <label for="poligonal">Poligonal</label>
        </div>
        <div class="input-field col s6">
            <input id="endereco" name = "endereco" type="text" class="validate" value="{!!$moradium->
            endereco!!}"> 
            <label for="endereco">Endereço</label>
        </div>
        <div class="input-field col s6">
            <input id="numero" name = "numero" type="text" class="validate" value="{!!$moradium->
            numero!!}"> 
            <label for="numero">Número</label>
        </div>
        <div class="input-field col s6">
            <input id="complemento" name = "complemento" type="text" class="validate" value="{!!$moradium->
            complemento!!}"> 
            <label for="complemento">Complemento</label>
        </div>
        <div class="input-field col s6">
            <input id="cep" name = "cep" type="text" class="validate" value="{!!$moradium->
            cep!!}"> 
            <label for="cep">CEP</label>
        </div>
        <div class="input-field col s6">
            <input id="bairro" name = "bairro" type="text" class="validate" value="{!!$moradium->
            bairro!!}"> 
            <label for="bairro">Bairro</label>
        </div>
        <div class="input-field col s6">
            <input id="cidade" name = "cidade" type="text" class="validate" value="{!!$moradium->
            cidade!!}"> 
            <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s6">
            <input id="uf" name = "uf" type="text" class="validate" value="{!!$moradium->
            uf!!}"> 
            <label for="uf">UF</label>
        </div>
        <div class="input-field col s6">
            <input id="area_construida" name = "area_construida" type="text" class="validate" value="{!!$moradium->
            area_construida!!}"> 
            <label for="area_construida">Área construída</label>
        </div>
        <div class="input-field col s6">
            <input id="matricula_imovel" name = "matricula_imovel" type="text" class="validate" value="{!!$moradium->
            matricula_imovel!!}"> 
            <label for="matricula_imovel">Matrícula imóvel</label>
        </div>
        <div class="input-field col s6">
            <input id="medida_frente" name = "medida_frente" type="text" class="validate" value="{!!$moradium->
            medida_frente!!}"> 
            <label for="medida_frente">Medida frente</label>
        </div>
        <div class="input-field col s6">
            <input id="medida_direita" name = "medida_direita" type="text" class="validate" value="{!!$moradium->
            medida_direita!!}"> 
            <label for="medida_direita">Medida direita</label>
        </div>
        <div class="input-field col s6">
            <input id="medida_esquerda" name = "medida_esquerda" type="text" class="validate" value="{!!$moradium->
            medida_esquerda!!}"> 
            <label for="medida_esquerda">Medida esquerda</label>
        </div>
        <div class="input-field col s6">
            <input id="medida_fundo" name = "medida_fundo" type="text" class="validate" value="{!!$moradium->
            medida_fundo!!}"> 
            <label for="medida_fundo">Medida fundo</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_lote_fundo" name = "numero_lote_fundo" type="text" class="validate" value="{!!$moradium->
            numero_lote_fundo!!}"> 
            <label for="numero_lote_fundo">Número lote fundo</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_lote_direito" name = "numero_lote_direito" type="text" class="validate" value="{!!$moradium->
            numero_lote_direito!!}"> 
            <label for="numero_lote_direito">Número lote direito</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_lote_esquerdo" name = "numero_lote_esquerdo" type="text" class="validate" value="{!!$moradium->
            numero_lote_esquerdo!!}"> 
            <label for="numero_lote_esquerdo">Número lote esquerdo</label>
        </div>
        <div class="input-field col s6">
            <input id="rua_frente" name = "rua_frente" type="text" class="validate" value="{!!$moradium->
            rua_frente!!}"> 
            <label for="rua_frente">Rua frente</label>
        </div>
        <div class="input-field col s6">
            <input id="rua_direita" name = "rua_direita" type="text" class="validate" value="{!!$moradium->
            rua_direita!!}"> 
            <label for="rua_direita">Rua direita</label>
        </div>
        <div class="input-field col s6">
            <input id="rua_esquerda" name = "rua_esquerda" type="text" class="validate" value="{!!$moradium->
            rua_esquerda!!}"> 
            <label for="rua_esquerda">Rua esquerda</label>
        </div>
        <div class="input-field col s6">
            <input id="rua_fundo" name = "rua_fundo" type="text" class="validate" value="{!!$moradium->
            rua_fundo!!}"> 
            <label for="rua_fundo">Rua fundo</label>
        </div>
        <div class="input-field col s6">
            <input id="selagem" name = "selagem" type="text" class="validate" value="{!!$moradium->
            selagem!!}"> 
            <label for="selagem">Selagem</label>
        </div>
        <div class="input-field col s6">
            <input id="latitude" name = "latitude" type="text" class="validate" value="{!!$moradium->
            latitude!!}"> 
            <label for="latitude">Latitude</label>
        </div>
        <div class="input-field col s6">
            <input id="longitude" name = "longitude" type="text" class="validate" value="{!!$moradium->
            longitude!!}"> 
            <label for="longitude">Longitude</label>
        </div>
        <div class="input-field col s6">
            <input id="altitude" name = "altitude" type="text" class="validate" value="{!!$moradium->
            altitude!!}"> 
            <label for="altitude">Altitude</label>
        </div>
        <div class="input-field col s6">
            <input id="zona" name = "zona" type="text" class="validate" value="{!!$moradium->
            zona!!}"> 
            <label for="zona">Zona</label>
        </div>
        <div class="input-field col s6">
            <input id="situacao_propriedade" name = "situacao_propriedade" type="text" class="validate" value="{!!$moradium->
            situacao_propriedade!!}"> 
            <label for="situacao_propriedade">Situação propriedade</label>
        </div>
        <div class="input-field col s6">
            <input id="valor_aluguel" name = "valor_aluguel" type="text" class="validate" value="{!!$moradium->
            valor_aluguel!!}"> 
            <label for="valor_aluguel">Valor aluguel</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_quartos" name = "numero_quartos" type="text" class="validate" value="{!!$moradium->
            numero_quartos!!}"> 
            <label for="numero_quartos">Número quartos</label>
        </div>
        <div class="input-field col s6">
            <input id="numero_comodos" name = "numero_comodos" type="text" class="validate" value="{!!$moradium->
            numero_comodos!!}"> 
            <label for="numero_comodos">Número cômodos</label>
        </div>
        <div class="input-field col s6">
            <input id="tipo_construcao" name = "tipo_construcao" type="text" class="validate" value="{!!$moradium->
            tipo_construcao!!}"> 
            <label for="tipo_construcao">Tipo construção</label>
        </div>
        <div class="input-field col s6">
            <input id="outro_tipo_construcao" name = "outro_tipo_construcao" type="text" class="validate" value="{!!$moradium->
            outro_tipo_construcao!!}"> 
            <label for="outro_tipo_construcao">Outro tipo construção</label>
        </div>
        <div class="input-field col s6">
            <input id="fonte_energia" name = "fonte_energia" type="text" class="validate" value="{!!$moradium->
            fonte_energia!!}"> 
            <label for="fonte_energia">Fonte energia</label>
        </div>
        <div class="input-field col s6">
            <input id="abastecimento_agua" name = "abastecimento_agua" type="text" class="validate" value="{!!$moradium->
            abastecimento_agua!!}"> 
            <label for="abastecimento_agua">Abastecimento água</label>
        </div>
        <div class="input-field col s6">
            <input id="rede_esgoto" name = "rede_esgoto" type="text" class="validate" value="{!!$moradium->
            rede_esgoto!!}"> 
            <label for="rede_esgoto">Rede esgoto</label>
        </div>
        <div class="input-field col s6">
            <input id="coleta_lixo" name = "coleta_lixo" type="text" class="validate" value="{!!$moradium->
            coleta_lixo!!}"> 
            <label for="coleta_lixo">Coleta lixo</label>
        </div>
        <div class="input-field col s6">
            <input id="separacao_reciclaveis" name = "separacao_reciclaveis" type="text" class="validate" value="{!!$moradium->
            separacao_reciclaveis!!}"> 
            <label for="separacao_reciclaveis">Separação recicláveis</label>
        </div>
        <div class="input-field col s6">
            <input id="valor_beneficiario_prestacao_continuada" name = "valor_beneficiario_prestacao_continuada" type="text" class="validate" value="{!!$moradium->
            valor_beneficiario_prestacao_continuada!!}"> 
            <label for="valor_beneficiario_prestacao_continuada">Valor beneficiário prestação continuada</label>
        </div>
        <div class="input-field col s6">
            <input id="valor_bolsa_familia" name = "valor_bolsa_familia" type="text" class="validate" value="{!!$moradium->
            valor_bolsa_familia!!}"> 
            <label for="valor_bolsa_familia">Valor bolsa família</label>
        </div>
        <div class="input-field col s6">
            <input id="outro_beneficio" name = "outro_beneficio" type="text" class="validate" value="{!!$moradium->
            outro_beneficio!!}"> 
            <label for="outro_beneficio">Outro benefício</label>
        </div>
        <div class="input-field col s6">
            <input id="area_risco" name = "area_risco" type="text" class="validate" value="{!!$moradium->
            area_risco!!}"> 
            <label for="area_risco">Área risco</label>
        </div>
        <div class="input-field col s6">
            <input id="insalubre" name = "insalubre" type="text" class="validate" value="{!!$moradium->
            insalubre!!}"> 
            <label for="insalubre">Insalubre</label>
        </div>
        <div class="input-field col s6">
            <input id="desabrigado" name = "desabrigado" type="text" class="validate" value="{!!$moradium->
            desabrigado!!}"> 
            <label for="desabrigado">Desabrigado</label>
        </div>
        <div class="input-field col s6">
            <input id="observacao" name = "observacao" type="text" class="validate" value="{!!$moradium->
            observacao!!}"> 
            <label for="observacao">Observação</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_visita" name = "foto_comprovante_visita" type="text" class="validate" value="{!!$moradium->
            foto_comprovante_visita!!}"> 
            <label for="foto_comprovante_visita">Foto comprovante visita</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_fachada" name = "foto_fachada" type="text" class="validate" value="{!!$moradium->
            foto_fachada!!}"> 
            <label for="foto_fachada">Foto fachada</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_agua" name = "foto_comprovante_agua" type="text" class="validate" value="{!!$moradium->
            foto_comprovante_agua!!}"> 
            <label for="foto_comprovante_agua">Foto comprovante água</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_luz" name = "foto_comprovante_luz" type="text" class="validate" value="{!!$moradium->
            foto_comprovante_luz!!}"> 
            <label for="foto_comprovante_luz">foto comprovante luz</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_comprovante_iptu" name = "foto_comprovante_iptu" type="text" class="validate" value="{!!$moradium->
            foto_comprovante_iptu!!}"> 
            <label for="foto_comprovante_iptu">Foto comprovante IPTU</label>
        </div>
        <div class="input-field col s6">
            <input id="foto_documento_cartografico" name = "foto_documento_cartografico" type="text" class="validate" value="{!!$moradium->
            foto_documento_cartografico!!}"> 
            <label for="foto_documento_cartografico">Foto documento cartogáfico</label>
        </div>
        <div class="input-field col s12">
            <select name = 'pessoa_id'>
                @foreach($pessoas as $key => $value) 
                <option value="{{$key}}"      {{ ($moradium->pessoa->id==$key) ? "selected='selected'" : "" }}      >{{$value}}</option>
                @endforeach 
            </select>
            <label>Proprietário</label>
        </div>
        <div class="input-field col s12">
            <select name = 'usuario_id'>
                @foreach($usuarios as $key => $value) 
                <option value="{{$key}}"      {{ ($moradium->usuario->id==$key) ? "selected='selected'" : "" }}      >{{$value}}</option>
                @endforeach 
            </select>
            <label>Usuário</label>
        </div>
        <button class = 'btn red' type ='submit'>Editar</button>
    </form>
</div>
@endsection