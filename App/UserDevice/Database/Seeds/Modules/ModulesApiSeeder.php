<?php namespace App\UserDevice\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesApiSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Api\AssociateDeviceSeeder::class);
        
    }
    
}
