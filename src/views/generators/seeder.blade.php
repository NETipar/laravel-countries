<?php use Illuminate\Database\Eloquent\Model as Eloquent;

class CountriesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the countries table
        DB::table(\Config::get('laravel-countries::table_name'))->delete();

        //Get all of the countries
        $countries = Countries::getList();
        foreach ($countries as $countryId => $country){
            DB::table(\Config::get('laravel-countries::table_name'))->insert(array(
                'id' => $countryId,
                'country_code' => $country['country-code'],
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'name' => $country['name'],
            ));
        }
    }
}