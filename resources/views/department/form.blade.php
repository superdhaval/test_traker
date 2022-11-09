

<form action="{{route('DepartmentResource.store')}}" method="post">
    @csrf
<label for="name">NAME</label><br><br>
<input type="text" name="name"><br><br>
<input type="submit"><br>
</form>