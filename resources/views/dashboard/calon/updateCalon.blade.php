@extends('layouts.dashboard.master')

@section('title', "Pengantin")

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

            <div class="card" id="tambahCalon">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Update Calon Pengantin</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('calon.update', $calon->id)}}" method="post" id="formCalon"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="calonId">
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->slug}}">
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
                                                                        class="form-control"
                                                                        value="{{$calon->template}}">
                                                                        <option value="premium">Premium</option>
                                                                        <option value="gold">Gold</option>
                                                                        <option value="silver">Silver</option>
                                                                        <option value="bronze">Bronze</option>
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
                                                                <input type="text" name="color" id="color"
                                                                    value="{{$calon->color}}" class="form-control" />
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
                                                                    @if($calon->foto_gateway)
                                                                    <img width="100px"
                                                                        src="{{url($calon->foto_gateway)}}" alt=""
                                                                        srcset="">
                                                                    @endif
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
                                                                        class="form-control"
                                                                        value="{{$calon->size_font}}">
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
                                                                        value="{{$calon->nick_pria}}">
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
                                                                        class="form-control"
                                                                        value="{{$calon->calon_pria}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Sosmed</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="sosmed_pria" id="sosmed_pria"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="{{$calon->sosmed_pria}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Foto</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    @if($calon->foto_pria)
                                                                    <img width="100px" src="{{url($calon->foto_pria)}}"
                                                                        alt="" srcset="">
                                                                    @endif
                                                                    <input type="file" name="foto_pria" id="foto_pria"
                                                                        class="form-control" accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ayah_pria" id="ayah_pria"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="{{$calon->ayah_pria}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ibu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ibu_pria" id="ibu_pria" placeholder=""
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->ibu_pria}}">
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
                                                                        value="{{$calon->nick_wanita}}">
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
                                                                        class="form-control"
                                                                        value="{{$calon->calon_wanita}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Sosmed</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="sosmed_wanita" id="sosmed_wanita"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
                                                                        value="{{$calon->sosmed_wanita}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Foto</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    @if($calon->foto_wanita)
                                                                    <img width="100px"
                                                                        src="{{url($calon->foto_wanita)}}" alt=""
                                                                        srcset="">
                                                                    @endif
                                                                    <input type="file" name="foto_wanita"
                                                                        id="foto_wanita" class="form-control"
                                                                        accept="image/*">
                                                                    <div id="uploadProgress"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ayah_wanita" id="ayah_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="{{$calon->ayah_wanita}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ibu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="ibu_wanita" id="ibu_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="{{$calon->ibu_wanita}}">
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
                                                                        value="{{$calon->akadNikah->tgl}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Waktu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="waktu" id="waktu" placeholder=""
                                                                        min="1" type="text" class="form-control"
                                                                        value="{{$calon->akadNikah->waktu}}">
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
                                                                    <input name="tempat" id="tempat" placeholder=""
                                                                        min="1" type="text" class="form-control"
                                                                        value="{{$calon->akadNikah->tempat}}">
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
                                                                    Location</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="google_loc" id="google_loc"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
                                                                        value="{{$calon->akadNikah->google_loc}}">
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
                                                                        class="form-control"
                                                                        value="{{$calon->resepsi->tgl_rsp}}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Waktu</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="waktu_rsp" id="waktu_rsp"
                                                                        class="form-control"
                                                                        value="{{$calon->resepsi->waktu_rsp}}">
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
                                                                    <input name="tempat_rsp" id="tempat_rsp"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
                                                                        value="{{$calon->resepsi->tempat_rsp}}">
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
                                                                    Location</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="google_loc_rsp" id="google_loc_rsp"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
                                                                        value="{{$calon->resepsi->google_loc_rsp}}">
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
                                                                <label for="" class="col-form-label">Judul</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input name="judul" id="judul" placeholder=""
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->quotes->judul}}">
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
                                                                    <input name="judul" id="judul" placeholder=""
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->song->judul_song}}">
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->song->song}}">
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->loveStory->tgl_firstmeet}}">
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
                                                                    @if($calon->loveStory->foto_firstmeet)
                                                                    <img width="100px"
                                                                        src="{{url($calon->loveStory->foto_firstmeet)}}"
                                                                        alt="" srcset="">
                                                                    @endif
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->loveStory->tgl_firstdate}}">
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
                                                                    @if($calon->loveStory->foto_firstdate)
                                                                    <img width="100px"
                                                                        src="{{url($calon->loveStory->foto_firstdate)}}"
                                                                        alt="" srcset="">
                                                                    @endif
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->loveStory->tgl_relationship}}">
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
                                                                    @if($calon->loveStory->foto_relationship)
                                                                    <img width="100px"
                                                                        src="{{url($calon->loveStory->foto_relationship)}}"
                                                                        alt="" srcset="">
                                                                    @endif
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
                                                                        type="text" class="form-control"
                                                                        value="{{$calon->loveStory->tgl_enganged}}">
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
                                                                    @if($calon->loveStory->foto_enganged)
                                                                    <img width="100px"
                                                                        src="{{url($calon->loveStory->foto_enganged)}}"
                                                                        alt="" srcset="">
                                                                    @endif
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
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap.min.css')}}" rel="stylesheet"
    media="screen">
<link href="{{asset('assets/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css')}}"
    rel="stylesheet" media="screen">
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
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>


<script>
$(document).ready(function() {

    $('#template').val("{{$calon->template}}");
    $('#alamat').val("{{$calon->akadNikah->alamat}}");
    $('#alamat_rsp').val("{{$calon->resepsi->alamat_rsp}}");
    $('#isi').val("{{$calon->quotes->isi}}");
    $('#story_firstmeet').val("{{$calon->loveStory->story_firstmeet}}");
    $('#story_firstdate').val("{{$calon->loveStory->story_firstdate}}");
    $('#story_relationship').val("{{$calon->loveStory->story_relationship}}");
    $('#story_enganged').val("{{$calon->loveStory->story_enganged}}");


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

    $('#color').colorpicker({
        popover: false,
        inline: false,
        format: "RGB",
        container: '#color'
    });

    $('#color').on('colorpickerChange', function(event) {
        $('#color .fa-square').css('color', event.color.toString());
    });

    document.getElementById("color").value;

})
</script>
@endpush