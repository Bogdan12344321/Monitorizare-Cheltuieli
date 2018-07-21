@include('layouts.master')
<body>
@include('layouts.nav')
<div class="table">
    <form name="form" action="/home" method="GET">
        <div class="name">
            <label>Nume:</label>
            <input type="text" id="text1" name="nume"/>
        </div>
        <div class="prenume">
            <label>Prenume:</label>
            <input type="text" id="text2" name="prenume"/>
        </div>
        <select name="luna">
            <option value="Ianuarie">{{$month}}</option>
            <option value="Ianuarie" selected="selected" >Ianuarie</option>
            <option value="Februarie">Februarie</option>
            <option value="Marti">Martie</option>
            <option value="Aprilie">Aprilie</option>
            <option value="Mai">Mai</option>
            <option value="Iunie">Iunie</option>
            <option value="Iulie">Iulie</option>
            <option value="August">August</option>
            <option value="Septembrie">Septembrie</option>
            <option value="Octombire">Octombire</option>
            <option value="Noembrie">Noembrie</option>
            <option value="Decembrie">Decembrie</option>
        </select>
    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Luna</th>
            <th scope="col">Data si Timp</th>
            <th scope="col">Cheltuieli</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cheltuieli as $row)

        <tr onclick="display('test');" >
            <th scope="row">{{$row['user_id']}}</th>
            @foreach ($user as $id)
                @if($row['user_id'] == $id['id'])
                <td>{{$id['nume']}}</td>
                <td>{{$id['prenume']}}</td>
                @endif
            @endforeach
                <td>{{$row['luna']}}</td>
                <td>{{$row['created_at']}}</td>
                <td>{{$row['cheltuieli']}} lei</td>
                @endforeach
                <td rowspan="15">{{$sum}} lei</td>
        </tr>
        </tbody>
    </table>
        <input type="submit" class="submit" name="submit" value="Select">
    </form>
    <div class="pagination">
    {{ $cheltuieli->appends(request()->input())->links()}}
    </div>

    <div id="dialog" title="Informatii" style="display:none">

            {{ csrf_field() }}
            <div class="sub-form">
                <label>Nume:</label>
                <input type="text" id="nume" name="nume"/>
            </div>
            <div class="sub-form">
                <label>Prenume:</label>
                <input type="text" id="prenume" name="prenume"/>
            </div>
            <div class="sub-form">
                <label>Luna:</label>
                <input type="text" id="luna" name="luna"/>
            </div>
            <div class="sub-form">
                <label>Cheltuieli:</label>
                <input type="password" id="cheltuieli" name="cheltuieli"/>
            </div>

            <input type="submit" id="submit" class="button" value="Update">
            <input type="submit" id="submit" class="button" value="Delete">

    </div>
</div>
</body>