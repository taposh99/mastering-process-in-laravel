@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <h1>{{session('message')}}</h1>
                        <form action="{{ route('new.student') }}" method="post">
                            @csrf
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="first name"> <br>

                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="last name"> <br>

                            <label for="">Roll</label>
                            <input type="text" name="roll" class="form-control" placeholder="Roll"> <br>

                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"> <br>

                            <label for="">Phone</label>
                            <input type="text" name="phone"  class="form-control" placeholder="Phone"> <br>

                            <input type="submit" class="form-control btn btn-outline-danger" value="submit">


                        </form>

                        <hr>
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>roll</th>
                            </tr>
                            @foreach($students as $student)

                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->first_name.' '.$student->last_name}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->roll}}</td>
                                </tr>
                            @endforeach

                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
