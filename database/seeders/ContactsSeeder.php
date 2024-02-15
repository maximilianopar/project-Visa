<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'email' => 'alejandratoledo@gamil.com',
            'mensaje' => 'Gracias por los servicios prestados, los voy a recomendar!',
        ]);

        Contact::create([
            'email' => 'joseperoni88@hotmail.com',
            'mensaje' => 'Queria saber cuales son los visados mas populares. Gracias',
        ]);

    }
}
