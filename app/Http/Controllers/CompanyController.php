<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View|Application|Factory
    {

        $query = Company::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('debtor_number', 'like', "%{$search}%");
            });
        }

        // Sorteer op basis van selectIE
        $sort = $request->input('sort');
        if ($sort === 'name_asc') {
            $query->orderBy('name', 'asc');
        } elseif ($sort === 'name_desc') {
            $query->orderBy('name', 'desc');
        } elseif ($sort === 'created_asc') {
            $query->orderBy('created_at', 'asc');
        } elseif ($sort === 'created_desc') {
            $query->orderBy('created_at', 'desc');
        } else {
            $query->orderBy('name');
        }

        $companies = $query->withCount('users')->paginate(10)->withQueryString();

        // Dummy aanvragen_count vullen
        foreach ($companies as $company) {
            $company->aanvragen_count = rand(0, 24);
        }

        return view('admin.companies.index', compact('companies'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
