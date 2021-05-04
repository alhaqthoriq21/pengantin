@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Foto Header</li>
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

            <div class="card" id="tambahFotoHeader">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="h3 mb-0">Form Update Foto Header</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <form action="{{route('fotoHeader.update', $fotoHeader->id)}}" method="post" id="formFotoHeader"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="fotoHeaderId">
                        <input type="hidden" id="statusSave">
                        <div class="row">
                            <div class="col-12 card--shadow">
                                <h5>Akun</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Akun</label>
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
                                <h5>Foto Header (Isi 2 Foto hanya untuk Premium)</h5>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto Header</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <div class="d-flex flex-row">
                                                @if($fotoHeader->foto_header)
                                                <img width="100px" src="{{url($fotoHeader->foto_header)}}" alt=""
                                                    srcset="">
                                                @endif
                                            </div>
                                            <input type="file" name="foto_header" id="foto_header" class="form-control"
                                                accept="image/*">
                                            <div id="uploadProgress"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-4">
                                        <label for="" class="col-form-label">Foto Countdown</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="d-flex flex-row">
                                            <div class="d-flex flex-row">
                                                @if($fotoHeader->foto_countdown)
                                                <img width="100px" src="{{url($fotoHeader->foto_countdown)}}" alt=""
                                                    srcset="">
                                                @endif
                                            </div>
                                            <input type="file" name="foto_countdown" id="foto_countdown"
                                                class="form-control" accept="image/*">
                                            <div id="uploadProgress"></div>
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
    <!-- /.col-->
    </div>
    <!-- /.col-->
    </div>
</section>

@endsection

@push('scripts')
<script>
$(document).ready(function() {

    $('#calon_id').val("{{$fotoHeader->calon_id}}");

})
</script>
@endpush