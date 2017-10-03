@extends('layouts.site')
@section('content')
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Students</h1>
            <p>Find your rate here!</p>
        </div>
    </div>

    <div class="container">
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
        </table>
    </div> <!-- /container -->


@endsection();