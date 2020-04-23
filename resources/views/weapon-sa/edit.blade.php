@extends('layouts.app')

@section('template_title')
    Update Weapons Sa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Weapons Sa</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('weapon-sa.update', $weaponsSa->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('weapon-sa.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
