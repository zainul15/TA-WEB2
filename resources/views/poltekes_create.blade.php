@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Politeknik</h1>
            <hr>
            <form action="{{ route('poltekes.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="a">Nama Poltekes:</label>
                    <input type="text" class="form-control" id="a" name="a">
                </div>
				 <div class="form-group">
                    <label for="b">Daftar Online</label>
                    <input type="date" class="form-control" id="b" name="b">
                </div>
				<div class="form-group">
                    <label for="c">Seleksi Administrasi:</label>
                    <input type="date" class="form-control" id="c" name="c">
                </div>
				<div class="form-group">
                    <label for="d">Test Fisik:</label>
                    <input type="date" class="form-control" id="d" name="d">
                </div>
				<div class="form-group">
                    <label for="e">Ujian Tulis:</label>
                    <input type="date" class="form-control" id="e" name="e">
                </div>
				<div class="form-group">
                    <label for="f">Kuota:</label>
                    <input type="integer" class="form-control" id="f" name="f">
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