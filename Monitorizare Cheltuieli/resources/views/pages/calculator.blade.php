@include('layouts.master')
<body>
@include('layouts.nav')

    <div class="main">
        <form name="form" action="/insertC" method="POST">
            <div  class="calculator">
                {{ csrf_field() }}
                <input type="hidden" id="id" name="id" value="{{ $user_id['id'] }}"/>
                <input class="textview" name="textview">
                <table>
                    <tr>
                        <td><input class="button" type="button" value="C" onclick="curata()"></td>
                        <td><input class="button" type="button" value="<" onclick="back()"></td>
                        <td><input class="button" type="button" value="/" onclick="insert('/')"></td>
                        <td><input class="button" type="button" value="x" onclick="insert('*')"></td>
                    </tr>
                    <tr>
                        <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
                        <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
                        <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
                        <td><input class="button" type="button" value="-" onclick="insert('-')"></td>
                    </tr>
                    <tr>
                        <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
                        <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
                        <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
                        <td><input class="button" type="button" value="+" onclick="insert('+')"></td>
                    </tr>
                    <tr>
                        <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
                        <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
                        <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
                        <td rowspan="5"><input style="height: 130px;" class="button" type="button" value="=" onclick="equal()"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input  style="width:130px;" class="button" type="button" value="0" onclick="insert(0)"></td>
                        <td><input class="button" type="button" value="." onclick="insert('.')"></td>
                    </tr>
                </table>
            </div>
            <select name="luna">
                <option value="Ianuarie">Ianuarie</option>
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
            <input type="submit" class="submit" name="submit" value="Submit">
        </form>

    </div>

</body>