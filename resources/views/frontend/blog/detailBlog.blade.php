@extends('frontend.layout.index', ['active' => 'home'])
@section('title', 'User')
@section('content')
<!-- breadcrumb start-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>blog details</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.html">blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog deatils</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->


    <!--section start-->
    <section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail">
                    <img src="{{url('blog/'.$blog->images)}}" class="img-fluid blur-up lazyload" alt="" style="width: 100%">
                    <h3>{{$blog->judul}}</h3>
                    <ul class="post-social">
                        <li>{{$blog->tgl_input}}</li>
                        <li>Posted By : {{$blog->user->name}}</li>
                        <li><i class="fa fa-heart"></i> {{$blog->love}} Hits</li>
                        <?php 
                            $comment = App\Model\Comment::where('blog_id', $blog->id)->get();
                        ?>
                        <li><i class="fa fa-comments"></i> {{count($comment)}} Comment</li>
                    </ul>
                    <p>{!!$blog->text!!}</p>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row section-b-space">
                <div class="col-sm-12">
                    <ul class="comment-section">
                @if (count($comment) != 0)
                    @foreach ($comment as $c)
                        <li>
                            <div class="media">
                                <img src="{{asset('backends/assets/images/avtar.jpg')}}" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6>{{$c->name}}<span>( {{$c->created_at}} )</span></h6>
                                    <p>{{$c->comment}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif
                    </ul>
                </div>
            </div>
            <div class="row blog-contact">
                <div class="col-sm-12">
                    <h2>Leave Your Comment</h2>
                    <form class="theme-form" novalidate="novalidate" method="POST" action= "{{url('/comment', $blog->judul)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Your name" required="" name="name">
                            </div>
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="" name="email">
                            </div>
                            <div class="col-md-12">
                                <label for="exampleFormControlTextarea1">Comment</label>
                                <textarea class="form-control" placeholder="Write Your Comment"
                                    id="exampleFormControlTextarea1" rows="6" name="comment"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-solid" type="submit">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection