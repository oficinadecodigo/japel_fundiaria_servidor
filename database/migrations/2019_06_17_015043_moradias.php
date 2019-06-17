<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Moradias.
 *
 * @author  The scaffold-interface created at 2019-06-17 01:50:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Moradias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('moradias',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('quadra')->nullable();
        
        $table->String('lote')->nullable();
        
        $table->integer('poligonal')->nullable();
        
        $table->String('endereco')->nullable();
        
        $table->String('numero')->nullable();
        
        $table->String('complemento')->nullable();
        
        $table->String('cep')->nullable();
        
        $table->String('bairro')->nullable();
        
        $table->String('cidade')->nullable();
        
        $table->String('uf')->nullable();
        
        $table->float('area_construida')->nullable();
        
        $table->String('matricula_imovel')->nullable();
        
        $table->float('medida_frente')->nullable();
        
        $table->float('medida_direita')->nullable();
        
        $table->float('medida_esquerda')->nullable();
        
        $table->float('medida_fundo')->nullable();
        
        $table->String('numero_lote_fundo')->nullable();
        
        $table->String('numero_lote_direito')->nullable();
        
        $table->String('numero_lote_esquerdo')->nullable();
        
        $table->String('rua_frente')->nullable();
        
        $table->String('rua_direita')->nullable();
        
        $table->String('rua_esquerda')->nullable();
        
        $table->String('rua_fundo')->nullable();
        
        $table->String('selagem')->nullable();
        
        $table->String('latitude')->nullable();
        
        $table->String('longitude')->nullable();
        
        $table->String('altitude')->nullable();
        
        $table->integer('zona')->nullable();
        
        $table->integer('situacao_propriedade')->nullable();
        
        $table->float('valor_aluguel')->nullable();
        
        $table->integer('numero_quartos')->nullable();
        
        $table->integer('numero_comodos')->nullable();
        
        $table->integer('tipo_construcao')->nullable();
        
        $table->String('outro_tipo_construcao')->nullable();
        
        $table->integer('fonte_energia')->nullable();
        
        $table->boolean('abastecimento_agua')->nullable();
        
        $table->boolean('rede_esgoto')->nullable();
        
        $table->boolean('coleta_lixo')->nullable();
        
        $table->boolean('separacao_reciclaveis')->nullable();
        
        $table->float('valor_beneficiario_prestacao_continuada')->nullable();
        
        $table->float('valor_bolsa_familia')->nullable();
        
        $table->String('outro_beneficio')->nullable();
        
        $table->boolean('area_risco')->nullable();
        
        $table->boolean('insalubre')->nullable();
        
        $table->boolean('desabrigado')->nullable();
        
        $table->String('observacao')->nullable();
        
        $table->String('foto_comprovante_visita')->nullable();
        
        $table->String('foto_fachada')->nullable();
        
        $table->String('foto_comprovante_agua')->nullable();
        
        $table->String('foto_comprovante_luz')->nullable();
        
        $table->String('foto_comprovante_iptu')->nullable();
        
        $table->String('foto_documento_cartografico')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('pessoa_id')->unsigned()->nullable();
		$table->foreign('pessoa_id')->references('id')->on('pessoas');
        //$table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
        
        $table->integer('usuario_id')->unsigned()->nullable();
		$table->foreign('usuario_id')->references('id')->on('usuarios');
        //$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('moradias');
    }
}
