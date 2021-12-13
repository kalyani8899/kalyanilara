@extends('layouts.app1')
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">News details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img width="825px" height="525px" src="/images/{{$blog->image}}" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{$blog->title}}</h1>
                                <p>
                                   {{$blog->details}}
                                </p>
                         
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                            @foreach($data as $d)
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="/images/{{$d->image}}" width="200px" height="200px" />
                                        <div class="sn-title">
                                            <a href="{{url('blog')}}/{{$d->id}}">{{$d->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">In This Category</h2>
                                <div class="news-list">
                                @foreach($sport as $d)
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="/images/{{$d->image}}" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="{{url('blog')}}/{{$d->id}}"> {{$d->title}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                            <!-- <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="{{asset('img/ads-2.jpg')}}" alt="Image"></a>
                                </div>
                            </div> -->
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                        @foreach($sport as $s)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{asset('images')}}/{{$s->image}}" />
                                                </div>
                                            <div class="tn-title">
                                                <a href="{{url('blog')}}/{{$s->id}}">{{$s->title}}</a>
                                            </div>
                                        </div>
                                       @endforeach
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                        @foreach($technology as $t)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{asset('images')}}/{{$t->image}}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="{{url('blog')}}/{{$t->id}}"> {{$t->title}}</a>
                                                </div>
                                            </div>
                                         @endforeach
                                        </div>
                                       
                                        <div id="latest" class="container tab-pane fade">
                                        @foreach($business as $b)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{asset('images')}}/{{$b->image}}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="{{url('blog')}}/{{$b->id}}"> {{$b->title}}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="{{asset('img/ads-2.jpg')}}" alt="Image"></a>
                                </div>
                            </div> -->

                            <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        <li><a href="">Sport</a><span>(98)</span></li>
                                        <li><a href="">Technology</a><span>(87)</span></li>
                                        <li><a href="">Business</a><span>(76)</span></li>
                                        <li><a href="">Entertainment</a><span>(65)</span></li>
                                        <!-- <li><a href="">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="">Technology</a><span>(43)</span></li>
                                        <li><a href="">Trades</a><span>(32)</span></li> -->
                                    </ul>
                                </div>
                            </div>

                            <!-- <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="{{asset('img/ads-2.jpg')}}" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Tags Cloud</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
     @endsection  