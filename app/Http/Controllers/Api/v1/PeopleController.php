<?php

namespace App\Http\Controllers\Api\v1;

use App\People;
use App\Http\Resources\PeopleResource;
use App\Http\Resources\PeopleResourceCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PeopleController extends Controller
{
    public function show(People $person):PeopleResource {
       
        return new PeopleResource($person);
    }


    public function index():PeopleResourceCollection {
       
        return new PeopleResourceCollection(People::paginate());
    }

    public function store(Request $request):PeopleResource {
      
        $request->validate([
            'firstName'     => 'required',
            'lastName'      => 'required',
            'phone'         => 'required',
            'email'         => 'required',
            'city'          => 'required',
        ]);
        
        $people=People::create($request->all());

        return new PeopleResource($people);
    }

    public function update( People $person,Request $request):PeopleResource {
       
         
        $person->update($request->all());

        return new PeopleResource($person);
    }
    
    
    public function destroy( People $person):PeopleResource {
       
         
        $person->delete();

        return new PeopleResource($person);
    }


}
