<x-admin-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="title">Add a role</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.roles.update', $role)}}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="name" id="title" placeholder="Add role..." value="{{$role->name}}">
                                </div>
                                @if($errors->has('role'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('role')}}</span>
                                    </div>
                                @endif
                            </div>

                        </div>

                        <button type="submit" class="btn btn-black">Update</button>
                        <button class="btn btn-black"><a href="{{route('admin.roles.index')}}">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
