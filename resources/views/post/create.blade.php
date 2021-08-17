<form action="/posts" method="post">
    @csrf
<input type="text" name="title" placeholder="title"><br>
<input type="text" name="description" placeholder="description"><br>

<input type="text" name="created_at" placeholder="Created at"><br>
<input type="text" name="updated_at" placeholder="posted by"><br>
<input type="submit" name="add">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif