@extends('layouts.layout')

@section('content')
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>We strive to deliver the best consumer experience possible!</h2>
                    <p class="lead">Therefore we are making the world a better place.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Most recent Advertisements -->
    <section id="advertisements" class="advertisements">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Most recent advertisements</h2>
                    <hr class="small">
                    @foreach ($advertisements as $advertisement)
                        <div class="col-xs-6 col-md-3">
                            <div class="thumbnail">
                                <img src="img/portfolio-1.jpg" alt="...">
                                <div class="caption">
                                    <h3>{{ $advertisement->name }}</h3>
                                    <p>{{ $advertisement->description }}</p>
                                    <p><a href="#" class="btn btn-primary" role="button"> $ </a> <a href="#" class="btn btn-default" role="button"> + </a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Top users -->
    <section id="tops" class="tops">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <h2>Top Buyers</h2>
                    <hr clss="small">
                </div>
                <div class="col-lg-4 text-center">
                    <h2>Top Sellers</h2>
                    <hr clss="small">
                </div>
                <div class="col-lg-4 text-center">
                    <h2>Top Tags</h2>
                    <hr clss="small">
                </div>
            </div>
        </div>
    </section>
@stop
