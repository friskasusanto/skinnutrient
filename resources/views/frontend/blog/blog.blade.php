@extends('frontend.layout.index', ['active' => 'blog'])
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
            <div class="col-12">
           
                <div class="row blog-media">
                @if(count($blog) != 0)
                    @foreach ($blog as $b)
                    <div class="col-xl-6">
                        <div class="blog-left">
                            <a href="{{url('/blogsDetail', $b->judul)}}">
                            @if($b->images == null)
                                <img src="{{asset('backends/assets/images/blog/1.jpg')}}" class="img-fluid blur-up lazyload bg-img" alt="">
                            @else
                                <img src="{{url('blog/'.$b->images)}}" class="img-fluid" alt="Responsive image" style="width: 100%; padding: 2%">
                            @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="blog-right">
                            <div>
                                <h6>{{$b->tgl_input}}</h6> 
                                <a href="{{url('/blogsDetail', $b->judul)}}">
                                    <h4>{{$b->judul}}</h4>
                                </a>
                                <ul class="post-social">
                                    <li>Posted By : {{$b->user->name}}</li>
                                    <li>
                                    @if ($b->love == 0)
                                        <i class="fa fa-heart"></i> 0 Hits
                                    @else
                                        <i class="fa fa-heart"></i> {{$b->love}} Hits
                                    @endif
                                    </li>
                                    <?php 
                                        $comment = App\Model\Comment::where('blog_id', $b->id)->get();
                                    ?>
                                    <li><i class="fa fa-comments"></i> {{count($comment)}} Comment</li>
                                    <!-- <p>{!!substr($b->text,1,200)!!} ...</p> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


@endsection