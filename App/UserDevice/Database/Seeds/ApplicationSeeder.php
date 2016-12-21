<?php namespace App\UserDevice\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallApplication;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationSeeder extends Seeder
{    
    use InstallApplication;
    
    public function run()
    {
        
        $this->installApplication('userdevice', [
            'name'=>'UserDevice',
            'description'=>'Application UserDevice',
            'nameSpace'=>'Melisa.userdevice',
            'typeSecurity'=>'art'
        ]);
        
    }
    
}
