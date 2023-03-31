@extends('admin.parent')

@section('content')
<form>
<div class="container py-5 ">
    <label for="" class="form-label pt-lg-4"> <strong>Nama</strong> </label>
    <input type="text" class="form-control bg-primary bg-opacity-10 text-bg-light" name="name" readonly value="{{ $patient->name }}">

    <label for="" class="form-label pt-lg-4"> <strong>Tanggal Perjanjian</strong> </label>
    <input type="date" class="form-control bg-primary bg-opacity-10 text-bg-light" name="agreement" readonly value="{{ $patient->agreement }}">

    <label for="" class="form-label pt-lg-4"> <strong>Nomor Telepon</strong> </label>
    <input type="text" class="form-control bg-primary bg-opacity-10 text-bg-light" name="phone" readonly value="{{ $patient->phone }}">

    <label for="" class="form-label pt-lg-4"> <strong>Keluhan</strong> </label>
    <textarea type="text" class="form-control bg-primary bg-opacity-10 text-bg-light" name="disease" cols="30" rows="5" readonly>{!! $patient->disease !!}</textarea>

    <a href="{{ route('patient.index') }}" type="submit" class=" form-control bx-spin-hover btn btn-outline-primary mt-5 px-4"> Go Back </a>
</div>
</form>
@endsection 