@extends('backend.layout.index', ['active' => 'list_product'])
@section('title', 'User')
@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Product List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Product List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row products-admin ratio_asos">
    @if(count($product) != 0)
    @foreach ($product as $key =>$u)
        <div class="col-xl-3 col-sm-6">
            <div class="card">
            
                <div class="card-body product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="{{url('product/'.$u->image)}}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            <div class="product-hover">
                                <ul>
                                    <li>
                                        <a type="btn" data-toggle="modal" data-target="#modalEdit{{$u->id}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="{{url('/admin/delete/product', $u->id)}}" type="btn"><i class="fa fa-trash" style="color: #000"></i></a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a type="btn" data-toggle="modal" data-target="#modalDetail{{$u->id}}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="#">
                            <h6>{{$u->name}}</h6>
                        </a>
                        <h4>
                        @if ($u->discount != null)
                            Rp. {{number_format ($u->price - ($u->price * ($u->discount / 100)), 0, ".", ".")}} 
                            <del>Rp. {{number_format ($u->price, 0, ".", ".")}}</del>
                        @else
                            Rp. {{number_format ($u->price, 0, ".", ".")}}
                        @endif
                        </h4>
                    </div>
                </div>
            
            </div>
        </div>
        @endforeach
        {{$product->render()}}
        @else 
            <div class="col-12">
                <p align="center">~ Product Kosong ~</p>
            </div>
        @endif
    </div>
</div>

@if(isset($product))
@foreach( $product as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Data Product</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Nama Product</th>
                    <td>: {{ $u->name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Category Product</th>
                    <td>: {{ $u->category->category_name }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Harga</th>
                    <td>: {{ $u->price }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Deskripsi</th>
                    <td>: {!! $u->description !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Ingredients</th>
                    <td>: {!! $u->ingredients !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>How To Use</th>
                    <td>: {!! $u->how !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Shipping Police</th>
                    <td>: {!! $u->shipping_police !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Step</th>
                    <td>: {!! $u->step !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Composition</th>
                    <td>: {!! $u->composition !!}</td>
                </tr>
                <br/>
                <tr>
                    <th>Stock</th>
                    <td>: {{ $u->stock }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Gambar Utama</th>
                    <td>: <img src="{{url('product/'.$u->image)}}" alt="..." style="width: 20%"></td>
                </tr>
                <br/>
                <tr>
                    <th>Gambar Lain</th>
                    <td>: 
                        <?php 
                            $gambar = App\Model\ProductGambar::where('product_id', $u->id)->get();
                        ?>
                        @if (count($gambar) != 0)
                            @foreach ($gambar as $g)
                                <img src="{{url('product/'.$g->image)}}" alt="..." style="width: 20%">
                            @endforeach
                        @endif
                    </td>
                </tr>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@if(isset($product))
@foreach( $product as $u )
<div class="modal" id="modalEdit{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate="novalidate" method="POST" action= "{{url('/admin/edit/product', $u->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama Product</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="name" required style="width: 100%" value="{{ucfirst($u->name)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Category</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <select name="category" type="text" class="form-control" style="width: 100%">
                                        <option value="">--{{$u->category->category_name}}--</option>
                                        <option value="">--pilih category--</option>
                                        @foreach ($category as $p)
                                            <option value= "{{$p->id}}">{{$p->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga User</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="text" class="form-control" id="" name="price" required style="width: 100%" value="{{ucfirst($u->price)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Discount</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="text" class="form-control" id="" name="discount" required style="width: 100%" value="{{ucfirst($u->discount)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="description" id="summernoteDescription">{!!$u->description!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Detail</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="detail" id="summernoteDetail">{!!$u->detail!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ingredients</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="ingredients" id="summernoteIngredients">{!!$u->ingredients!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>How To Use</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="how" id="summernoteHow">{!!$u->how!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Shipping Police</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="shipping_police" id="summernoteShipping">{!!$u->shipping_police!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Step</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="step" id="summernoteStep">{!!$u->step!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Composition</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea class="form-control" name="composition" id="summernoteComposition">{!!$u->composition!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gambar Utama</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="file" class="form-control" id="" name="image" multiple required style="width: 100%" value="">
                                    <img src="{{url('product/'.$u->image)}}" alt="..." style="width: 20%">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Gambar lain (bisa pilih lebih dari 1 gambar)</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="file" class="form-control" id="" name="photos[]" multiple required style="width: 100%" value="">

                                    <?php 
                                        $gambar = App\Model\ProductGambar::where('product_id', $u->id)->get();
                                    ?>
                                    @if (count($gambar) != 0)
                                        @foreach ($gambar as $g)
                                            <img src="{{url('product/'.$g->image)}}" alt="..." style="width: 20%">
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Status</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <select name="status" type="text" class="form-control" style="width: 100%">
                                          <option value="">--pilih status--</option>
                                          @if ($u->status == 0)
                                          <option value="">--sembunyikan--</option>
                                          @elseif ($u->status == 1)
                                          <option value="">--tampilkan--</option>
                                          @elseif ($u->status == 2)
                                          <option value="">--comming soon--</option>
                                          @endif

                                          <option value= "2">comming soon</option>
                                          <option value= "1">sembunyikan</option>
                                          <option value= "0">tampilkan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Best Seller</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                @if ($u->best_seller == 1)
                                   <input class="file" type="checkbox" name="bestseller" multiple required checked="checked" value="0">
                                @else
                                    <input class="file" type="checkbox" name="bestseller" multiple required value="1">
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Comming Soon</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                @if ($u->comming_soon == 1)
                                   <input class="file" type="checkbox" name="comming_soon" multiple required checked="checked" value="0">
                                @else
                                    <input class="file" type="checkbox" name="comming_soon" multiple required value="1">
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info" id="btn_submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif

@endsection

@section('script')
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernoteDescription').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteDetail').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteIngredients').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteHow').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteShipping').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteStep').summernote({
        height: 200
    });
</script>
<script type="text/javascript">
    $('#summernoteComposition').summernote({
        height: 200
    });
</script>


@endsection