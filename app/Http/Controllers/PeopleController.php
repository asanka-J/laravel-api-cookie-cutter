<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Http\Resources\PeopleResource;
use App\Http\Resources\PeopleResourceCollection;


class PeopleController extends Controller
{
    public function show(People $people):PeopleResource {
       
        return new PeopleResource($people);
    }




    public function index():PeopleResourceCollection {
       
        return new PeopleResourceCollection(People::paginate());
    }
}
