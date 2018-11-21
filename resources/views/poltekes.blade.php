@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Table Poltekes</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
					<th>No </th>
                    <th>Nama Poltekes</th>
                    <th>Daftar Online</th>
                    <th>Seleksi Adiministrasi</th>
                    <th>Test Fisik</th>
                    <th>Ujian Tulis</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->a }}</td>
                        <td>{{ $d->b }}</td>
                        <td>{{ $d->c }}</td>
                        <td>{{ $d->d}}</td>
                        <td>{{ $d->e }}</td>
                        <td>{{ $d->f }}</td>
                        <td>
                            <form action="{{ route('poltekes.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('poltekes.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection