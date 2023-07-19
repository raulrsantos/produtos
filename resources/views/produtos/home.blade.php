@extends('website/website')

@section('content')
    
    <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Produtos</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    @foreach($produtos as $item)

        <a href="{{ url('/'. $item->id)}}" style="decoration: none !important;">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $item->name }}</h3>
                    </div>
                </div>
            </div>
        </a>
      @endforeach
    </div>
</div>
@endsection 