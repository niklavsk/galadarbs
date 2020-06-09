@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="d-inline-block">Saraksts ar visām nodaļām</h4>
                    <a href="{{ url('create/department') }}" class="btn btn-primary float-right">Pievienot Nodaļu</a>
                </div>

                <div class="card-body">


                    @if(count($departments) == 0)

                        <h5 class="text-md-center alert alert-warning">Nodaļu nav!</h5>

                    @else
                        <div class="btn-group-vertical mx-md-auto d-md-block col-md-8 h4">
                            @foreach ($departments as $department)
                                <a class="btn btn-light"
                                   href="{{ url('department', $department->id) }}"><span class="h5">{{ $department->apraksts }}</span></a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
