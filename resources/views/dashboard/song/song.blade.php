@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Song</li>
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
            <div class="card" id="dataSong">
                <div class="card-header">
                    Daftar Lagu
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-add btn-sm float-right"><i class="fas fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-outline mb-0" id="dataSong">
                        <thead class="thead-light">
                            <tr>
                                <th width="40px">No.</th>
                                <th>Nama Akun</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th width="100px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = $page > 1 ? ($page - 1)*10 +1: 1; ?>
                            @foreach($song as $data)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->calon->slug }}</td>
                                <td>{{ $data->judul }}</td>
                                <td width="200px"> <a href="{{route('update.status.song', $data->id)}}"
                                        class="btn btn-primary btn-status btn-sm" type="accept"
                                        data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                            class="far fa-calendar-check"></i> Change Status</button><br>
                                <td><a href="{{route('song.detail', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-sm m-0 float-right mt-2">
                        {{$song->links("vendor.pagination.bootstrap-4")}}
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
                        <form action="{{route('song.updateStatus')}}" id="formUpdateStatus" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="songId" id="songId" value="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($statusSong as $key => $value)
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

            <div class="card" id="tambahSong" style="display: none">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Lagu</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('song.save')}}" method="post" id="formSong" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="songId">
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
                                <h5>Lagu</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Judul</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="judul" id="judul" placeholder="" min="1" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Link Lagu</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="song" id="song" placeholder="" min="1" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Status Lagu</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <select name="status" id="status" class="form-control">
                                                @foreach ($statusSong as $key => $value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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

@push('scripts')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script>
$(document).ready(function() {
    $("tbody").on("click", ".btn-status", function(e) {
        e.preventDefault();
        const songId = $(this).attr("data-value");
        const status = $(this).attr("data-status");
        $('#songId').val(songId);
        $('#status').val(status);

        $('#modalUpdateStatus').modal("show");
    })

    const btnAdd = $('.btn-add');
    const btnCancel = $('.btn-cancel');
    const dataSong = $('#dataSong');
    const tambahSong = $('#tambahSong');
    const formSong = $('#formSong');


    btnAdd.click(function(e) {
        e.preventDefault();
        formSong.trigger("reset");
        showForm();
        $('#statusSave').val(0);
    })

    btnCancel.click(function(e) {
        e.preventDefault();
        formSong.trigger("reset");
        hideForm();
        $('#statusSave').val(0);
    })

    function showForm() {
        dataSong.hide();
        tambahSong.show();
    }

    function hideForm() {
        dataSong.show();
        tambahSong.hide();
    }
})
</script>
@endpush