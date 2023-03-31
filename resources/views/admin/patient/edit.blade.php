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

<form action="{{ route('patient.update', $patient->id) }}" method="post">
    @csrf
    @method('PUT')

<div class="container py-5">
    <label for="" class="form-label pt-lg-4"> <strong>Nama</strong> </label>
    <input type="text" class="form-control" name="name" value="{{ $patient->name }}">

    <label for="" class="form-label pt-lg-4"> <strong>Tanggal Perjanjian</strong> </label>
    <input type="date" class="form-control" name="agreement" value="{{ $patient->agreement }}">

    <label for="" class="form-label pt-lg-4"> <strong>Nomor Telepon</strong> </label>
    <input type="number" min="0" class="form-control" name="phone" value="{{ $patient->phone }}">

    <label for="" class="form-label pt-lg-4"> <strong>Keluhan</strong> </label>
    <textarea type="text" class="form-control" name="disease" cols="30" rows="5">{!! $patient->disease !!}</textarea>

    <button href="{{ route('patient.store') }}" type="submit" class="form-control btn btn-primary mt-4 px-4"> Submit </button>
</div>
</form>
@endsection