@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Politeknik</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('poltekes.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="a">Nama Poltekes:</label>
                    <input type="text" class="form-control" id="a" name="a" value="{{ $datas->a }}">
                </div>
				<div class="form-group">
                    <label for="b">Daftar Online</label>
                    <input type="date" class="form-control" id="b" name="b" value="{{ $datas->b }}">
                </div>
                
                <div class="form-group">
                    <label for="c">Seleksi Administrasi:</label>
                    <input type="date" class="form-control" id="c" name="c" value="{{ $datas->c }}">
                </div>
				<div class="form-group">
                    <label for="d">Test Fisik:</label>
                    <input type="date" class="form-control" id="d" name="d" value="{{ $datas->d }}">
                </div>
				<div class="form-group">
                    <label for="e">Ujian Tulis:</label>
                    <input type="date" class="form-control" id="e" name="e" value="{{ $datas->e }}">
                </div>
				<div class="form-group">
                    <label for="f">Kuota:</label>
                    <input type="integer" class="form-control" id="f" name="f" value="{{ $datas->f }}">
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