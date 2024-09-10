<x-admin-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="title">Add an event</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('events.store')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 px-1">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title..." value="{{old('title')}}">
                                </div>
                                @if($errors->has('title'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('title')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12 pl-1">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="datetime-local" class="form-control" name="start_date" value="{{old('start_date')}}">
                                </div>
                                @if($errors->has('start_date'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('start_date')}}</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="datetime-local" class="form-control" name="end_date" value="{{old('end_date')}}">
                                </div>
                                @if($errors->has('end_date'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('end_date')}}</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="quantity">Ticket Quantity:</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control" min="1">
                                </div>
                                @if($errors->has('quantity'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('quantity')}}</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="location">Location:</label>
                                    <input type="text" name="location" id="location" class="form-control">
                                </div>
                                @if($errors->has('location'))
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                        <span>{{$errors->first('location')}}</span>
                                    </div>
                                @endif
                            </div>
                        </div>



                        <button type="submit" class="btn btn-black">Add</button>
                        <button class="btn btn-black"><a href="{{route('events.index')}}">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
