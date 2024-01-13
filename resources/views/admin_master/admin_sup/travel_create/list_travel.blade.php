@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection


<div class="col-12 grid-margin stretch-card">


    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form</h4>
        <p class="card-description" style="text-align: center; font-size: 20px"> Form Creae Account (Admin) </p>
        <form action="{{ route('Users.store') }}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Level</label>
            <select class="form-control" name="role" id="exampleSelectGender" id="floatingSelect">
                <option selected>Role Account</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="{{ route('Users.index') }}" class="btn btn-dark">List</a>
        </form>
      </div>
    </div>
  </div>



  </div>
</div>

  @endsection



