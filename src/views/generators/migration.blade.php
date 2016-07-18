<?php use Illuminate\Database\Migrations\Migration;

class SetupCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates the users table
		Schema::create(\Config::get('laravel-countries::table_name'), function($table)
		{		    
		    $table->integer('id')->index();
		    $table->string('country_code', 3)->default('');
		    $table->string('iso_3166_2', 2)->default('');
		    $table->string('iso_3166_3', 3)->default('');
		    $table->string('name', 255)->default('');
		    
		    $table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(\Config::get('laravel-countries::table_name'));
	}
}