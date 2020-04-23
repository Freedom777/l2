<?php

namespace App\Http\Controllers;

use App\Models\Armor;
use Illuminate\Http\Request;

/**
 * Class ArmorController
 * @package App\Http\Controllers
 */
class ArmorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armors = Armor::paginate();

        return view('armor.index', compact('armors'))
            ->with('i', (request()->input('page', 1) - 1) * $armors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $armor = new Armor();
        return view('armor.create', compact('armor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Armor::$rules);

        $armor = Armor::create($request->all());

        return redirect()->route('armor.index')
            ->with('success', 'Armor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $armor = Armor::find($id);

        return view('armor.show', compact('armor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $armor = Armor::find($id);

        return view('armor.edit', compact('armor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Armor $armor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armor $armor)
    {
        request()->validate(Armor::$rules);

        $armor->update($request->all());

        return redirect()->route('armor.index')
            ->with('success', 'Armor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $armor = Armor::find($id)->delete();

        return redirect()->route('armor.index')
            ->with('success', 'Armor deleted successfully');
    }
}
