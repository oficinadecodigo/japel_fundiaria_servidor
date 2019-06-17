@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Japel Fundiária')
@section('content')

<div class = 'container'>
<h1>
Informações da moradia
</h1>
<form method = 'get' action = '{!!url("moradium")!!}'>
<button class = 'btn blue'>Pesquisa moradias</button>
</form>
<table class = 'highlight bordered'>
<thead>
<th>Campo</th>
<th>Valor</th>
</thead>
<tbody>
<tr>
<td>
<b><i>Quadra : </i></b>
</td>
<td>{!!$moradium->quadra!!}</td>
</tr>
<tr>
<td>
<b><i>Lote : </i></b>
</td>
<td>{!!$moradium->lote!!}</td>
</tr>
<tr>
<td>
<b><i>Poligonal : </i></b>
</td>
<td>{!!$moradium->poligonal!!}</td>
</tr>
<tr>
<td>
<b><i>Endereço : </i></b>
</td>
<td>{!!$moradium->endereco!!}</td>
</tr>
<tr>
<td>
<b><i>Número : </i></b>
</td>
<td>{!!$moradium->numero!!}</td>
</tr>
<tr>
<td>
<b><i>Complemento : </i></b>
</td>
<td>{!!$moradium->complemento!!}</td>
</tr>
<tr>
<td>
<b><i>CEP : </i></b>
</td>
<td>{!!$moradium->cep!!}</td>
</tr>
<tr>
<td>
<b><i>Bairro : </i></b>
</td>
<td>{!!$moradium->bairro!!}</td>
</tr>
<tr>
<td>
<b><i>Cidade : </i></b>
</td>
<td>{!!$moradium->cidade!!}</td>
</tr>
<tr>
<td>
<b><i>UF : </i></b>
</td>
<td>{!!$moradium->uf!!}</td>
</tr>
<tr>
<td>
<b><i>Área construída : </i></b>
</td>
<td>{!!$moradium->area_construida!!}</td>
</tr>
<tr>
<td>
<b><i>Matrícula imóvel : </i></b>
</td>
<td>{!!$moradium->matricula_imovel!!}</td>
</tr>
<tr>
<td>
<b><i>Medida frente : </i></b>
</td>
<td>{!!$moradium->medida_frente!!}</td>
</tr>
<tr>
<td>
<b><i>Medida direita : </i></b>
</td>
<td>{!!$moradium->medida_direita!!}</td>
</tr>
<tr>
<td>
<b><i>Medida esquerda : </i></b>
</td>
<td>{!!$moradium->medida_esquerda!!}</td>
</tr>
<tr>
<td>
<b><i>Medida fundo : </i></b>
</td>
<td>{!!$moradium->medida_fundo!!}</td>
</tr>
<tr>
<td>
<b><i>Número lote fundo : </i></b>
</td>
<td>{!!$moradium->numero_lote_fundo!!}</td>
</tr>
<tr>
<td>
<b><i>Número lote direito : </i></b>
</td>
<td>{!!$moradium->numero_lote_direito!!}</td>
</tr>
<tr>
<td>
<b><i>Número lote esquerdo : </i></b>
</td>
<td>{!!$moradium->numero_lote_esquerdo!!}</td>
</tr>
<tr>
<td>
<b><i>Rua frente : </i></b>
</td>
<td>{!!$moradium->rua_frente!!}</td>
</tr>
<tr>
<td>
<b><i>Rua direita : </i></b>
</td>
<td>{!!$moradium->rua_direita!!}</td>
</tr>
<tr>
<td>
<b><i>Rua esquerda : </i></b>
</td>
<td>{!!$moradium->rua_esquerda!!}</td>
</tr>
<tr>
<td>
<b><i>Rua frente : </i></b>
</td>
<td>{!!$moradium->rua_fundo!!}</td>
</tr>
<tr>
<td>
<b><i>Selagem : </i></b>
</td>
<td>{!!$moradium->selagem!!}</td>
</tr>
<tr>
<td>
<b><i>Latitude : </i></b>
</td>
<td>{!!$moradium->latitude!!}</td>
</tr>
<tr>
<td>
<b><i>Longitude : </i></b>
</td>
<td>{!!$moradium->longitude!!}</td>
</tr>
<tr>
<td>
<b><i>Altitude : </i></b>
</td>
<td>{!!$moradium->altitude!!}</td>
</tr>
<tr>
<td>
<b><i>Zona : </i></b>
</td>
<td>{!!$moradium->zona!!}</td>
</tr>
<tr>
<td>
<b><i>Situação propriedade : </i></b>
</td>
<td>{!!$moradium->situacao_propriedade!!}</td>
</tr>
<tr>
<td>
<b><i>Valor aluguel : </i></b>
</td>
<td>{!!$moradium->valor_aluguel!!}</td>
</tr>
<tr>
<td>
<b><i>Número quartos : </i></b>
</td>
<td>{!!$moradium->numero_quartos!!}</td>
</tr>
<tr>
<td>
<b><i>Número cômodos : </i></b>
</td>
<td>{!!$moradium->numero_comodos!!}</td>
</tr>
<tr>
<td>
<b><i>Tipo construção : </i></b>
</td>
<td>{!!$moradium->tipo_construcao!!}</td>
</tr>
<tr>
<td>
<b><i>Outro tipo construção : </i></b>
</td>
<td>{!!$moradium->outro_tipo_construcao!!}</td>
</tr>
<tr>
<td>
<b><i>Fonte energia : </i></b>
</td>
<td>{!!$moradium->fonte_energia!!}</td>
</tr>
<tr>
<td>
<b><i>Abastecimento água : </i></b>
</td>
<td>{!!$moradium->abastecimento_agua!!}</td>
</tr>
<tr>
<td>
<b><i>Rede esgoto : </i></b>
</td>
<td>{!!$moradium->rede_esgoto!!}</td>
</tr>
<tr>
<td>
<b><i>Coleta lixo : </i></b>
</td>
<td>{!!$moradium->coleta_lixo!!}</td>
</tr>
<tr>
<td>
<b><i>Separação recicláveis : </i></b>
</td>
<td>{!!$moradium->separacao_reciclaveis!!}</td>
</tr>
<tr>
<td>
<b><i>Valor beneficiário prestação continuada : </i></b>
</td>
<td>{!!$moradium->valor_beneficiario_prestacao_continuada!!}</td>
</tr>
<tr>
<td>
<b><i>Valor bolsa família : </i></b>
</td>
<td>{!!$moradium->valor_bolsa_familia!!}</td>
</tr>
<tr>
<td>
<b><i>Outro benefício : </i></b>
</td>
<td>{!!$moradium->outro_beneficio!!}</td>
</tr>
<tr>
<td>
<b><i>Área risco : </i></b>
</td>
<td>{!!$moradium->area_risco!!}</td>
</tr>
<tr>
<td>
<b><i>Insalubre : </i></b>
</td>
<td>{!!$moradium->insalubre!!}</td>
</tr>
<tr>
<td>
<b><i>Desabrigado : </i></b>
</td>
<td>{!!$moradium->desabrigado!!}</td>
</tr>
<tr>
<td>
<b><i>Observação : </i></b>
</td>
<td>{!!$moradium->observacao!!}</td>
</tr>
<tr>
<td>
<b><i>Foto comprovante visita : </i></b>
</td>
<td>{!!$moradium->foto_comprovante_visita!!}</td>
</tr>
<tr>
<td>
<b><i>Foto fachada : </i></b>
</td>
<td>{!!$moradium->foto_fachada!!}</td>
</tr>
<tr>
<td>
<b><i>Foto comprovante água : </i></b>
</td>
<td>{!!$moradium->foto_comprovante_agua!!}</td>
</tr>
<tr>
<td>
<b><i>Foto comprvante luz : </i></b>
</td>
<td>{!!$moradium->foto_comprovante_luz!!}</td>
</tr>
<tr>
<td>
<b><i>Foto comprovante IPTU : </i></b>
</td>
<td>{!!$moradium->foto_comprovante_iptu!!}</td>
</tr>
<tr>
<td>
<b><i>Foto documento cartográfico : </i></b>
</td>
<td>{!!$moradium->foto_documento_cartografico!!}</td>
</tr>
<tr>
<td>
<b>
<i>Proprietário : </i>
<b>
</td>
<td>{!!$moradium->pessoa->nome!!}</td>
</tr>
<tr>
<td>
<b>
<i>Usuário : </i>
<b>
</td>
<td>{!!$moradium->usuario->nome!!}</td>
</tr>
</tbody>
</table>
</div>
@endsection