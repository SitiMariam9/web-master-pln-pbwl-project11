@extends('layouts.app')

@section('content')
    <div class="card col-12 m-4">
        <div class="card-header text-center">
            <h3>Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('pel_create') }}" class="btn mb-4 text-white" style="background-color: #007bff">Input Data Pelanggan</a>
            <table id="dtb" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Golongan</th>
                        <th>No Pelanggan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>KTP</th>
                        <th>Seri</th>
                        <th>Meteran</th>
                        <th>Status</th>
                        <th>User</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->golongan->gol_nama }}</td>
                            <td>{{ $d->pel_no }}</td>
                            <td>{{ $d->pel_nama }}</td>
                            <td>{{ $d->pel_alamat }}</td>
                            <td>{{ $d->pel_hp }}</td>
                            <td>{{ $d->pel_ktp }}</td>
                            <td>{{ $d->pel_seri }}</td>
                            <td>{{ $d->pel_meteran }}</td>
                            <td>{{ $d->pel_aktif }}</td>
                            <td>{{ $d->user->name }}</td>
                            <td>
                                <form action="{{ route('pel_edit', ['id' => $d->id]) }}" method="GET">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('pel_delete', ['id' => $d->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <script>
        $(document).ready(function() {
            $('#dtb').DataTable();
        });
    </script>
@endsection
