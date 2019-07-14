<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pessoas.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PessoasAddColumnBeneficios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table('pessoas', function (Blueprint $table) {
			
        $table->float('valor_beneficiario_prestacao_continuada')->nullable();
        
        $table->float('valor_bolsa_familia')->nullable();
        
        $table->String('outro_beneficio')->nullable();
        
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
		Schema::table('pessoas', function (Blueprint $table) {
			
			$table->dropColumn('valor_beneficiario_prestacao_continuada');
			
			$table->dropColumn('valor_bolsa_familia');
			
			$table->dropColumn('outro_beneficio');
			
		});
    }
}
