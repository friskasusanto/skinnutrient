@extends('backend.layout.index', ['active' => 'pengaduan'])
@section('title', 'Pengaduan')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Pengaduan List
                        <small>Multikart Admin panel</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Pengaduan</li>
                    <li class="breadcrumb-item active">Pengaduan List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h5>Pengaduan List</h5>
        </div>
        <div class="card-body">
            <div id="batchDelete" class="category-table user-list order-table"></div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama Pelapor</th>
                                <th>Nama Pasien</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($pengaduan) != 0)
                            @foreach ($pengaduan as $key =>$u)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$u->nama_pelapor}}</td>
                                <td>{{$u->nama_pasien}}</td>
                                <td>
                                    <a type="btn" data-toggle="modal" data-target="#modalDetail{{$u->id}}" class="btn btn-success btn-circle btn-sm" style="font-size: xx-small;">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4"><center>KOSONG</center></td>
                            </tr>
                        @endif 
                        </tbody>
                    </table>
                    {{$pengaduan->render()}}
                </div>
            </div>
        </div>
    </div>
</div>


@if(isset($pengaduan))
@foreach( $pengaduan as $u )
<div class="modal" id="modalDetail{{$u->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><center>Detail Pengaduan</center></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <tr>
                    <th>Nama Pelapor</th>
                    <td>: {{ $u->nama_pelapor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Alamat Pelapor</th>
                    <td>: {{ $u->alamat_pelapor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Email Pelapor</th>
                    <td>: {{ $u->email_pelapor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Tlp Pelapor</th>
                    <td>: {{ $u->tlp_pelapor}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Nama Pasien</th>
                    <td>: {{$u->nama_pasien}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Kelamin Pasien</th>
                    <td>: {{$u->kelamin_pasien}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Umur Pasien</th>
                    <td>: {{$u->umur_pasien}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Alamat Pasien</th>
                    <td>: {{$u->alamat_pasien}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Email Pasien</th>
                    <td>: {{$u->email_pasien}}</td>
                </tr>
                <br/>
                <tr>
                    <th>Tlp Pasien</th>
                    <td>: {{ $u->tlp_pasien }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Nama Product</th>
                    <td>: {{ $u->nama_product }}</td>
                </tr>
                <br/>
                <tr>
                    <th>No Notifikasi</th>
                    <td>: {{ $u->no_notifikasi }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Ukuran Kemasan</th>
                    <td>: {{ $u->ukuran_kemasan }}</td>
                </tr>
                <br/>
                <tr>
                    <th>No Batch</th>
                    <td>: {{ $u->no_batch }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Bentuk Sediaan</th>
                    <td>: {{ $u->bentuk_sediaan }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Produsen</th>
                    <td>: {{ $u->produsen }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Distributor</th>
                    <td>: {{ $u->distributor }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Tgl Kejadian</th>
                    <td>: {{ $u->tgl_kejadian }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Efek</th>
                    <td>: {{ $u->efek }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Tindakan</th>
                    <td>: {{ $u->tindakan }}</td>
                </tr>
                <br/>
                <tr>
                    <th>Foto</th>
                    <td>: <img src="{{url('bpom/'.$u->foto)}}" alt="..." style="width: 20%"></td>
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

@endsection