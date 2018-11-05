<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobsRequest;
use App\Job;

class JobsController extends Controller
{
    public function index() {
        $jobs = Job::with('company')->get();
        return response()->json($jobs);
    }

    public function show($id) {
        $job = Job::with('company')->find($id);

        if(!$job) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($job);
    }

    public function store(JobsRequest $request) {
        $job = new Job();
        $job->fill($request->all());
        $job->save();

        return response()->json($job, 201);
    }

    public function update(JobsRequest $request, $id) {
        $job = Job::all()->find($id);

        if(!$job) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $job->fill($request->all());
        $job->save();

        return response()->json($job);

    }

    public function destroy($id) {
        $job = Job::query()->find($id);

        if(!$job) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $job->delete();
    }

}
