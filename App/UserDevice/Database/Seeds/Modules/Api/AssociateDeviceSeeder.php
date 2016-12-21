<?php namespace App\UserDevice\Database\Seeds\Modules\Api;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AssociateDeviceSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installModule([
            [
                'name'=>'Asociar dispositivo',
                'url'=>'/userdevice.php/api/v1/devices/associate/',
                'description'=>'Módulo para asociar dispositivo',
                'nameSpace'=>null,
                'task'=>[
                    'key'=>'task.userdevice.device.associate',
                    'name'=>'Asociar dispositivo',
                    'description'=>'Permitir asociar dispositivo',
                    'pattern'=>'create'
                ],
                'event'=>[
                    'key'=>'event.userdevice.device.associated',
                    'description'=>'Dispositivo asociado'
                ],
                'listener'=>'event.guest.user.login'
            ],
        ]);
        
    }
    
}
