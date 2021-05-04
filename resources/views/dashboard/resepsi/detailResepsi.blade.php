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
                            <h5 class="h3 mb-0">Form Detail Akad Nikah</h5>
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
                                            <select disabled name="calon_id" id="calon_id" class="form-control">
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
                                            <input name="tgl" id="tgl" placeholder="" type="text" class="form-control"
                                                readonly value="{{$resepsi->tgl}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Waktu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="waktu" id="waktu" placeholder="" type="text"
                                                class="form-control" readonly value="{{$resepsi->waktu}}">
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
                                            <input name="tempat" id="tempat" placeholder="" type="text"
                                                class="form-control" readonly value="{{$resepsi->tempat}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea readonly name="alamat" id="alamat" class="form-control" rows="5"
                                                cols="33">
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
                                            <input name="google_loc" id="google_loc" placeholder="" type="text"
                                                class="form-control" readonly value="{{$resepsi->google_loc}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Status Resepsi</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="status" id="status" placeholder="" type="text"
                                                class="form-control" readonly value="{{$resepsi->resepsi_status_desc}}">
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
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datetime/daterangepicker/daterangepicker.css')}}">

@endpush

@push('scripts')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script>
$(document).ready(function() {

    $('#calon_id').val("{{$resepsi->calon_id}}");
    $('#alamat').val("{{$resepsi->alamat}}");

})
</script>
@endpush