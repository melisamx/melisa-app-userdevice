<?php namespace App\UserDevice\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class OptionsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installOption('option.userdevice.access', [
            'name'=>'Option main de aplicación userdevice',
            'text'=>'Users Devices',
            'isSubMenu'=>true
        ]);
        
    }
    
}
