@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 offset-5">

                <p>{{ $myChef->name }}'s details </p>

                <div>
                    <h4>{{ $myChef->name }}</h4>
                    {{--}}
                        Other pending details
                    {{--}}
                </div>

                <div>
                    <button class="btn btn-success">Accept</button>
                    <button class="btn btn-danger">Reject</button>
                </div>

            </div>
        </div>
    </div>
@endsection