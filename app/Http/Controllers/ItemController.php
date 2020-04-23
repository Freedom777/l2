<?php

namespace App\Http\Controllers;

use App\DataTables\ItemDataTable;
use App\Models\Item;
use Illuminate\Http\Request;

/**
 * Class ItemController
 * @package App\Http\Controllers
 */
class ItemController extends Controller
{
    public function indexAll(ItemDataTable $dataTable)
    {
        return $dataTable->render('item.all');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate();

        return view('item.index', compact('items'))
            ->with('i', (request()->input('page', 1) - 1) * $items->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Item();
        return view('item.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Item::$rules);

        $item = Item::create($request->all());

        return redirect()->route('item.index')
            ->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);

        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);

        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        request()->validate(Item::$rules);

        $item->update($request->all());

        return redirect()->route('item.index')
            ->with('success', 'Item updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $item = Item::find($id)->delete();

        return redirect()->route('item.index')
            ->with('success', 'Item deleted successfully');
    }
}
