@extends('master')

@section('title')
    Home page
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Full Nmae

                            </div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Last name</label>
                                    <div class="col-md-9">
                                        <input type="text" " class="form-control" name="last_name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Full name</label>
                                    <div class="col-md-9">
                                        <input type="text" value="{{isset($result) ? $result :''}}" class="form-control" />
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label"></label>
                                        <div class="col-md-9">
                                            <input type="submit" class="btn btn-success" value="Submit" />
                                        </div>
                            </form>

                        </div>
                        </div>

                    </div>

                </div>

            </div>



        </div>
    </section>
@endsection
