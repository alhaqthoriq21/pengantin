@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Akad Nikah</li>
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
            <div class="card" id="dataAkadNikah">
                <div class="card-header">
                    Daftar Akad Nikah
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-add btn-sm float-right"><i class="fas fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-outline mb-0" id="dataAkadNikah">
                        <thead class="thead-light">
                            <tr>
                                <th width="40px">No.</th>
                                <th>Nama Akun</th>
                                <!-- <th>Tanggal</th>
                                <th>Waktu</th> -->
                                <th>Tempat</th>
                                <th>Status</th>
                                <th width="100px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($akadNikah as $data)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->calon->slug }}</td>
                                <!-- <td>{{ $data->tgl }}</td>
                                <td>{{ $data->waktu }}</td> -->
                                <td>{{ $data->tempat }}</td>
                                <td width="200px"> <a href="{{route('update.status.akadNikah', $data->id)}}"
                                        class="btn btn-primary btn-status btn-sm" type="accept"
                                        data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                            class="far fa-calendar-check"></i> Change Status</button><br>
                                <td><a href="{{route('akadNikah.detail', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('akadNikah.show', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-eye"></i></a><br>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-sm m-0 float-right mt-2">
                        {{$akadNikah->links("vendor.pagination.bootstrap-4")}}
                    </div>
                </div>
            </div>

            <div class="modal" tabindex="-1" role="dialog" id="modalUpdateStatus">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('akadNikah.updateStatus')}}" id="formUpdateStatus" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="akadNikahId" id="akadNikahId" value="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($statusAkadNikah as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card" id="tambahAkadNikah" style="display: none">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Akad Nikah</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('akadNikah.save')}}" method="post" id="formAkadNikah"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="akadNikahId">
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
                                <h5>Waktu Akad Nikah</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl" id="tgl" class="form-control" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Waktu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="waktu" id="waktu" placeholder="" min="1" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Tempat Akad Nikah</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tempat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tempat" id="tempat" placeholder="" min="1" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="alamat" id="alamat" class="form-control" rows="5" cols="33">
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
                                            <input name="google_loc" id="google_loc" placeholder="" min="1" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Status Akad Nikah</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <select name="status" id="status" class="form-control">
                                                @foreach ($statusAkadNikah as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
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
    </div>
    <!-- /.col-->
    </div>
    </form>
    <!-- /.col-->
    </div>
</section>

@endsection

@push("style")
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/datetime/daterangepicker/daterangepicker.css')}}">
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
    $("tbody").on("click", ".btn-status", function(e) {
        e.preventDefault();
        const akadNikahId = $(this).attr("data-value");
        const status = $(this).attr("data-status");
        $('#akadNikahId').val(akadNikahId);
        $('#status').val(status);

        $('#modalUpdateStatus').modal("show");
    })

    const btnAdd = $('.btn-add');
    const btnCancel = $('.btn-cancel');
    const dataAkadNikah = $('#dataAkadNikah');
    const tambahAkadNikah = $('#tambahAkadNikah');
    const formAkadNikah = $('#formAkadNikah');

    $('#tgl').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });



    btnAdd.click(function(e) {
        e.preventDefault();
        formAkadNikah.trigger("reset");
        showForm();
        $('#statusSave').val(0);
    })

    btnCancel.click(function(e) {
        e.preventDefault();
        formAkadNikah.trigger("reset");
        hideForm();
        $('#statusSave').val(0);
    })

    function showForm() {
        dataAkadNikah.hide();
        tambahAkadNikah.show();
    }

    function hideForm() {
        dataAkadNikah.show();
        tambahAkadNikah.hide();
    }
})
</script>
@endpush