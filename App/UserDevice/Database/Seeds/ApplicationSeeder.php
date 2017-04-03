<?php namespace App\UserDevice\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('userdevice', [
            'name'=>'UserDevice',
            'description'=>'Application UserDevice',
            'nameSpace'=>'Melisa.userdevice',
            'typeSecurity'=>'art',
            'version'=>'1.1.0'
        ]);
        
    }
    
}
