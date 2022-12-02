@extends('master')
@section('content')
    <h1 style="text-align: center" class="mt-5">Ubah Data Customer</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h3>Data Diri<span style="color:red"> *</span></h3>
            <p style="opacity: 0.4">Note : Form yang memilii simbol <span style="color:red">*</span> artinya wajib diisi.</p>
            <form action="/customer/update/{{ $customer->id }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama" value="{{ $customer->nama }}">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" name="no_hp" value="{{ $customer->no_hp }}">
                </div>
                <div class="mb-3">
                  <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" name="alamat" value="{{ $customer->alamat }}">{{ $customer->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        <option {{ ($customer->jenis_kelamin) == 'laki-laki' ? 'selected' : '' }}  value="laki-laki">Laki-laki</option>
                        <option {{ ($customer->jenis_kelamin) == 'perempuan' ? 'selected' : '' }}  value="perempuan">Perempuan</option>
                      </select>
                </div>
                <div class="row">
                    <h3>Rekening</h3>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BRI" name="bri" value="{{ $customer->rekening->bri ?? null}}">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BTN" name="btn" value="{{ $customer->rekening->btn ?? null}}">
                          </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">UBAH DATA</button>
                </div>
            </form>
        </div>
    </div>
@endsection