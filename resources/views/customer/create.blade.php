@extends('master')
@section('content')
    <h1 style="text-align: center" class="mt-5">Input Data Customer</h1>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <h3>Data Diri<span style="color:red"> *</span></h3>
            <p style="opacity: 0.4">Note : Form yang memilii simbol <span style="color:red">*</span> artinya wajib diisi.</p>
            <form action="/customer/insert" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" name="nama">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" name="no_hp">
                </div>
                <div class="mb-3">
                  <textarea type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" name="alamat"></textarea>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="laki-laki" name="laki-laki">Laki-laki</option>
                        <option value="perempuan" name="perempuan">Perempuan</option>
                      </select>
                </div>
                <div class="row">
                    <h3>Rekening</h3>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BRI" name="bri">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BTN" name="btn">
                          </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">INPUT DATA</button>
                </div>
            </form>
        </div>
    </div>
@endsection