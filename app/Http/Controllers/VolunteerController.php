<?php

namespace App\Http\Controllers;

use App\Http\Requests\VolunteerRegistrationRequest;
use App\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function storeData(VolunteerRegistrationRequest $request)
    {
        $volunteer = Volunteer::create([
            'name' => $request->name,
            'dob' => $request->dob,
            'nrc_number' => $request->nrc,
            'father_name' => $request->father_name,
            'occupation' => $request->occupation,
            'address' => $request->address,
        ]);

        $volunteer->save();

        return view('complete');
    }
}
