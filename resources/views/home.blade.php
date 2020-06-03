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

                    You are logged in!
                    
                    <a class="nav-link" href="/q2">
                        <p>Question -2</p>
                    </a>

                    <a class="nav-link" href="/q3">
                        <p>Question -3</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
