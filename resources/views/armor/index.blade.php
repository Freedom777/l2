@extends('layouts.app')

@section('template_title')
    Armor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Armor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('armor.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Body Part</th>
										<th>Crystallizable</th>
										<th>Crystal Type</th>
										<th>Crystal Count</th>
										<th>Armor Type</th>
										<th>Physical Defense</th>
										<th>Magical Defense</th>
										<th>Mp Bonus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($armors as $armor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $armor->body_part }}</td>
											<td>{{ $armor->crystallizable }}</td>
											<td>{{ $armor->crystal_type }}</td>
											<td>{{ $armor->crystal_count }}</td>
											<td>{{ $armor->armor_type }}</td>
											<td>{{ $armor->physical_defense }}</td>
											<td>{{ $armor->magical_defense }}</td>
											<td>{{ $armor->mp_bonus }}</td>

                                            <td>
                                                <form action="{{ route('armor.destroy',$armor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('armor.show',$armor->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('armor.edit',$armor->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $armors->links() !!}
            </div>
        </div>
    </div>
@endsection
