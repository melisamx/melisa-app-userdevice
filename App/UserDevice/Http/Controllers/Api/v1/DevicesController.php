<?php namespace App\UserDevice\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\UserDevice\Http\Requests\DeviceAssociateRequest;
use App\UserDevice\Logics\Devices\AssociateLogic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DevicesController extends Controller
{
    
    public function associate(DeviceAssociateRequest $request, AssociateLogic $logic)
    {
        
        $output = $logic->init($request->allValid());
        
        return response()->create($output);
        
    }
    
}
