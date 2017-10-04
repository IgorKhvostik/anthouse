@extends('layouts.site')
@section('content')

<div class="container"> <!--student table-->

        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Group</th>
                <th>E-mail</th>
                <th>Rate</th>
                <th>Birthday</th>
                <th>Residence</th>
            </tr>
            @foreach($students as $student) <!--info about students-->
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->lastName}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->groupNumb}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->rate}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->residence}}</td>
                </tr>
            @endforeach
        </table>
    {{ $students->links() }}
    </div> <!-- /container -->
<div class="jumbotron">
    <div class="container">
        <p>Didn't find yourself? <a href="add">Then add!</a></p>
    </div>

</div>


@endsection();