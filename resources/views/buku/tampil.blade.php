@extends ('template')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="page-title mb-0 p-0">Buku</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Data</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Buku</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-info text-center mb-0 p-0">Data Barang</h2>
                        <div class="table-responsive">
                            @include('flashmassage')
                            {{-- <a href="{{url ('sewa/create')}}" class="btn btn-info text-light mt-2 mb-2 ms-2">Tambah +</a>
                            <select class="form-select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select> --}}
                            <table class="table">
                                {{-- <caption>
                                    <small>
                                        Tampil dari <span style="font-weight: bold;"><?=$data->FirstItem()?></span> sampai <span style="font-weight: bold;"><?=$data->lastItem()?></span>, Total <span style="font-weight: bold;"><?=$data->total()?></span> data
                                    </small>
                                </caption> --}}
                                <thead>
                                  <tr>
                                    <th scope="col">N0</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Penulis</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Sinopsis</th>
                                    <th scope="col">Stok</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($book as $buku)            
                                        <tr>
                                            <th scope="row">{{ $loop->iteration}}</th>
                                            {{-- <th scope="row">{{ $loop->iteration + $data->firstItem() - 1}}</th> --}}
                                            <td>{{ $buku['judul'] }}</td>
                                            <td>{{ $buku['penulis'] }}</td>
                                            <td>{{ $buku['penerbit'] }}</td>
                                            <td>{{ $buku['tahun'] }}</td>
                                            <td>{{ $buku['kota'] }}</td>
                                            <td>{{ $buku['cover'] }}</td>
                                            <td>{{ $buku['sinopsis'] }}</td>
                                            <td>{{ $buku['stok'] }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <form class="" action="{{ route('sewa.edit', $barang->id) }}" method="GET">
                                                        @csrf
                                                        <button class="btn p-0 m-0" style="border: 0" type="submit">
                                                            <i class="fa-solid fa-pen-to-square text-info"></i>
                                                        </button>
                                                    </form> --}}
                                                    <a href="{{ url('buku/'.$buku->id.'/edit') }}">
                                                        <i class="fa-solid fa-pen-to-square text-info"></i>
                                                    </a>
                                                    &nbsp;&nbsp;|&nbsp;&nbsp;
                                                    <a href="">
                                                        <i class="fa-solid fa-trash text-danger"></i>
                                                    </a>
                                                    {{-- <form action="{{ route('sewa.destroy', $barang->id) }}" method="POST">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn p-0 m-0" style="border: 0" type="submit" >
                                                            <i class="fa-solid fa-trash text-danger"></i>
                                                        </button>
                                                    </form> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                  
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
    
@endsection
