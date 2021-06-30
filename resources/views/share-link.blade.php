@extends('layouts.landing-page.master')

@section('title', 'Share Link')

@section('content')
    <div class="container">
        <form class="mb-3" action="{{ route('share.link') }}" method="POST" target="__blank">
            @csrf
            <input type="text" value="{{ $slug }}" name="slug" hidden>
            <div class="form-row justify-content-center align-items-center" style="margin-top: 200px">
                <div class="row">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $data)
                                    <li>{{ $data }}</li>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12 col-lg-5 form-group mb-3">
                        <label class="sr-only" for="noWhatsapp">Nomor WhatsApp</label>
                        <input type="number" class="form-control" value="{{ old('noWhatsapp') }}" id="noWhatsapp" name="noWhatsapp" placeholder="6285369584587" min="0">
                        <small>0 diganti menjadi 62</small>
                    </div>
                    <div class="col-sm-12 col-lg-5 form-group mb-3">
                        <label class="sr-only" for="namaTamu">Nama Tamu</label>
                        <input type="text" class="form-control" value="{{ old('namaTamu') }}" id="namaTamu" name="namaTamu" placeholder="Nama Tamu Undangan">
                    </div>
                    <div class="col-sm-12 col-lg-2">
                        <button type="submit" class="btn btn-primary mb-2 mt-4">Share Link</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection