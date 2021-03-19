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
                            <h5 class="h3 mb-0">Form Detail Calon Pengantin</h5>
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
                                                                    <input disabled name="slug" id="slug" placeholder=""
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
                                                                    <select disabled name="template" id="template"
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
                                                                    <input disabled name="nick_pria" id="nick_pria"
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
                                                                    <input disabled name="calon_pria" id="calon_pria"
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
                                                                    <input disabled name="sosmed_pria" id="sosmed_pria"
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input disabled name="ayah_pria" id="ayah_pria"
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
                                                                    <input disabled name="ibu_pria" id="ibu_pria"
                                                                        placeholder="" type="text" class="form-control"
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
                                                                    <input disabled name="nick_wanita" id="nick_wanita"
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
                                                                    <input disabled name="calon_wanita"
                                                                        id="calon_wanita" placeholder="" min="1"
                                                                        type="text" class="form-control"
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
                                                                    <input disabled name="sosmed_wanita"
                                                                        id="sosmed_wanita" placeholder="" min="1"
                                                                        type="text" class="form-control"
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Nama Ayah</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input disabled name="ayah_wanita" id="ayah_wanita"
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
                                                                    <input disabled name="ibu_wanita" id="ibu_wanita"
                                                                        placeholder="" type="text" class="form-control"
                                                                        value="{{$calon->ibu_wanita}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 card--shadow">
                                                        <h5>Status Calon</h5>
                                                        <div class="row form-group">
                                                            <div class="col-sm-4">
                                                                <label for="" class="col-form-label">Status</label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="d-flex flex-row">
                                                                    <input disabled name="status" id="status"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
                                                                        value="{{$calon->calon_status_desc}}">
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
                                                                    <input disabled name="tgl" id="tgl"
                                                                        class="form-control"
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
                                                                    <input disabled name="waktu" id="waktu"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
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
                                                                    <input disabled name="tempat" id="tempat"
                                                                        placeholder="" min="1" type="text"
                                                                        class="form-control"
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
                                                                    <textarea disabled name="alamat" id="alamat"
                                                                        placeholder="" class="form-control" value="">
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
                                                                    <input disabled name="google_loc" id="google_loc"
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
                                                                    <input disabled name="tgl_rsp" id="tgl_rsp"
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
                                                                    <input disabled name="waktu_rsp" id="waktu_rsp"
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
                                                                    <input disabled name="tempat_rsp" id="tempat_rsp"
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
                                                                    <textarea disabled name="alamat_rsp" id="alamat_rsp"
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
                                                                    <input disabled name="google_loc_rsp"
                                                                        id="google_loc_rsp" placeholder="" min="1"
                                                                        type="text" class="form-control"
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
                                                                    <input disabled name="judul" id="judul"
                                                                        placeholder="" type="text" class="form-control"
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
                                                                    <textarea disabled name="isi" id="isi"
                                                                        placeholder="" class="form-control" rows="5"
                                                                        cols="33">
                                                                    </textarea>
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
                                                                    <input disabled name="tgl_firstmeet"
                                                                        id="tgl_firstmeet" type="text"
                                                                        class="form-control"
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
                                                                    <textarea disabled name="story_firstmeet"
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
                                                                    <input disabled name="tgl_firstdate"
                                                                        id="tgl_firstdate" type="text"
                                                                        class="form-control"
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
                                                                    <textarea disabled name="story_firstdate"
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
                                                                    <input disabled name="tgl_relationship"
                                                                        id="tgl_relationship" type="text"
                                                                        class="form-control"
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
                                                                    <textarea disabled name="story_relationship"
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
                                                                    <input disabled name="tgl_enganged"
                                                                        id="tgl_enganged" type="text"
                                                                        class="form-control"
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
                                                                    <textarea disabled name="story_enganged"
                                                                        id="story_enganged" class="form-control"
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
                                                                    @if($calon->loveStory->foto_enganged)
                                                                    <img width="100px"
                                                                        src="{{url($calon->loveStory->foto_enganged)}}"
                                                                        alt="" srcset="">
                                                                    @endif
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

@push('scripts')

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


})
</script>
@endpush