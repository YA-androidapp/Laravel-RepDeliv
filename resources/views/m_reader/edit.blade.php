
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit m_reader #{{ $m_reader->id }}</div>
                            <div class="panel-body">
                                <a href="{{ url("m_reader") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/m_reader/{{ $m_reader->id }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$m_reader->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="name" class="col-md-4 control-label">name: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="name" type="text" id="name" value="{{$m_reader->name}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="email" class="col-md-4 control-label">email: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="email" type="text" id="email" value="{{$m_reader->email}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="start_date" class="col-md-4 control-label">start_date: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="start_date" type="date" id="start_date" value="{{$m_reader->start_date}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_reader_roles" class="col-md-4 control-label">id_m_reader_roles: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_reader_roles" type="text" id="id_m_reader_roles" value="{{$m_reader->id_m_reader_roles}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="id_m_members" class="col-md-4 control-label">id_m_members: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" name="id_m_members" type="text" id="id_m_members" value="{{$m_reader->id_m_members}}">
                                            </div>
                                        </div>
               
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Update">
                                        </div>
                                    </div>   
                                </form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    