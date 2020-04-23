<?php

namespace App\Http\Controllers;

use App\Models\WeaponSa;
use Illuminate\Http\Request;

/**
 * Class WeaponSaController
 * @package App\Http\Controllers
 */
class WeaponSaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weaponSa = WeaponSa::paginate();

        return view('weapon-sa.index', compact('weaponSa'))
            ->with('i', (request()->input('page', 1) - 1) * $weaponSa->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weaponSa = new WeaponSa();
        return view('weapon-sa.create', compact('weaponSa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(WeaponSa::$rules);

        $weaponSa = WeaponSa::create($request->all());

        return redirect()->route('weapon-sa.index')
            ->with('success', 'WeaponSa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weaponSa = WeaponSa::find($id);

        return view('weapon-sa.show', compact('weaponSa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weaponSa = WeaponSa::find($id);

        return view('weapon-sa.edit', compact('weaponSa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  WeaponSa $weaponSa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeaponSa $weaponSa)
    {
        request()->validate(WeaponSa::$rules);

        $weaponSa->update($request->all());

        return redirect()->route('weapon-sa.index')
            ->with('success', 'WeaponSa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $weaponSa = WeaponSa::find($id)->delete();

        return redirect()->route('weapon-sa.index')
            ->with('success', 'WeaponSa deleted successfully');
    }
}
