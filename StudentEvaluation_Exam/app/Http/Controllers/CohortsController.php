<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cohort;
use Resources\Views\cohorts;
use Resources\Views\cohortform;

class CohortsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cohorts = Cohort::all();

        return view('cohorts.index', compact('cohorts'));

    }

    public function create()
    {
        $cohort = new Cohort();
        return view('cohorts.create', compact('cohort'));
    }

    public function store()
    {
        Cohort::create($this->validateRequest());

        return redirect('cohorts');
    }

    public function show(Cohort $cohort)
    {
        return view('cohorts.show', compact('cohort'));
    }

    public function edit(Cohort $cohort)
    {
          return view('cohorts.edit', compact('cohort'));
    }

    public function update(Cohort $cohort)
    {
        $cohort->update($this->validateRequest());
        
        return redirect('cohorts/' . $cohort->id);
    }

    public function destroy(Cohort $cohort){
        $cohort->delete();

        return redirect('cohorts');
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }


}
