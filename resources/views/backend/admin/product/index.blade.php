@extends('backend.layout.index', ['active' => 'list_product'])
@section('title', 'User')
@section('content')

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
                                    <label>Title</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" placeholder="title" name="title" required value="{{$u->title}}">
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
                                    <label>Harga</label>
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
                                    <label>Descrioption</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <textarea type="text" class="form-control" id="" name="description" required style="width: 100%" rows="4" >{{$u->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga Minimal</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="text" class="form-control" id="" name="min_price" required style="width: 100%" value="{{ucfirst($u->min_price)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga Maksimal</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                   <input type="text" class="form-control" id="" name="max_price" required style="width: 100%" value="{{ucfirst($u->max_price)}}">
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
                                          @if ($u->status == 1)
                                          <option value="">--sembunyikan--</option>
                                          @elseif ($u->status == 0)
                                          <option value="">--tampilkan--</option>
                                          @endif

                                          
                                          <option value= "1">sembunyikan</option>
                                          <option value= "0">tampilkan</option>
                                    </select>
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