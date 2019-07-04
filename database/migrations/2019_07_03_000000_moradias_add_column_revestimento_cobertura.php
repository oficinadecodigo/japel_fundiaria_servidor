<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pessoas.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MoradiasAddColumnRevestimentoCobertura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table('moradias', function (Blueprint $table) {
			$table->Integer('revestimento_externo')->nullable();
		});
        Schema::table('moradias', function (Blueprint $table) {
			$table->Integer('cobertura')->nullable();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
		Schema::table('moradias', function (Blueprint $table) {
			$table->dropColumn('revestimento_externo');
		});
		Schema::table('moradias', function (Blueprint $table) {
			$table->dropColumn('cobertura');
		});
    }
}
