@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Ujian PTS</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('pts.update', $datas->id) }}" method="post"> <!-- pts = nama controller // update = nama fungsi -->
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="namaujian">Instansi:</label>
                    <input type="text" class="form-control" id="instansi" name="instansi" value="{{ $datas->instansi }}">
                </div>
                <div class="form-group">
                    <label for="namaujian">Jalur:</label>
                    <input type="text" class="form-control" id="jalur" name="jalur" value="{{ $datas->jalur }}">
                </div>
				 <div class="form-group">
                    <label for="biaya">Biaya:</label>
                    <input type="text" class="form-control" id="biaya" name="biaya" value="{{ $datas->biaya }}">
                </div>
				<div class="form-group">
                    <label for="pendaftaran">Registrasi:</label>
                    <input type="date" class="form-control" id="registrasi" name="registrasi" value="{{ $datas->registrasi }}">
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal Ujian:</label>
                    <input type="date" class="form-control" id="tes" name="tes" value="{{ $datas->tes }}">
                </div>
                <div class="form-group">
                    <label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman" value="{{ $datas->pengumuman }}">
                </div>
				<div class="form-group">
                    <label for="daftarulang">Daftar Ulang:</label>
                    <input type="date" class="form-control" id="daftarulang" name="daftarulang" value="{{ $datas->daftarulang }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection