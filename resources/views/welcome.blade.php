@extends('layouts.app1')
@section('content')
     

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            @foreach ($all as $all)
                            <div class="col-md-6">
                                <div class="tn-img">
                                <img src="images/{{$all->image}}" width="450px" height="350px" />
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}" >{{$all->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach($entertainment as $enter)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="images/{{$enter->image}}"  />
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$enter->id}}">{{$enter->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sports</h2>
                        <div class="row cn-slider">
                            @foreach($sport as $all)    
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="images/{{$all->image}}" width="225px" height="175px" />
                                    <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}">{{$all->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Technology</h2>
                        <div class="row cn-slider">
                        @foreach($technology as $all)   
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="images/{{$all->image}}" width="225px" height="175px" />
                                    <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}">{{$all->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Business</h2>
                        <div class="row cn-slider">
                        @foreach($business as $all) 
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="images/{{$all->image}}" width="225px" height="175px"/>
                                    <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}">{{$all->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Entertainment</h2>
                        <div class="row cn-slider">
                        @foreach($entertainment as $all)
                            <div class="col-md-6"> 
                                <div class="cn-img">
                                    <img src="images/{{$all->image}}" width="225px" height="175px" />
                                    <div class="cn-title">
                                        <a href="{{url('blog')}}/{{$all->id}}">{{$all->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                @foreach($sport as $sport)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$sport->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$sport->id}}">{{$sport->title}}</a>
                                    </div>
                                </div>
                                @endforeach 
                            </div>
                            <div id="popular" class="container tab-pane fade">
                            @foreach($technology as $tech)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$tech->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$tech->id}}">{{$tech->title}}</a>
                                    </div>
                                </div>
                            @endforeach 
                            </div>
                            <div id="latest" class="container tab-pane fade">
                            @foreach($entertainment as $enter)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$enter->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$enter->id}}">{{$enter->title}}</a>
                                    </div>
                                </div>
                            @endforeach 
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                            @foreach($technology as $tech)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$tech->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$tech->id}}">{{$tech->title}}</a>
                                    </div>
                                </div>
                            @endforeach    
                        </div>
                            <div id="m-read" class="container tab-pane fade">
                            @foreach($business as $business)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$business->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$business->id}}">{{$business->title}}</a>
                                    </div>
                                </div>
                            @endforeach  
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                            @foreach($entertainment as $enter)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="images/{{$enter->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{url('blog')}}/{{$enter->id}}">{{$enter->title}}</a>
                                    </div>
                                </div>
                            @endforeach  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                        @foreach($technology as $tech)
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="images/{{$tech->image}}" width="200px" height="200px"/>
                                    <div class="mn-title">
                                        <a href="{{url('blog')}}/{{$tech->id}}">{{$tech->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach  
                        </div>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                            @foreach($technology as $tech)
                                <li><a href="{{url('blog')}}/{{$tech->id}}">{{$tech->title}}</a></li>
                            @endforeach   
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        @endsection