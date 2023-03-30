@extends('admin.parent')

@section('content')
    <h1 class="text-center my-5">
        <strong>Daftarkan Keluhanmu kepada Kami!</strong>
    </h1>

    <div class="container card py-3 px-3 mb-3 border-light">
        <a href="{{ route('patient.create') }}" class="btn btn-primary py-2">
            <strong>Daftar</strong>
        </a>
    </div>

    <div class="container card p-3 mb-5 border-light">
        <table class="table table-striped table-bordered border-primary border-opacity-25">
            <thead>
                <tr class="bg-primary text-bg-dark bg-opacity-75">
                    <td>No</td>
                    <td>Name</td>
                    <td>Agreement</td>
                    <td>Phone</td>
                    <td>Disease</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($patient as $pasien)
                <tr class="bg-primary bg-opacity-10"> 
                    <td class="text-bg-light">{{ $loop->iteration }}</td>
                    <td class="text-bg-light" >{{ $pasien->name }}</td>
                    <td class="text-bg-light" >{{ $pasien->agreement }}</td>
                    <td class="text-bg-light" >{{ $pasien->phone }}</td>
                    <td class="w-25 text-wrap text-bg-light">{{ $pasien->disease }}</td>
                    <td class="d-grid">
                        <a href="{{ route('patient.show', $pasien->id) }}" class="btn btn-primary w-75 mt-3 mx-auto">Show</a>

                        <a href="{{ route('patient.edit', $pasien->id) }}" class="btn btn-primary opacity-50 mb-3 mt-4 w-75 mx-auto">Edit</a>

                        <form class="mx-auto mb-3 w-75" action="{{ route('patient.destroy', $pasien->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2 w-100">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection