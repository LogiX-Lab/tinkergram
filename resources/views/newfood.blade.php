@extends('layouts.app')

@section('top_content')



         <!--Reservation-->
         <section class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-citreat-title">
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                        <h3>Found New!</h3>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-reservation-img">
                            <img src="/images/Image21.jpg" class="width-100 img-responsive" alt="reservationimg" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-reservation-content">
                            <form action="{{ route('myfood.store') }}" enctype="multipart/form-data" method="post">
                             @csrf
                                <div class="row">
                                    <div class="tv-reservation-form-clear">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Food on the menu</label>
                                                <input class="input-field tv-reservation-input" placeholder="Food Name *" name="food_name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Food photo</label>
                                                <input class="input-field tv-reservation-input" placeholder="Food Name *" name="food_image" required="" type="file">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Rank</label>
                                                <input class="input-field tv-reservation-input" placeholder="Rank it * ( 1-5) " min="1" max="5" name="food_points" required="" type="number">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Description</label>
                                                <textarea class="tv-reservation-textarea" placeholder="About" name="food_desc" required="" type="text"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="tv-reservation-form-clear">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>By</label>
                                                <input class="input-field tv-reservation-input" placeholder="Restaurant, Name of Chef*" name="name" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Location</label>
                                                <input class="input-field tv-reservation-input" placeholder="Address *" name="address" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Telephone</label>
                                                <input class="input-field tv-reservation-input" placeholder="Contact Info *" name="contact_info" required="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Site Url</label>
                                                <input class="input-field tv-reservation-input" placeholder="www *" name="url" required="" type="url">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-reservation-block">
                                                <label>Supoortive Message</label>
                                                <textarea class="tv-reservation-textarea" placeholder="Supportive message" name="caption" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="tv-citreat-button text-center">
                                                <button type="submit" class="tv-submit-button reservation-button">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Reservation-->



@endsection


@section('latest_post_content')


@endsection
