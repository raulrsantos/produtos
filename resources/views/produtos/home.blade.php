@extends('website/website')

@section('content')
    <div class=>
        @foreach($produtos as $item)
            <div>
                <a href="{{ url('/'. $item->id)}}">
                    {{ $item->name }}
                </a>
            </div>
        @endforeach
    </div>
@endsection 