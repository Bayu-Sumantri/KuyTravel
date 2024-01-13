@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection


<div class="col-12 grid-margin stretch-card">


    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form</h4>
        <h4 class="card-description">Setting Account</h4>



        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="bg-gray-dark rounded h-100 p-4">
            <div class="section">
                <h3 style="font-size: 18px; font-family: 'Figtree', sans-serif;">PROFILE SETTINGS</h3>
                <p style="font-size: 14px; font-family: 'Figtree', sans-serif;">Update your account's profile
                    information and email address.</p>
            </div>


            @if (auth()->user()->Profile)
                <img class="user" src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                    alt="">
            @endif

            <div class="container" style="margin-top: 15px;">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Your Profile <red style="color: red; font-size: 10px">Onlly 2Mb*</red></label>
                    <input class="form-control bg-dark" type="file" id="formFile" name="Profile">
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 5px; font-size: 12px;">Save</button>
            </div>
    </form>

</div>

</div>
<!-- update user dan gmail selesai -->

@endsection
