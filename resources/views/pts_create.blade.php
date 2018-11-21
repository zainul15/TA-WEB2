@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Data Ujian PTS</h1>
            <hr>
            <form action="{{ route('pts.store') }}" method="post">
                {{ csrf_field() }}
                 <div class="form-group">
                    <label for="instansi">Nama Instansi:</label>
                    <input type="text" class="form-control" id="instansi" name="instansi">
                    <label for="jalur">Jalur:</label>
                    <input type="text" class="form-control" id="jalur" name="jalur">
                    <label for="biaya">Biaya Pendaftaran:</label>
                    <input type="integer" class="form-control" id="biaya" name="biaya">
					<label for="registrasi">Registrasi:</label>
                    <input type="date" class="form-control" id="registrasi" name="registrasi">
					<label for="tes">Tanggal Tes:</label>
                    <input type="date" class="form-control" id="tes" name="tes">
					<label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman">
                    <label for="daftarulang">Tanggal Daftar Ulang:</label>
                    <input type="date" class="form-control" id="daftarulang" name="daftarulang">
				</div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection