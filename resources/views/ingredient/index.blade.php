@extends('layouts.app')

@section('template_title')
    Ingredient
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingredient') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingredient.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Rate</th>
										<th>Material</th>
										<th>Quantity</th>
										<th>Recipe Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingredients as $ingredient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ingredient->item_id }}</td>
											<td>{{ $ingredient->rate }}</td>
											<td>{{ $ingredient->material }}</td>
											<td>{{ $ingredient->quantity }}</td>
											<td>{{ $ingredient->recipe_id }}</td>

                                            <td>
                                                <form action="{{ route('ingredient.destroy',$ingredient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingredient.show',$ingredient->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingredient.edit',$ingredient->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $ingredients->links() !!}
            </div>
        </div>
    </div>
@endsection
