@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Data Ujian PTN</h1>
            <hr>
            <form action="{{ route('ptn.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="namaujian">Nama Ujian:</label>
                    <input type="text" class="form-control" id="namaujian" name="namaujian">
					<label for="pendaftaran">Pendaftaran:</label>
                    <input type="date" class="form-control" id="pendaftaran" name="pendaftaran">
					<label for="penutupan">Penutupan:</label>
                    <input type="date" class="form-control" id="penutupan" name="penutupan">
					<label for="tanggalujian">Tanggal Ujian:</label>
                    <input type="date" class="form-control" id="tanggalujian" name="tanggalujian">
                    <label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman">
                    <label for="penyelenggara">Penyelenggara:</label>
                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
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