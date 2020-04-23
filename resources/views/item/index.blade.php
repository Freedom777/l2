@extends('layouts.app')

@section('template_title')
    Item
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Item') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('item.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Name</th>
										<th>Type</th>
										<th>Icon</th>
										<th>Price</th>
                                        <th>Place/Hand-Soulshot</th>
                                        <th>Cry Type</th>
                                        <th>Cry Count</th>
                                        <th>Extra Type</th>
                                        <th>Phys def/att</th>
                                        <th>Mag def/att</th>
                                        <th>MP bonus/Speed-Crit</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->itemname->name }}</td>
											<td>{{ $item->type }}</td>
											<td><img src="/images/{{ $item->icon }}" /></td>
											<td>{{ $item->price }}</td>
                                            @if ($item->armor)
                                                <td>{{ $item->armor->body_part }}</td>
                                                <td>{{ $item->armor->crystal_type }}</td>
                                                <td>{{ $item->armor->crystal_count }}</td>
                                                <td>{{ $item->armor->armor_type }}</td>
                                                <td>{{ $item->armor->physical_defense }}</td>
                                                <td>{{ $item->armor->magical_defense }}</td>
                                                <td>{{ $item->armor->mp_bonus }}</td>
                                            @elseif ($item->weapon)
                                                <td>@if (1 == $item->weapon->hands)
                                                        One
                                                    @else
                                                        Two
                                                    @endif
                                                    / {{ $item->weapon->soulshot_count }}
                                                </td>
                                                <td>{{ $item->weapon->crystal_type }}</td>
                                                <td>{{ $item->weapon->crystal_count }}</td>
                                                <td>{{ $item->weapon->weapon_type }}</td>
                                                <td>{{ $item->weapon->physical_damage }}</td>
                                                <td>{{ $item->weapon->magical_damage }}</td>
                                                <td>{{ $item->weapon->speed }} / {{ $item->weapon->critical }}</td>
                                            @else
                                                <td colspan="7">&nbsp;</td>
                                            @endif

                                            <td>
                                                <form action="{{ route('item.destroy',$item->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('item.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('item.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $items->links() !!}
            </div>
        </div>
    </div>
@endsection