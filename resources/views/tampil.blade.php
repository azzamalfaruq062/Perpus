@extends ('template')

@section('content')

<div class="page-wrapper">


<table class="table">
    <thead>
      <tr>
        <th scope="col">N0</th>
        <th scope="col">Barang</th>
        <th scope="col">Qty</th>
        {{-- <th scope="col">Stok</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $barang)            
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $barang['nama_barang'] }}</td>
                <td>{{ $barang['kuantitas'] }}</td>
                {{-- <td>{{ $barang['stok'] }}</td> --}}
            </tr>
        @endforeach
    </tbody>
</table>

</div>


@endsection