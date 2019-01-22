@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Welcome to Chef4me, {{ auth()->user()->name }}!</h2>

                    <br>

                    <h5>You are one click away from your chef! </h5>

                        <a href="order-questions" class="btn btn-primary">Order for a Chef</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
