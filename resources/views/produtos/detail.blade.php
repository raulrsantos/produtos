@extends('website/website')

@section('content')
    <div>
        <h1>{{ $produto->name }}</h1>
        <p>{{ $produto->detail }}</p>
    </div>
@endsection