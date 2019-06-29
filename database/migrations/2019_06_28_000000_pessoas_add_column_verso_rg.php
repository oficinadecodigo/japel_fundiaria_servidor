<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pessoas.
 *
 * @author  The scaffold-interface created at 2019-06-16 05:34:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PessoasAddColumnVersoRg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table('pessoas', function (Blueprint $table) {
			$table->String('foto_rg_verso')->nullable();
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
			$table->dropColumn('foto_rg_verso');
		});
    }
}
