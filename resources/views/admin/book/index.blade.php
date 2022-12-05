@extends('layouts.admin')
@php
  $namespace = 'admin.books';
  $entity    = 'Books';
@endphp
@section('content')
<div class="container-fluid">
    <div class="header">
      <div class="row">
        <div class="col-10">
          <h1 class="header-title">
            {{ $entity }}
          </h1>
        </div>
        <div class="col-2 text-end">
          <a href="{{ route($namespace.'.create') }}" class="btn btn-primary btn-sm">Create</a>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="{{ $books->count() ? 'datatables-users' : ''}}">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                              <tr>
                                  <td>{{ $book->name }}</td>
                                  <td>{{ $book->price }}</td>
                                  <td class="table-action">
                                    <a href="{{ route($namespace.'.edit', $book->id) }}"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                    <form action="{{ route($namespace.'.destroy', $book->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('DELETE')
                                      <a href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <i class="align-middle fas fa-fw fa-trash"></i>
                                      </a>
                                    </form>
                                  </td>
                              </tr>
                            @empty
                              <tr>
                                  <td colspan="3" class="text-center">No data found</td>
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
