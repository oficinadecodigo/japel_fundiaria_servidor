<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pessoas.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('pessoas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome')->nullable();
        
        $table->String('cpf')->nullable();
        
        $table->String('rg')->nullable();
        
        $table->String('nome_mae')->nullable();
        
        $table->String('nome_pai')->nullable();
        
        $table->integer('parentesco')->nullable();
        
        $table->integer('sexo')->nullable();
        
        $table->integer('raca')->nullable();
        
        $table->date('data_nascimento')->nullable();
        
        $table->String('email')->nullable();
        
        $table->String('nacionalidade')->nullable();
        
        $table->String('numero_ctps')->nullable();
        
        $table->String('pis_pasep')->nullable();
        
        $table->String('numero_cadunico')->nullable();
        
        $table->String('nis')->nullable();
        
        $table->integer('escolaridade')->nullable();
        
        $table->integer('estado_civil')->nullable();
        
        $table->integer('situacao_conjugal')->nullable();
        
        $table->String('profissao')->nullable();
        
        $table->float('renda_formal')->nullable();
        
        $table->String('extra1')->nullable();
        
        $table->integer('situacao_renda_formal')->nullable();
        
        $table->float('renda_informal')->nullable();
        
        $table->integer('situacao_renda_informal')->nullable();
        
        $table->integer('ramo_atividade')->nullable();
        
        $table->String('empregador')->nullable();
        
        $table->integer('tempo_servico_empregado_atual')->nullable();
        
        $table->boolean('fgts')->nullable();
        
        $table->float('valor_fgts')->nullable();
        
        $table->String('telefone_fixo')->nullable();
        
        $table->String('telefone_movel')->nullable();
        
        $table->String('telefone_recado')->nullable();
        
        $table->String('falar_com')->nullable();
        
        $table->integer('tempo_residencia_imovel')->nullable();
        
        $table->integer('tempo_residencia_municipio')->nullable();
        
        $table->boolean('interesse_moradia_urbana')->nullable();
        
        $table->boolean('interesse_moradia_rural')->nullable();
        
        $table->boolean('interesse_lote')->nullable();
        
        $table->boolean('interesse_regulacao_fundiaria')->nullable();
        
        $table->boolean('deficiencia_auditiva_mudez')->nullable();
        
        $table->boolean('deficiencia_auditiva_surdez')->nullable();
        
        $table->boolean('deficiencia_cadeirante')->nullable();
        
        $table->boolean('deficiencia_fisica')->nullable();
        
        $table->boolean('deficiencia_intelectual')->nullable();
        
        $table->boolean('deficiencia_nanismo')->nullable();
        
        $table->boolean('deficiencia_visual')->nullable();
        
        $table->boolean('titular_conjuje_mulher_maria_penha')->nullable();
        
        $table->boolean('proprietario_imovel')->nullable();
        
        $table->boolean('proprietario_lote')->nullable();
        
        $table->boolean('proprietario_imovel_precario')->nullable();
        
        $table->integer('convenio')->nullable();
        
        $table->integer('tipo')->nullable();
        
        $table->String('foto_pessoa')->nullable();
        
        $table->String('foto_cpf')->nullable();
        
        $table->String('foto_rg')->nullable();
        
        $table->String('foto_cnh')->nullable();
        
        $table->String('foto_carteira_trabalho')->nullable();
        
        $table->String('foto_documento_casa')->nullable();
        
        $table->String('foto_comprovante_renda')->nullable();
        
        $table->String('foto_comprovante_estado_civil')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('usuario_id')->unsigned()->nullable();
        $table->integer('pessoa_id')->unsigned()->nullable();
        $table->foreign('usuario_id')->references('id')->on('usuarios');
        //$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        
        
        
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
        Schema::drop('pessoas');
    }
}
