<?php namespace App\UserDevice\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\InstallOption;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class OptionsSeeder extends Seeder
{
    use InstallOption;
    
    public function run()
    {
        
        $this->installOption('option.userdevice.access', [
            'name'=>'Option main de aplicación userdevice',
            'text'=>'Users Devices',
            'isSubMenu'=>true
        ]);
        
    }
    
}
