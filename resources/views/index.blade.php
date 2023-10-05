@extends('layouts.app')

@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Id Supplier</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $barang)
        <tr>
            <th scope="row">{{ $barang->id }}</th>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->id_supplier }}</td>
        </tr> 
        @endforeach
    </tbody>
  </table>
    
@endsection