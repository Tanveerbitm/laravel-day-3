@extends('master')

@section('title')
    About Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{$product['image']}}" alt="" class="card-img-top h-300"/>
                            <div class="card-body">
                                <p class="card-title text-primary font-weight-bold">{{$product['name']}}</p>
                                <div class="row">
                                    <div class="col-md-5"><p class="font-weight-bold" style="font-size: 1.5rem">${{$product['price']}}</p></div>
                                </div>
                                <hr/>
                                <a href="{{route('detail',['id'=>$product['id']])}}" class="btn btn-outline-success">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
