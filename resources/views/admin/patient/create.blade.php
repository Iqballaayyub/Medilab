@extends('admin.parent')

@section('content')

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-octagon me-1"></i>
    {{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

<form action="{{ route('patient.store') }}" method="post">
    @csrf
    @method('POST')

<div class="container py-5 ">
    <label for="" class="form-label pt-lg-4"> <strong>Nama</strong> </label>
    <input type="text" class="form-control" name="name">

    <label for="" class="form-label pt-lg-4"> <strong>Tanggal Perjanjian</strong> </label>
    <input type="date" class="form-control" name="agreement">

    <label for="" class="form-label pt-lg-4"> <strong>Nomor Telepon</strong> </label>
    <input type="number" class="form-control" name="phone" min="0">

    <label for="" class="form-label pt-lg-4"> <strong>Keluhan</strong> </label>
    <textarea type="text" class="form-control" name="disease" cols="30" rows="5"></textarea>

    <button href="{{ route('patient.store') }}" type="submit" class="btn btn-primary mt-4 px-4"> Submit </button>
</div>
</form>
@endsection