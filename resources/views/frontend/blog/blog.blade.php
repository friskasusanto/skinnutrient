@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')

<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>blog</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <!--Blog sidebar start-->
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="blog-sidebar">
                        <div class="theme-card">
                            <h4>Recent Blog</h4>
                            <ul class="recent-blog">
                            @if(count($blog) != 0)
                                @foreach ($recent as $r)
                                <li>
                                    <a href="{{url('/blogsDetail', $r->judul)}}">
                                        <div class="media">
                                        @if($r->images == null)
                                            <img class="img-fluid blur-up lazyload" src="{{asset('backends/assets/images/blog/1.jpg')}}" alt="Generic placeholder image">
                                        @else
                                            <img class="img-fluid blur-up lazyload" src="{{url('blog/'.$r->images)}}" alt="Generic placeholder image" style="width: 50%">
                                        @endif
                                            <div class="media-body align-self-center">
                                                <h6>{{$r->tgl_input}}</h6>
                                                <p>{{$r->love}} hits</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <br/><br/>
                                <center><h5>~ Comming Soon ~</h5></center>
                            @endif
                            </ul>
                        </div>
                        <div class="theme-card">
                            <h4>Popular Blog</h4>
                            <ul class="popular-blog">
                            @if(count($blog) != 0)
                                @foreach ($popular as $p)
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>{{$p->tgl_input}}</span></div>
                                        <div class="media-body align-self-center">
                                            <a href="{{url('/blogsDetail', $r->judul)}}">
                                                <h6>{{$p->judul}}</h6>
                                            </a>
                                            <p>{{$p->love}} hits</p>
                                        </div>
                                    </div>
                                    <a href="{{url('/blogsDetail', $r->judul)}}">
                                        <p>{!!substr($p->text,0,200)!!} ...</p>
                                    </a>
                                </li>
                                @endforeach
                            @else
                                <br/><br/>
                                <center><h5>~ Comming Soon ~</h5></center>
                            @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog sidebar start-->
                <!--Blog List start-->
                <div class="col-xl-9 col-lg-8 col-md-7 order-sec">
                    <div class="row blog-media">
                    @if(count($blog) != 0)
                        @foreach ($blog as $b)
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="{{url('/blogsDetail', $r->judul)}}">
                                @if($b->images == null)
                                    <img src="{{asset('backends/assets/images/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                @else
                                    <img src="{{url('blog/'.$b->images)}}" class="img-fluid blur-up lazyload bg-img" alt="" style="width: 50%">
                                @endif
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h6>{{$b->tgl_input}}</h6>
                                    <a href="{{url('/blogsDetail', $r->judul)}}">
                                        <h4>{{$b->judul}}</h4>
                                    </a>
                                    <ul class="post-social">
                                        <li>Posted By : {{$b->user->name}}</li>
                                        <li><i class="fa fa-heart"></i> {{$b->love}} Hits</li>
                                    <?php 
                                        $comment = App\Model\Comment::where('blog_id', $b->id)->get();
                                    ?>
                                        <li><i class="fa fa-comments"></i> {{count($comment)}} Comment</li>
                                    </ul>
                                    <a href="{{url('/blogsDetail', $r->judul)}}">
                                        <p>{!!substr($b->text,0,200)!!} ...</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <br/><br/><br/>
                        <div class="col-xl-12">
                            <center><p>~ Comming Soon ~</p></center>
                        </div>
                    @endif
                    </div>
                </div>
                <!--Blog List start-->
            </div>
        </div>
    </section>
    <!-- Section ends -->

@endsection