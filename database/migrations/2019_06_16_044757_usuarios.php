<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Usuarios.
 *
 * @author  The scaffold-interface created at 2019-06-16 04:47:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('usuarios',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nome')->nullable();
        
        $table->String('cpf')->nullable();
        
        $table->String('email')->nullable();
        
        $table->String('login')->nullable();
        
        $table->String('senha')->nullable();
        
        $table->boolean('administrador')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('usuarios');
    }
}
