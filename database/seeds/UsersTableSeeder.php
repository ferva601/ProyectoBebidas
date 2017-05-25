<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

			for ($i=0; $i < 50; $i++) {

					// se genera un id al inserta cada registro
			     $id = \DB::table('pais')->insertGetId(array( 
			     	'pais' => $faker->country,
			     	'continente' =>$faker->randomElement(['1', '2', '3', '4', '5' ]), 
			     
			     	 ));


			     \DB::table('users')->insert(array(
			           'name' => $faker->unique()->userName,
			           'email'  => $faker->unique()->freeEmail,
			           'password'  =>\Hash::make('1234'),
			           'nombre'  => $faker->firstNameMale,
			           'apellido' => $faker->lastName,
			           'direccion' => $faker->address,
			           'codigo_postal' => $faker->postcode,
			           'pais_id' => $id,
			           'provincia_region_id' => $faker->randomElement(['Africa', 'America', 'Asia', 'Europa', 'Oceania' ]),
			           'estado_datos' => $faker->randomElement(['Actualizados', 'Sin Actualizar']),

			          /* 'avatar' => null,
			           'created_at' => null,
			           'updated_at' => null,*/
			    ));



			}
    }
}
