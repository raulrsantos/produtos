@extends('website/website')

@section('content')
<div class="container px-4 py-5" id="custom-cards">
    <h1 class="pb-2 border-bottom">{{ $produto->name }}</h1>
    <div class="row py-5">
        <p>{{ $produto->detail }}</p>
    </div>
</div>
@endsection