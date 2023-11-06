<?php

namespace App\Http\Controllers;

use App\Models\branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $branches = Branch::query();
        if ($request->has('search')) {
            $branches->where('name', 'like', '%' . $request->search . '%');
            $branches->orWhereHas('company', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        return view('branches.index', ["branches" => $branches->orderBy('created_at', 'desc')->paginate(20)]);
        // return view('branches.index', ["branches" => $branches->orderBy('created_at', 'desc')->simplePaginate(20)]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
