@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Reservasi</li>
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
            <div class="card" id="dataReservasi">
                <div class="card-header">
                    Daftar Reservasi
                </div>
                <!-- <a href="{{route('reservasi.cetak')}}" target="_blank" class="btn btn-primary">CETAK PDF</a> -->
                <table class='table table-bordered'>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered table-outline mb-0" id="dataReservasi">
                            <thead class="thead-light">
                                <tr>
                                    <th width="40px">No.</th>
                                    <th>Nama Akun</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th width="100px">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($reservasi as $data)
                                <tr>
                                    <th scope="row">{{ $no }}</th>
                                    <td>{{ $data->calon->slug }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->ket }}</td>
                                    <td> <a href="{{route('reservasi.show', $data->id)}}"
                                            class="btn btn-primary btn-edit btn-sm" type="accept"
                                            data-value="{{$data->id}}" data-status="{{$data->status}}"><i
                                                class="fas fa-eye"></i></a><br>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination pagination-sm m-0 float-right mt-2">
                            {{$reservasi->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
            </div>

            <form action="{{route('reservasi.cetak')}}" target="_blank" method="POST">
                <input type="hidden" id="calon_id">
                <!-- dd("calon_id"); -->
                @csrf
                <table>
                    <tbody>
                        <tr>
                            <td>Pasangan</td>
                            <td>:</td>
                            <td>
                                <select name="calon_id" id="calon_id" class="form-control">
                                    @foreach ($calon as $item)
                                    <option value="{{$item->id}}">{{$item->slug}}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <!-- <td><input type="submit" value="Cetak" /></td> -->
                            <td><button type="submit" class="btn btn-primary hidden-print"><span
                                        class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button></td>
                        </tr>

                    </tbody>
                </table>
            </form>
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

@endpush