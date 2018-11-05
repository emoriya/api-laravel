<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function show($id) {
        $company = Company::all()->find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($company);
    }

    public function store(CompaniesRequest $request) {

        $company = new Company();
        $company->fill($request->all());
        $company->save();

        return response()->json($company, 201);
    }

    public function update(CompaniesRequest $request, $id) {
        $company = Company::query()->find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $company->fill($request->all());
        $company->save();

        return response()->json($company);
    }

    public function destroy($id) {
        $company = Company::query()->find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $company->delete();
    }
}
