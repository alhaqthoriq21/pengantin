@extends('layouts.dashboard.master')

@section('title', "Pengantin")

@section('breadcumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-auto">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Comment</li>
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
            <div class="card" id="dataComment">
                <div class="card-header">
                    Daftar Comment
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-bordered table-outline mb-0" id="dataComment">
                        <thead class="thead-light">
                            <tr>
                                <th width="40px">No.</th>
                                <th>Nama Akun</th>
                                <th>Nama</th>
                                <!-- <th>Comment</th> -->
                                <th width="100px">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($comment as $data)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->calon->slug }}</td>
                                <td>{{ $data->nama }}</td>
                                <!-- <td>{{ $data->comment }}</td> -->
                                <td> <a href="{{route('comment.show', $data->id)}}"
                                        class="btn btn-primary btn-edit btn-sm" type="accept" data-value="{{$data->id}}"
                                        data-status="{{$data->status}}"><i class="fas fa-eye"></i></a><br>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination pagination-sm m-0 float-right mt-2">
                        {{$comment->links("vendor.pagination.bootstrap-4")}}
                    </div>
                </div>
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

@endpush