

<form action="/update/{{$data -> id}}" method="post">
    @csrf
<label for="name">NAME</label><br><br>
<input type="text" name="name" value="{{$data -> name}}"><br><br>
<input type="submit" ><br>
</form>