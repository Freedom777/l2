@extends('layouts.app')

@section('template_title')
    Weapons Sa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Weapons Sa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('weapon-sa.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Item Id</th>
										<th>Ingredient Id</th>
										<th>Quantity</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weaponsSas as $weaponsSa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $weaponsSa->item_id }}</td>
											<td>{{ $weaponsSa->ingredient_id }}</td>
											<td>{{ $weaponsSa->quantity }}</td>

                                            <td>
                                                <form action="{{ route('weapon-sa.destroy',$weaponsSa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('weapon-sa.show',$weaponsSa->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('weapon-sa.edit',$weaponsSa->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $weaponsSas->links() !!}
            </div>
        </div>
    </div>
@endsection
