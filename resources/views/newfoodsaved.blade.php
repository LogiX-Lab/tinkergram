@extends('layouts.app')

@section('top_content')



         <!--Reservation-->
         <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Your food is posted successfully.</p>
                        <h3>Found Another New!</h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-reservation-img">
                            <img src="/storage/{{$product->image_url}}" class="width-100 img-responsive" alt="reservationimg" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-well-block">
                            <h3>Welcome Eating 美食 {{$product->name}}</h3>
                            <p>{{$comment->description}}</p>
                            <div class="tv-well-block">
                                @for ( $i=0; $i < $comment->points; $i++)
                                    <span class="fa fa-star checked"></span>
                                @endfor
                            </div>
                            <p></p>
                            <div class="tv-citreat-button">
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    </div>

                </div>
            </div>
        </section>
        <!--End Reservation-->



@endsection
