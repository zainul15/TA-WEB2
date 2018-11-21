@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Ujian PTK</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('ptk.update', $datas->id) }}" method="post"> <!-- mahasiswa = nama controller // update = nama fungsi -->
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="namainstansi">Nama Instansi:</label>
                    <input type="text" class="form-control" id="namainstansi" name="namainstansi" value="{{ $datas->namainstansi }}">
                </div>
                <div class="form-group">
                    <label for="pendaftaran">Pendaftaran:</label>
                    <input type="date" class="form-control" id="pendaftaran" name="pendaftaran" value="{{ $datas->pendaftaran }}">
                </div>
                <div class="form-group">
                    <label for="ujian">Ujian:</label>
                    <input type="date" class="form-control" id="ujian" name="ujian" value="{{ $datas->ujian }}">
                </div>
                <div class="form-group">
                    <label for="wawancara">Wawancara:</label>
                    <input type="date" class="form-control" id="wawancara" name="wawancara" value="{{ $datas->wawancara }}">
                </div>
				<div class="form-group">
                    <label for="pengumuman">Pengumuman:</label>
                    <input type="date" class="form-control" id="pengumuman" name="pengumuman" value="{{ $datas->pengumuman }}">
                </div>
				<div class="form-group">
                    <label for="kuota">Kuota:</label>
                    <input type="integer" class="form-control" id="kuota" name="kuota" value="{{ $datas->kuota }}">
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