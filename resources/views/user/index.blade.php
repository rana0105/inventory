@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel">
                <div class="panel-title">
                        <h3>Users</h3>
                </div>

                {{-- <h3 class="modal-title">{{ $result->total() }} {{ str_plural('User', $result->count()) }} </h3> --}}
            
                <div class=" page-action text-right">
                    @can('add_users')
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                    @endcan
                </div>
                <div class="result-set table-responsive">
                <table class="table table-striped table-hover" id="data-table">
                    <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        @can('edit_users', 'delete_users')
                        <th class="text-center">Actions</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    @foreach($result as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->roles->implode('name', ', ') }}</td>
                            <td>{{ $item->created_at->toFormattedDateString() }}</td>

                            @can('edit_users')
                            <td class="text-center">
                                @include('shared._actions', [
                                    'entity' => 'users',
                                    'id' => $item->id
                                ])
                            </td>
                            @endcan
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">
                    {{ $result->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>
        

@endsection