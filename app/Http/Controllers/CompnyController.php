<?php

namespace App\Http\Controllers;



use App\Models\compny;
use Exception;
use Illuminate\Http\Request;

class CompnyController extends Controller
{
    //

    public function index()

    {

        $compny = Compny::latest()->get();
        // $compny=compny::all();

        return view('companies.index', compact('compny'));
    }

    public function create()

    {

        return view('companies.create');
    }

    public function store(Request $request)

    {
        $request->validate(['name' => 'required']);

        try {
            //code...
            compny::create($request->except('_token'));

            return to_route('companies.index')->with('status', 'Company Added');
        } catch (Exception $e) {
            //throw $th;


            return to_route('companies.index')->with('status', $e->getMessage());
        }
    }

    public function delete($id)

    {
        try {
            Compny::destroy($id);
            return to_route('companies.index')->with('status', 'Company Deleted');
        } catch (Exception $e) {
            return to_route('companies.index')->with('status', $e->getMessage());
        }
    }

    public function edit($id)


    {

        $compny = Compny::find($id);
        return view('companies.edit', compact('compny'));
    }


    public function update($id, Request $Request)
    {
        try {
            $compny = Compny::find($id);
            $compny->name = $Request->name;
            $compny->owner = $Request->owner;
            $compny->save();
            return to_route('companies.index')->with('status', 'Compny ' . $compny->name . ' Updated');
        } catch (Exception $e) {
            return to_route('companies.index')->with('status', $e->getMessage());
        }
    }
}
