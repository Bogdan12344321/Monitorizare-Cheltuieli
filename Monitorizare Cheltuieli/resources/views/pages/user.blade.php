@include('layouts.master')
<body>
@include('layouts.nav')
<div class="table">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Comenzi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $row)

            <tr>
                <th scope="row">{{$row['id']}}</th>
                <td>{{$row['nume']}}</td>
                <td>{{$row['prenume']}}</td>
                <td>{{$row['username']}}</td>
                <td>{{$row['password']}}</td>
                <td>
                    <a href="{{URL::to('/delete/'.$row['id']) }}">Delete</a>
                    <a href="{{URL::to('/update/'.$row['id']) }}">Update</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


</body>