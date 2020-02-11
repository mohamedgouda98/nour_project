@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Project name</td>
                                <td>location</td>
                                <td>price</td>
                                <td>sqft</td>
                                <td>bedrooms</td>
                                <td>kitchens</td>
                                <td>bathrooms</td>
                                <td>garage</td>
                                <td>garden</td>
                                <td>kitchens</td>
                                <td>Delete</td>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                ?>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->location}}</td>
                                <td>{{$project->price}}</td>
                                <td>{{$project->sqft}}</td>
                                <td>{{$project->bedrooms}}</td>
                                <td>{{$project->kitchens}}</td>
                                <td>{{$project->bathrooms}}</td>
                                <td>{{$project->garage}}</td>
                                <td>{{$project->garden}}</td>
                                <td>{{$project->kitchens}}</td>
                                <td>
                                    <form action="{{route('destroy_project' , [$project->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <br>

                        <form method="POST" action="{{route('insert_project')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enter Project Name</label>
                                <input type="text" class="form-control" name="name">
                                <label for="exampleInputEmail1">Upload Logo</label>
                                <input type="file" class="form-control" name="logo">
                                <label for="exampleInputEmail1">Upload imgs</label>
                                <input type="file" class="form-control" name="imgs[]" multiple>
                                <label for="exampleInputEmail1">Enter location</label>
                                <input type="text" class="form-control" name="location">
                                <label for="exampleInputEmail1">Enter price</label>
                                <input type="text" class="form-control" name="price">
                                <label for="exampleInputEmail1">Enter sqft</label>
                                <input type="number" class="form-control" name="sqft">
                                <label for="exampleInputEmail1">Enter Bedrooms</label>
                                <input type="number" class="form-control" name="bedrooms">
                                <label for="exampleInputEmail1">Enter kitchens</label>
                                <input type="number" class="form-control" name="kitchens">
                                <label for="exampleInputEmail1">Enter Bathrooms</label>
                                <input type="number" class="form-control" name="bathrooms">
                                <label for="exampleInputEmail1">Enter Garage</label>
                                <input type="number" class="form-control" name="garage">
                                <label for="exampleInputEmail1">Enter Garden</label>
                                <input type="number" class="form-control" name="garden">
                                <label for="exampleInputEmail1">Upload File</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <button type="submit" class="btn btn-primary">Gooo</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
