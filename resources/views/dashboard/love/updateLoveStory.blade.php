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

            <div class="card" id="tambahLoveStory">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Update Love Story</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('loveStory.update', $loveStory->id)}}" method="post" id="formLoveStory"
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
                                                class="form-control" value="{{$loveStory->tgl_firstmeet}}">
                                        </div>
                                    </div>
                                </div>
                                <div class=" row form-group">
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
                                            @if($loveStory->foto_firstmeet)
                                            <img width="100px" src="{{url($loveStory->foto_firstmeet)}}" alt=""
                                                srcset="">
                                            @endif
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
                                                class="form-control" value="{{$loveStory->tgl_firstdate}}">
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
                                            @if($loveStory->foto_firstdate)
                                            <img width="100px" src="{{url($loveStory->foto_firstdate)}}" alt=""
                                                srcset="">
                                            @endif
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
                                                class="form-control" value="{{$loveStory->tgl_relationship}}">
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
                                            @if($loveStory->foto_relationship)
                                            <img width="100px" src="{{url($loveStory->foto_relationship)}}" alt=""
                                                srcset="">
                                            @endif
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
                                                class="form-control" value="{{$loveStory->tgl_enganged}}">
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
                                            @if($loveStory->foto_enganged)
                                            <img width="100px" src="{{url($loveStory->foto_enganged)}}" alt=""
                                                srcset="">
                                            @endif
                                            <input type="file" name="foto_enganged" id="foto_enganged"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
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

    $('#calon_id').val("{{$loveStory->calon_id}}");
    $('#story_firstmeet').val("{{$loveStory->story_firstmeet}}");
    $('#story_firstdate').val("{{$loveStory->story_firstdate}}");
    $('#story_relationship').val("{{$loveStory->story_relationship}}");
    $('#story_enganged').val("{{$loveStory->story_enganged}}");

})
</script>
@endpush