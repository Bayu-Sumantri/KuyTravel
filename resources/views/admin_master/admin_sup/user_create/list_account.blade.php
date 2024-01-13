@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection


{{-- <div class="container-fluid pt-4 px-4"> --}}



    <div class="col-lg-12 grid-margin stretch-card ">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bordered table</h4>
            <br>
            <p class="card-description" style="text-align: center; font-size: 20px" > List Account </code>
            </p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> Name </th>
                    <th> Gmail </th>
                    <th> Status </th>
                    <th> Email Verified </th>
                    <th> Created At </th>
                    <th> Update At </th>
                    <th> Edit </th>
                    <th> Hapus </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
						@foreach ($user as $row)
                    <th scope="row">{{ $loop->iteration + $user->perpage() * ($user->currentPage() - 1) }}</th>
                    <td> {{ $row->name }} </td>
                    <td> {{ $row->email }} </td>
                    <td> {{ $row->role }} </td>
                    @if ($row->email_verified_at)
						<td>{{ $row->email_verified_at }}</td>
						@else
						<td>Tidak Ada</td>
						@endif
                        <td>{{ $row->created_at->diffForHumans() }}</td>
						<td>{{ $row->updated_at->diffForHumans() }}</td>
                        <td><form method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{ $row->name }}?..')" action="{{ route('Users.destroy', [$row->id]) }}">
							@csrf
							{{ method_field('DELETE') }}
							<a href=""
								class="btn btn-info"><i class="far fa-edit"></i></a>
							</td>
							<td>
								<button type="submit" class="btn btn-danger"><i
									class="fa fa-trash"></i></button>

								</td>
							</form></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

              {{ $user->appends(Request::all())->links() }}


            </div>
          </div>
        </div>
      </div>


{{-- </div> --}}
@endsection
