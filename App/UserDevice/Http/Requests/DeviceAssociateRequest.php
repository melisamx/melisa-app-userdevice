<?php namespace App\UserDevice\Http\Requests;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DeviceAssociateRequest extends Generic
{
    protected $rules = [
        'idIdentity'=>'required|max:36|exists:identities,id',
        'idDevice'=>'required|alpha_dash|max:100',
        'idGoogleRegistration'=>'required|alpha_dash|max:255',
        'idOneSignalUser'=>'required|alpha_dash|max:100',
        'remember'=>'required|boolean',
    ];
    
    public function rules()
    {
        
        return $this->rules;
        
    }
    
}
