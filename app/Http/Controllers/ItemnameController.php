<?php

namespace App\Http\Controllers;

use App\Models\Itemname;
use Illuminate\Http\Request;

/**
 * Class ItemnameController
 * @package App\Http\Controllers
 */
class ItemnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemnames = Itemname::paginate();

        return view('itemname.index', compact('itemnames'))
            ->with('i', (request()->input('page', 1) - 1) * $itemnames->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $itemname = new Itemname();
        return view('itemname.create', compact('itemname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Itemname::$rules);

        $itemname = Itemname::create($request->all());

        return redirect()->route('itemname.index')
            ->with('success', 'Itemname created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemname = Itemname::find($id);

        return view('itemname.show', compact('itemname'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemname = Itemname::find($id);

        return view('itemname.edit', compact('itemname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Itemname $itemname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemname $itemname)
    {
        request()->validate(Itemname::$rules);

        $itemname->update($request->all());

        return redirect()->route('itemname.index')
            ->with('success', 'Itemname updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $itemname = Itemname::find($id)->delete();

        return redirect()->route('itemname.index')
            ->with('success', 'Itemname deleted successfully');
    }
}
