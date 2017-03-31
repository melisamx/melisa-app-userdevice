<?php namespace App\UserDevice\Logics\Devices;

use Melisa\core\LogicBusiness;
use App\UserDevice\Repositories\DevicesRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class AssociateLogic
{
    use LogicBusiness;
    
    protected $devices;

    public function __construct(DevicesRepository $devices) {
        
        $this->devices = $devices;
        
    }
    
    public function init(array $input) {
        
        $this->debug('Init logic associate device {d}', [
            'd'=>$input['idDevice']
        ]);
        
        if( !$input['remember']) {
            
            $this->debug('ignore associate device, but continue');
            
        }
        
        $this->devices->beginTransaction();
        
        $device = $this->associateDevice($input);
        
        if( !$device) {
            
            return $this->devices->rollBack();
            
        }
        
        if( !$this->emitEvent('userdevice.device.associated', [
            'idIdentity'=>$input['idIdentity'],
            'idDevice'=>$input['idDevice'],
        ])) {
            
            $this->devices->rollBack();
            return $this->error('Imposible register event device.associated');
            
        }
        
        $this->devices->commit();
        return $device->id;
        
    }
    
    public function associateDevice($input) {
        
        $device = $this->devices->updateOrCreate([
            'idIdentity'=>$input['idIdentity'],
            'idDevice'=>$input['idDevice'],
        ], [
            'idGoogleRegistration'=>$input['idGoogleRegistration'],
            'idOneSignalUser'=>$input['idOneSignalUser'],
        ]);
        
        if( !$device) {
            
            return $this->error('imposible associate device {d} of identity {i}', [
                'd'=>$input['idDevice'],
                'i'=>$input['idIdentity'],
            ]);
            
        }
        
        return $device;
        
    }
    
}
