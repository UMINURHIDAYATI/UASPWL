@extends('master')

@section('content')

<form method="POST"  action="/buku/create" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row" style="margin-top: 20px; margin-left: 20px; width:850px; ">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Anggota baru</h4>
                      
                        
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Judul</label>
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ old('judul') }}" required>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">ISBN</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" required>
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                            <label for="pengarang" class="col-md-4 control-label">Pengarang</label>
                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ old('pengarang') }}" required>
                                @if ($errors->has('pengarang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('penerbit') ? ' has-error' : '' }}">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit</label>
                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ old('penerbit') }}" required>
                                @if ($errors->has('penerbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('penerbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                            <label for="tahun_terbit" class="col-md-4 control-label">Tahun_terbit</label>
                            <div class="col-md-6">
                                <input id="tahun_terbit" type="text" class="form-control" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required>
                                @if ($errors->has('tahun_terbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_buku') ? ' has-error' : '' }}">
                            <label for="jumlah_buku" class="col-md-4 control-label">Jumlah_buku</label>
                            <div class="col-md-6">
                                <input id="jumlah_buku" type="text" class="form-control" name="jumlah_buku" value="{{ old('jumlah_buku') }}" required>
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" required>
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                            <div class="col-md-6">
                            <select class="form-control" name="lokasi" required="">
                                <option value="Pilih"></option>
                                <option value="rak1">rak1</option>
                                <option value="rak2">rak2</option>
                                <option value="rak3">rak3</option>
                            </select>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary" name="add">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection