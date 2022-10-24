@extends ('template')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Tambah Barang</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/sewa">Barang</a></li>
                                <li class="breadcrumb-item active" aria-current="#">Tambah barang</li>
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
                        <h2 class="text-info text-center mb-0 p-0">Tambah Barang</h2>
                            <div class="mx-3">
                                @include('flashmassage')
                            </div>
                            <form class="mt-2 pt-2 m-5 p-5" action="{{route('sewa.store')}}" method="POST">
                                @csrf
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" placeholder="barang" value="{{ old('nama_barang') }}">
                                        <label for="floatingInput">Barang</label>
                                    </div>
                                        {{-- <div class="form-floating">
                                            <select class="form-control">
                                                @foreach ($barang as $data)
                                                    <option name="barang" value="{{ $data['id'] }}">{{ $data['nama_barang'] }}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingInput">Barang</label>
                                        </div> --}}
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control @error('harga_sewa') is-invalid @enderror" name="harga_sewa" placeholder="harga" value="{{ old('harga_sewa') }}">
                                        <label for="floatingPassword">Harga</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" placeholder="stok" value="{{ old('stok') }}">
                                        <label for="floatingPassword">Kuantitas</label>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input class="btn btn-info text-light mb-2" type="submit" name="request" value="Tambah">
                                    </div>
                            </form>
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