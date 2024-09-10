<x-admin-layout>
    @if(session()->has('success'))
        <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <span>{{session('success')}}</span>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Simple Table</h4>
                    <a href="{{route('admin.roles.create')}}">Add a role</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                Id
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Actions
                            </th>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>
                                        {{$role->id}}
                                    </td>
                                    <td>
                                        {{$role->name}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.roles.edit', $role)}}">Edit</a>
                                        <form action="{{route('admin.roles.destroy', $role)}}" method="post" class="btn btn-danger" onsubmit="return confirm('Are you sure you want to delete {{$role->name}}?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
