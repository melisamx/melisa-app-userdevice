<?php namespace App\UserDevice\Repositories;

use Melisa\Repositories\Eloquent\Repository;

/**
 * 
 * @author Luis Josafat Heredia Contreras
 */
class DevicesRepository extends Repository
{
    
    public function model() {
        
        return 'App\UserDevice\Models\Devices';
        
    }
    
}
