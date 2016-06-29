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
                                <a href="#"><img class="img-portfolio" src="img/portfolio-1.jpg" alt="..."></a>
                                <div class="caption">
                                    <h3>{{ $advertisement->name }}</h3> (<a href="#">{{ $advertisement->user->name }}</a>)

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
                    <div class="list-group">
                        @foreach($topBuyers as $user)
                            <a href="#" class="list-group-item"><span class="badge">{{ $user->buys_count }}</span>                                {{ $user->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <h2>Top Sellers</h2>
                    <hr clss="small">
                    <div class="list-group">
                        @foreach($topSellers as $user)
                            <a href="#" class="list-group-item"><span class="badge">{{ $user->sells_count }}</span>                                {{ $user->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <h2>Top Tags</h2>
                    <hr clss="small">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
