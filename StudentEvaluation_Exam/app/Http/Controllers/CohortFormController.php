<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohort;
use Resources\Views\cohorts;

class CohortFormController extends Controller
{
    public function create()
    {
        return view('cohortform.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
        ]);
    }
}
