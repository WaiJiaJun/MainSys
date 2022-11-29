@extends('layouts.myown')

@section('content')
<body style="background-color:khaki">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3" align="center">Record List</h1>
            <a href="{{ route('generators.create') }}" class="btn btn-primary floatright btn-lg">Create</a>
        </div>
    </div>
</body>
@endsection
