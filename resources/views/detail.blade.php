@extends('master')

@section('title')
    Detail Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4 mx-auto">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{$element['image']}}" alt="image" class="card-img-top p-3"  height="300"/>
                                <h2 class="card-title px-5">{{$element['name']}}</h2>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <p class="font-weight-bold" style="font-size: 2rem">${{$element['price']}}</p>
                                    <hr />
                                    <b class="font-weight-bold">Description: </b>
                                    <br />
                                    <p>{{$element['description']}}</p>
                                    <hr />
                                    <a href="" class="btn btn-outline-dark">Add To Cart</a>
                                    <a href="{{route('about')}}" class="btn btn-outline-dark">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection
