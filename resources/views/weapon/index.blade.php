@extends('layouts.app')

@section('template_title')
    Weapon
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Weapon') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('weapon.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Hands</th>
										<th>Soulshot Count</th>
										<th>Crystal Type</th>
										<th>Crystal Count</th>
										<th>Physical Damage</th>
										<th>Weapon Type</th>
										<th>Magical Damage</th>
										<th>Speed</th>
										<th>Critical</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($weapons as $weapon)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $weapon->hands }}</td>
											<td>{{ $weapon->soulshot_count }}</td>
											<td>{{ $weapon->crystal_type }}</td>
											<td>{{ $weapon->crystal_count }}</td>
											<td>{{ $weapon->physical_damage }}</td>
											<td>{{ $weapon->weapon_type }}</td>
											<td>{{ $weapon->magical_damage }}</td>
											<td>{{ $weapon->speed }}</td>
											<td>{{ $weapon->critical }}</td>

                                            <td>
                                                <form action="{{ route('weapon.destroy',$weapon->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('weapon.show',$weapon->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('weapon.edit',$weapon->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $weapons->links() !!}
            </div>
        </div>
    </div>
@endsection
