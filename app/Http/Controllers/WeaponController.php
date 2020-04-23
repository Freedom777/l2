<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

/**
 * Class WeaponController
 * @package App\Http\Controllers
 */
class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weapons = Weapon::paginate();

        return view('weapon.index', compact('weapons'))
            ->with('i', (request()->input('page', 1) - 1) * $weapons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $weapon = new Weapon();
        return view('weapon.create', compact('weapon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Weapon::$rules);

        $weapon = Weapon::create($request->all());

        return redirect()->route('weapon.index')
            ->with('success', 'Weapon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $weapon = Weapon::find($id);

        return view('weapon.show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weapon = Weapon::find($id);

        return view('weapon.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Weapon $weapon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weapon $weapon)
    {
        request()->validate(Weapon::$rules);

        $weapon->update($request->all());

        return redirect()->route('weapon.index')
            ->with('success', 'Weapon updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $weapon = Weapon::find($id)->delete();

        return redirect()->route('weapon.index')
            ->with('success', 'Weapon deleted successfully');
    }
}
