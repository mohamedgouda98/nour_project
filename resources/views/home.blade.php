@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                                <td>Date</td>
                                <td>Name</td>
                                <td>job</td>
                                <td>adress</td>
                                <td>phone</td>
                                <td>fixed_line</td>
                                <td>email</td>
                                <td>type</td>
                                <td>space</td>
                                <td>know</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                            <tr>
                                <td>{{$form->date}}</td>
                                <td>{{$form->name}}</td>
                                <td>{{$form->job}}</td>
                                <td>{{$form->adress}}</td>
                                <td>{{$form->phone}}</td>
                                <td>{{$form->fixed_line}}</td>
                                <td>{{$form->email}}</td>
                                <td>{{$form->type}}</td>
                                <td>{{$form->space}}</td>
                                <td>{{$form->know}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
