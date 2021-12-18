@extends('layouts.app')

@section('top_content')



       <!--Services Section-->
        <section class="tv-section-padding">
            @foreach($posts as $post)

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 padding-0 col-sm-6 col-xs-12">
                            <div class="tv-service-img">
                                <img src="/storage/{{$post->image}}" class="width-100 img-responsive" alt="serviceicon">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tv-service-title">
                                <p>{{str_pad(substr($post->caption,0,55), 60, '.')}}</p>
                                <h3>Our Best Services</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/serviceicon1.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Fast Delivered</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/serviceicon2.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Best Quality</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/serviceicon3.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Ingredient Supply</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/serviceicon5.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Online Booking</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="images/event.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Event Booking</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="tv-service-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="/images/serviceicon4.png" class="media-object" alt="serviceicon">
                                            </div>
                                            <div class="media-body">
                                                <h4>Freshly Made</h4>
                                                <hr class="hr-service">
                                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
        <!--End Services Section-->

@endsection

@section('latest_post_content')

                    <div class="tv-blog-clear">
                        @isset($articles)
                        @foreach($articles as $article)

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="tv-blog-block">
                                    <img src="/storage/{{$article->product->image_url}}" class="width-100 img-responsive" alt="blogimg" />
                                    <div class="media">
                                        <div class="media-left">
                                            <h4>{{$article-> updated_at -> format('d') }}</h4>
                                            <p>{{$article-> updated_at -> format('M') }}</p>
                                        </div>
                                        <div class="media-body">
                                            <p>{{$article->product->name }}</p>
                                            <hr class="hr-service">
                                            <span>Posted By:{{$article->user->name}}</span>
                                            @for ( $i=0; $i < $article->points; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                        </div>
                                    </div>
                                    <p>{{$article->description}}</p>
                                    <div class="tv-event-button">
                                        <a href="" class="tv-submit-button reservation-button">Read More</a>
                                    </div>
                                    <hr style="border:3px solid #f1f1f1">

                                    <div class="scores">
                                        <div calss="row ">
                                            <div class=" col-md-2 col-sm-2 col-xs-2">
                                                <div>5 star</div>
                                            </div>
                                            <div class=" col-md-7 col-sm-7 col-xs-7">
                                                <div class="bar-container">
                                                <div class="bar-5"></div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-3 col-xs-3">
                                                150
                                            </div>
                                        </div>
                                        <div calss="row ">
                                            <div class=" col-md-2 col-sm-2 col-xs-2">
                                                <div>4 star</div>
                                            </div>
                                            <div class=" col-md-7 col-sm-7 col-xs-7">
                                                <div class="bar-container">
                                                <div class="bar-4"></div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-3 col-xs-3">
                                                <div>63</div>
                                            </div>
                                        </div>
                                        <div calss="row ">
                                            <div class=" col-md-2 col-sm-2 col-xs-2">
                                                <div>3 star</div>
                                            </div>
                                            <div class=" col-md-7 col-sm-7 col-xs-7">
                                                <div class="bar-container">
                                                <div class="bar-3"></div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-3 col-xs-3">
                                                <div>15</div>
                                            </div>
                                        </div>
                                        <div calss="row ">
                                            <div class=" col-md-2 col-sm-2 col-xs-2">
                                                <div>2 star</div>
                                            </div>
                                            <div class=" col-md-7 col-sm-7 col-xs-7">
                                                <div class="bar-container">
                                                <div class="bar-2"></div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-3 col-xs-3">
                                                <div>6</div>
                                            </div>
                                        </div>
                                        <div calss="row ">
                                            <div class=" col-md-2 col-sm-2 col-xs-2">
                                                <div>1 star</div>
                                            </div>
                                            <div class=" col-md-7 col-sm-7 col-xs-7">
                                                <div class="bar-container">
                                                <div class="bar-1"></div>
                                                </div>
                                            </div>
                                            <div class=" col-md-3 col-sm-3 col-xs-3">
                                                <div>20</div>
                                            </div>
                                        </div>
                                    </div>     <!-- End Scoscoresre -->
                                </div>
                            </div>
                        @endforeach
                        @endisset
                     </div>

@endsection
