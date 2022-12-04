@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="header">
      <div class="row">
        <div class="col-10">
          <h1 class="header-title">
            Users
          </h1>
        </div>
        <div class="col-2 text-end">
          <button class="btn btn-primary" type="button" name="button">Create User</button>
          </a>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="datatables-users">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames()->count() ? $user->getRoleNames()->first() : '-' }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td rowspan="3" class="text-center">No data found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
  <script type="text/javascript">
      $('#datatables-users').DataTable({
        pageLength: 10,
        lengthChange: false,
        bFilter: true,
        autoWidth: false
      });
  </script>
@endsection
