@extends('layouts.app')

@section('content')
    <div class="card col-12 m-4">
        <div class="card-header text-center">
            <h3>Data Golongan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('gol_create') }}" class="btn mb-4 text-white" style="background-color: #007bff">Input Data Golongan</a>
            <table id="dtb" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Golongan</th>
                        <th>Nama Golongan</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->gol_kode }}</td>
                            <td>{{ $d->gol_nama }}</td>
                            <td>
                                <form action="{{ route('gol_edit', ['id' => $d->id]) }}" method="GET">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('gol_delete', ['id' => $d->id]) }}" method="POST">
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
