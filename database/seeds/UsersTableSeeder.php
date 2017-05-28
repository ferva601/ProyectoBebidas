<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Pais;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

			for ($i=0; $i < 50; $i++)
			{

					// se genera un id al inserta cada registro
			     \DB::table('users')->insert(array(
			           'name' => $faker->unique()->userName,
			           'email'  => $faker->unique()->freeEmail,
			           'password'  =>\Hash::make('1234'),
			           'nombre'  => $faker->firstNameMale,
			           'apellido' => $faker->lastName,
			           'direccion' => $faker->address,
			           'codigo_postal' => $faker->postcode,
			           'pais_id' => $pais => Pais::find('pais') 
			           'provincia_region_id' => 
			           'estado_datos' => $faker->randomElement(['Actualizados', 'Sin Actualizar']),
			          	'avatar' => '21',

			    ));
			}
    }
}


 

            
        

                        