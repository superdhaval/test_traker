<h1 style="text-align:centre;">list of department</h1>
<table border="3">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th colspan="2">PROCESS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $raw)
        <tr>
            <td>{{$raw->id}}</td>
            <td>{{$raw->name}}</td>
            <td><a href="DepartmentResource/{{$raw->id}}"><button class="btn btn-default" type="submit">EDIT</button></a></td>
            <td><form action="DepartmentResource/{{$raw->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-default" type="submit">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
