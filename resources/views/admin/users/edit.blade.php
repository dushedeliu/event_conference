<x-admin-layout>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="title">Edit {{$user->name}} role</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.users.update', $user)}}" method="POST">
                        @csrf
                        @method('patch')

                        <div class="row">
                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label for="title">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" disabled value="{{$user->name}}">
                                </div>
                            </div>

                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label for="title">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" disabled value="{{$user->email}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label>
                                        Role(s)
                                    </label>
                                    <select class="form-select" id="multiple-select-field" name="roles[]" data-placeholder="Choose anything" multiple>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->roles->contains($role) ? 'selected' : '' }}>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( '#multiple-select-field' ).select2( {
            theme: "bootstrap-5",
            width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
            placeholder: $( this ).data( 'placeholder' ),
            closeOnSelect: false,
        } );
    </script>
</x-admin-layout>


