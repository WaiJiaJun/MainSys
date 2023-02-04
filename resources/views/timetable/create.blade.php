@extends('layouts.myown')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3" align="center">New Company</h1>

            <div>
                <a class="btn btn-warning" href="{{ route('startApache') }}">Start Apache</a>
                <a class="btn btn-warning" href="{{ route('stopApache') }}">Stop Apache</a>
            </div>
            <br>
            
            <form method="POST" action="{{ route('generators.store') }}">
                {{ @csrf_field() }}

                    @if ($errors->messages())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br/>
                    @endif

                <div class="form-group">
                        <label form="name">Enter Company Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Company Name">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-warning" href="{{ route('generators.index') }}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
