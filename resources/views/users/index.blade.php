@extends('layouts.app')

@section('content')
    <div class="card col-12 m-4">
        <div class="card-header text-center">
            <h3>Data User</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('user_create') }}" class="btn text-white mb-4" style="background-color: #007bff">Input Data User</a>
            <table id="dtb" class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Pos</th>
                        <th>Role</th>
                        <th>Aktif</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $d->email }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->user_alamat }}</td>
                            <td>{{ $d->user_hp }}</td>
                            <td>{{ $d->user_pos }}</td>
                            <td>{{ $d->user_role }}</td>
                            <td>{{ $d->user_aktif }}</td>
                            <td>
                                <form action="{{ route('user_edit', ['id' => $d->id]) }}" method="GET" class="d-inline">
                                    <button type="submit" class="btn btn-info edit-button" style="border-radius: 5px; padding: 5px 10px;">
                                        Edit
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('user_delete', ['id' => $d->id]) }}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
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
