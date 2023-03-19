<?php

namespace App\Http\Controllers;

use App\Models\WorkingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkingUnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $working_units = DB::table('working_units')->get()->all();

        return view('working_units', ['working_units' => $working_units]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.working_unit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        WorkingUnit::create([
            'name' => $request->name,
        ]);

        return redirect('/radne_jedinice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $working_unit = DB::table('working_units')->get()->where('id', $id)->first();
        return view('form.working_unit', ['working_unit' => $working_unit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        DB::table('working_units')
            ->where('id', $id)
            ->update(['name' => $request->name]);

        return redirect('/radne_jedinice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkingUnit::where('id', $id)->delete();

        return redirect('/radne_jedinice');
    }
}
