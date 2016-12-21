<?php namespace App\UserDevice\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Devices extends BaseUuid
{
    
    protected $table = 'Devices';
    protected $connection = 'userdevice';
    protected $fillable = [
        'idIdentity', 'idDevice', 'idGoogleRegistration', 'idOneSignalUser', 'remember',
    ];
    
}
