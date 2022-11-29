<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\TipoDocumento;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            RoleSeed::class,           
            CiudadSeed::class,
            ProductoSeed::class,
            UserSeed::class,
            Estado_ingresosSeed::class,
            Estado_pedidosSeed::class,
            TipoClienteSeed::class,
           
                     
        ]);
       
    }
}
