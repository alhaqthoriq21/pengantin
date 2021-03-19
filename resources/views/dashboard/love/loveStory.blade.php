@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Love Story</li>
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
            <div class="card" id="dataLoveStory">
                <div class="card-header">
                    Daftar Love Story
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-add btn-sm float-right"><i class="fas fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-outline mb-0" id="dataLoveStory">
                        <thead class="thead-light">
                            <tr>
                                <th width="40px">No.</th>
                                <!-- <th>Akun</th> -->
                                <th>Nama Akun</th>
                                <th>Status</th>
                                <th width="100px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($loveStory as $data)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->calon->slug }}</td>
                                <td width="200px"> <a href="{{route('update.status.loveStory', $data->id)}}"
                                        class="btn btn-primary btn-status btn-sm" type="accept"
                                        data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                            class="far fa-calendar-check"></i> Change Status</button><br>
                                <td><a href="{{route('loveStory.detail', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('loveStory.show', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-eye"></i></a><br>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-sm m-0 float-right mt-2">
                        {{$loveStory->links("vendor.pagination.bootstrap-4")}}
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
                        <form action="{{route('loveStory.updateStatus')}}" id="formUpdateStatus" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="loveStoryId" id="loveStoryId" value="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($statusLoveStory as $key => $value)
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

            <div class="card" id="tambahLoveStory" style="display: none">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Love Story</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('loveStory.save')}}" method="post" id="formLoveStory"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="loveStoryId">
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
                                <h5>First Meet</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl_firstmeet" id="tgl_firstmeet" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Story</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="story_firstmeet" id="story_firstmeet" class="form-control"
                                                rows="5" cols="33">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input type="file" name="foto_firstmeet" id="foto_firstmeet"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>First Date</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl_firstdate" id="tgl_firstdate" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Story</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="story_firstdate" id="story_firstdate" class="form-control"
                                                rows="5" cols="33">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input type="file" name="foto_firstdate" id="foto_firstdate"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>In Relationship</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl_relationship" id="tgl_relationship" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Story</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="story_relationship" id="story_relationship"
                                                class="form-control" rows="5" cols="33">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input type="file" name="foto_relationship" id="foto_relationship"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Enganged</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Tanggal</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input name="tgl_enganged" id="tgl_enganged" type="text"
                                                class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Story</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <textarea name="story_enganged" id="story_enganged" class="form-control"
                                                rows="5" cols="33">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <input type="file" name="foto_enganged" id="foto_enganged"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 card--shadow">
                                <h5>Status Love Story</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Status</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <select name="status" id="status" class="form-control">
                                                @foreach ($statusLoveStory as $key => $value)
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
        const loveStoryId = $(this).attr("data-value");
        const status = $(this).attr("data-status");
        $('#loveStoryId').val(loveStoryId);
        $('#status').val(status);

        $('#modalUpdateStatus').modal("show");
    })

    const btnAdd = $('.btn-add');
    const btnCancel = $('.btn-cancel');
    const dataLoveStory = $('#dataLoveStory');
    const tambahLoveStory = $('#tambahLoveStory');
    const formLoveStory = $('#formLoveStory');


    btnAdd.click(function(e) {
        e.preventDefault();
        formLoveStory.trigger("reset");
        showForm();
        $('#statusSave').val(0);
    })

    btnCancel.click(function(e) {
        e.preventDefault();
        formLoveStory.trigger("reset");
        hideForm();
        $('#statusSave').val(0);
    })

    function showForm() {
        dataLoveStory.hide();
        tambahLoveStory.show();
    }

    function hideForm() {
        dataLoveStory.show();
        tambahLoveStory.hide();
    }
})
</script>
@endpush