@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Data Ujian PTK</h1>
            <hr>
            <form action="{{ route('ptk.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="namainstansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="namainstansi" name="namainstansi">
					<label for="pendaftaran">Pendaftaran</label>
                    <input type="date" class="form-control" id="pendaftaran" name="pendaftaran">
					<label for="ujian">Ujian</label>
                    <input type="date" class="form-control" id="ujian" name="ujian">
					<label for="wawancara">Wawancara</label>
                    <input type="date" class="form-control" id="wawancara" name="wawancara">
					<label for="pengumuman">Pengumuman</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman">
					<label for="kuota">Kuota</label>
                    <input type="integer" class="form-control" id="kuota" name="kuota">
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