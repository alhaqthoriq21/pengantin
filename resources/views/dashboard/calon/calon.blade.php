@extends('layouts.dashboard.master')

@section('title', "Pengantin")

<head>
    <style>
    /* div.mid {
        position: absolute;
        top: 200px;
        left: 300px;
        width: 300px;
        height: 300px;
        border: 1px solid black;
    }

    input[type="text"] {
        position: relative;
        display: block;
        margin: 0 auto;
    } */

    /* input[type="color"].custom {
        padding: 0;
        border: none;
        height: 50px;
        width: 50px;
        vertical-align: middle;
    } */
    </style>
</head>

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Calon Pengantin</li>
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
            <div class="card" id="dataCalon">
                <div class="card-header">
                    Daftar Calon Pengantin
                    <div class="col-md-12">
                        <button class="btn btn-primary btn-add btn-sm float-right"><i class="fas fa-plus"></i> Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-outline mb-0" id="dataCalon">
                        <thead class="thead-light">
                            <tr>
                                <th width="40px">No.</th>
                                <th>Uniq Link</th>
                                <th>Nama Pengantin Pria</th>
                                <th>Nama Pengantin Wanita</th>
                                <th>Status</th>
                                <th width="100px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($calon as $data)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->slug }}</td>
                                <td>{{ $data->calon_pria }}</td>
                                <td>{{ $data->calon_wanita }}</td>
                                <td width="200px"> <a href="{{route('update.status.calon', $data->id)}}"
                                        class="btn btn-primary btn-status btn-sm" type="accept"
                                        data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                            class="far fa-calendar-check"></i> Change Status</button><br>
                                <td><a href="{{route('calon.detail', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('calon.show', $data->id)}}" class="btn btn-primary btn-edit btn-sm"
                                        type="accept" data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                            class="fas fa-eye"></i></a><br>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-sm m-0 float-right mt-2">
                        {{$calon->links("vendor.pagination.bootstrap-4")}}
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
                        <form action="{{route('calon.updateStatus')}}" id="formUpdateStatus" method="POST">
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="calonId" id="calonId" value="0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach ($statusCalon as $key => $value)
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

            <div class="card" id="tambahCalon" style="display: none">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Calon Pengantin</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('calon.save')}}" method="post" id="formCalon" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="calonId" name="calonId">
                        <input type="hidden" id="statusSave">
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-four-home-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-home" role="tab"
                                                    aria-controls="custom-tabs-four-home" aria-selected="true">Calon</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-profile" role="tab"
                                                    aria-controls="custom-tabs-four-profile" aria-selected="false">Akad
                                                    Nikah</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-messages-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-messages" role="tab"
                                                    aria-controls="custom-tabs-four-messages"
                                                    aria-selected="false">Resepsi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-loveStory-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-loveStory" role="tab"
                                                    aria-controls="custom-tabs-four-loveStory"
                                                    aria-selected="false">Love Story</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-settings-tab"
                                                    data-toggle="pill" href="#custom-tabs-four-settings" role="tab"
                                                    aria-controls="custom-tabs-four-settings"
                                                    aria-selected="false">Quotes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-four-song-tab" data-toggle="pill"
                                                    href="#custom-tabs-four-song" role="tab"
                                                    aria-controls="custom-tabs-four-song" aria-selected="false">Song</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-four-home"
                                                role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                                <div class='tab-pane'>
                                                    <div class="col-12 card--shadow">
                                                        <h5>UNIQ Link</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Slug</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="slug" id="slug" placeholder=""
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Pick Template</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Template</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <select name="template" id="template"
                                                                        class="form-control" value="">
                                                                        <option value="premium">Premium</option>
                                                                        <option value="gold">Gold</option>
                                                                        <option value="silver">Silver</option>
                                                                        <option value="bronze">Bronze</option>
                                                                        <option value="honey">Honey</option>
                                                                        <!-- <option value="cherry">Cherry</option>
                                                                        <option value="clone">Clone</option> -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Pick Background
                                                                    Color</label>
                                                            </div>
                                                            <div id="color" class="input-group color">
                                                                <input type="text" name="color" id="color" value=""
                                                                    class="form-control" />
                                                                <div class="input-group-append">
                                                                    <span
                                                                        class="input-group-text colorpicker-component"><i
                                                                            class="fas fa-square"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Foto
                                                                    Gateway</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input type="file" name="foto_gateway"
                                                                        id="foto_gateway" class="form-control"
                                                                        accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Size Font</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="size_font" id="size_font"
                                                                        placeholder="" type="number"
                                                                        class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Calon Pengantin Pria</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama
                                                                    Panggilan</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="nick_pria" id="nick_pria"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama
                                                                    Lengkap</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="calon_pria" id="calon_pria"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Sosmed (* Username
                                                                    saja)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="sosmed_pria" id="sosmed_pria"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Foto</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input type="file" name="foto_pria" id="foto_pria"
                                                                        class="form-control" accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah (*Tanpa
                                                                    Keterangan "Bpk")</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ayah_pria" id="ayah_pria"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ibu (*Tanpa
                                                                    Keterangan "Ibu")</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ibu_pria" id="ibu_pria" placeholder=""
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Calon Pengantin Wanita</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama
                                                                    Panggilan</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="nick_wanita" id="nick_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama
                                                                    Lengkap</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="calon_wanita" id="calon_wanita"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Sosmed (* Username
                                                                    saja)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="sosmed_wanita" id="sosmed_wanita"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Foto</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input type="file" name="foto_wanita"
                                                                        id="foto_wanita" class="form-control"
                                                                        accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah (*Tanpa
                                                                    Keterangan "Bpk")</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ayah_wanita" id="ayah_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ibu (*Tanpa
                                                                    Keterangan "Ibu")</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ibu_wanita" id="ibu_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Turut Mengundang (Tanda "," Sebagai Pemisah)</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Undang</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input type="text" data-role="tagsinput"
                                                                        name="undang" id="undang" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-profile-tab">
                                                <div class="tab-pane">
                                                    <div class="col-12 card--shadow">
                                                        <h5>Waktu Akad Nikah</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Tanggal</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="tgl" id="tgl" class="form-control"
                                                                        value="" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Waktu (* 08.00 s/d
                                                                    13.00 WIB)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="waktu" id="waktu" placeholder=""
                                                                        min="1" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Tempat Akad Nikah</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Tempat (* Gedung
                                                                    Dakwah Sindangkasih)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="tempat" id="tempat" placeholder=""
                                                                        min="1" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Alamat</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="alamat" id="alamat" placeholder=""
                                                                        class="form-control" value="">
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Google
                                                                    Location (Isikan Latitude & Longtitude Dari GMaps
                                                                    *contoh (-7.297906,108.232898))</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="google_loc" id="google_loc" type="text"
                                                                        class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-messages-tab">
                                                <div class="tab-pane">
                                                    <div class="col-12 card--shadow">
                                                        <h5>Waktu Resepsi</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Tanggal</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="tgl_rsp" id="tgl_rsp"
                                                                        class="form-control" value="" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Waktu (* 08.00 s/d
                                                                    13.00 WIB)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="waktu_rsp" id="waktu_rsp"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Tempat Resepsi</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Tempat (* Gedung
                                                                    Dakwah Sindangkasih)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="tempat_rsp" id="tempat_rsp"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control" rows="5" cols="33">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Alamat</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="alamat_rsp" id="alamat_rsp"
                                                                        placeholder="" class="form-control" rows="5"
                                                                        cols="33">
                                                                </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Google
                                                                    Location (Isikan Latitude & Longtitude Dari GMaps
                                                                    *contoh (-7.297906,108.232898))</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="google_loc_rsp" id="google_loc_rsp"
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-settings-tab">
                                                <div class="tab-pane">
                                                    <div class="col-12 card--shadow">
                                                        <h5>Quotes</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Judul (* Ayat atau
                                                                    Quotes Kutipan Yang Dimaksud)</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="judul" id="judul" placeholder=""
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Isi</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="isi" id="isi" placeholder=""
                                                                        class="form-control" rows="5" cols="33">
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-song" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-song-tab">
                                                <div class="tab-pane">
                                                    <div class="col-12 card--shadow">
                                                        <h5>Song</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Judul Lagu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="judul_song" id="judul_song"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Link Lagu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="song" id="song" placeholder=""
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-four-loveStory" role="tabpanel"
                                                aria-labelledby="custom-tabs-four-loveStory-tab">
                                                <div class="tab-pane">
                                                    <div class="col-12 card--shadow">
                                                        <h5>First Meet</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Tanggal</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="tgl_firstmeet" id="tgl_firstmeet"
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Story</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="story_firstmeet"
                                                                        id="story_firstmeet" class="form-control"
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
                                                                    <input type="file" name="foto_firstmeet"
                                                                        id="foto_firstmeet" class="form-control"
                                                                        accept="image/*">
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
                                                                    <input name="tgl_firstdate" id="tgl_firstdate"
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Story</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="story_firstdate"
                                                                        id="story_firstdate" class="form-control"
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
                                                                    <input type="file" name="foto_firstdate"
                                                                        id="foto_firstdate" class="form-control"
                                                                        accept="image/*">
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
                                                                    <input name="tgl_relationship" id="tgl_relationship"
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Story</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="story_relationship"
                                                                        id="story_relationship" class="form-control"
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
                                                                    <input type="file" name="foto_relationship"
                                                                        id="foto_relationship" class="form-control"
                                                                        accept="image/*">
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
                                                                    <input name="tgl_enganged" id="tgl_enganged"
                                                                        type="text" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Story</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <textarea name="story_enganged" id="story_enganged"
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
                                                                    <input type="file" name="foto_enganged"
                                                                        id="foto_enganged" class="form-control"
                                                                        accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
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
    </div>
    <!-- /.col-->
    </div>
    </form>
    <!-- /.col-->
    </div>
</section>

@endsection

@push("style")
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap.min.css')}}" rel="stylesheet"
    media="screen">
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css')}}"
    rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/taginput/bootstrap-tagsinput.css')}}">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">

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
<script type="text/javascript" src="{{asset('assets/plugins/taginput/bootstrap-tagsinput.js')}}"></script>

<!-- <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script> -->
<!-- bootstrap color picker -->
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>


<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script>
$(document).ready(function() {
    $("tbody").on("click", ".btn-status", function(e) {
        e.preventDefault();
        const calonId = $(this).attr("data-value");
        const status = $(this).attr("data-status");
        $('#calonId').val(calonId);
        $('#status').val(status);

        $('#modalUpdateStatus').modal("show");
    })

    const btnAdd = $('.btn-add');
    const btnCancel = $('.btn-cancel');
    const dataCalon = $('#dataCalon');
    const tambahCalon = $('#tambahCalon');
    const formCalon = $('#formCalon');


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

    // $('#cp3a').colorpicker();


    $('#color').colorpicker({
        popover: false,
        inline: false,
        format: "RGB",
        container: '#color'
    });

    // $('.my-colorpicker2').colorpicker()

    $('#color').on('colorpickerChange', function(event) {
        $('#color .fa-square').css('color', event.color.toString());
    });

    // $("input[data-bootstrap-switch]").each(function() {
    //     $(this).bootstrapSwitch('state', $(this).prop('checked'));
    // });

    // $('#color').on('colorpickerChange', function(event) {
    //     $('#color .fa-square').css('color', event.color.toString());
    // });

    btnAdd.click(function(e) {
        e.preventDefault();
        formCalon.trigger("reset");
        showForm();
        $('#statusSave').val(0);
    })

    btnCancel.click(function(e) {
        e.preventDefault();
        formCalon.trigger("reset");
        hideForm();
        $('#statusSave').val(0);
    })

    function showForm() {
        dataCalon.hide();
        tambahCalon.show();
    }

    function hideForm() {
        dataCalon.show();
        tambahCalon.hide();
    }
})
</script>
@endpush