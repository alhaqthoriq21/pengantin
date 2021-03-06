@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Resepsi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection


@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="card" id="tambahResepsi">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Update Resepsi</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('resepsi.update', $resepsi->id)}}" method="post" id="formResepsi"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="resepsiId">
                        <input type="hidden" id="statusSave">
                        <div class="row">
                            <div class="col-12 card--shadow">
                                <h5>Akun</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Nama</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <select name="calon_id" id="calon_id" class="form-control">
                                                @foreach ($calon as $item)
                                                <option value="{{$item->id}}">{{$item->slug}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Waktu Resepsi</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl_rsp" id="tgl_rsp" class="form-control"
                                                value="{{$resepsi->tgl_rsp}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Waktu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="waktu_rsp" id="waktu_rsp" placeholder="" type="text"
                                                class="form-control" value="{{$resepsi->waktu_rsp}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Tempat Resepsi</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tempat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tempat_rsp" id="tempat_rsp" placeholder="" type="text"
                                                class="form-control" value="{{$resepsi->tempat_rsp}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="alamat_rsp" id="alamat_rsp" class="form-control">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Google Location</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="google_loc_rsp" id="google_loc_rsp" placeholder="" type="text"
                                                class="form-control" value="{{$resepsi->google_loc_rsp}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn btn-success btn-save" type="submit"><i class="fas fa-save"></i>
                                    Simpan</button>
                                <button class="btn btn-warning btn-cancel" type="button"><i class="fas fa-times"></i>
                                    Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.col-->
    </div>
</section>

@endsection

@push("style")
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datetime/daterangepicker/daterangepicker.css')}}"> -->
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap.min.css')}}" rel="stylesheet"
    media="screen">
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css')}}"
    rel="stylesheet" media="screen">


@endpush

@push('scripts')
<script type="text/javascript"
    src="{{asset('assets/plugins/bootstrap-datetimepicker-master/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8">
</script>
<script type="text/javascript"
    src="{{asset('assets/plugins/bootstrap-datetimepicker-master/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript"
    src="{{asset('assets/plugins/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js')}}" charset="UTF-8">
</script>
<script type="text/javascript"
    src="{{asset('assets/plugins/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.fr.js')}}"
    charset="UTF-8"></script>

<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script>
$(document).ready(function() {

    $('#calon_id').val("{{$resepsi->calon_id}}");
    $('#alamat_rsp').val("{{$resepsi->alamat_rsp}}");

    $('#tgl_rsp').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

})
</script>
@endpush