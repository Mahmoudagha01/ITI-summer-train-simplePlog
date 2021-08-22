@extends('layouts.app')
@section('content')

<form action="/posts" method="post" style="margin: auto 25%">
    @csrf
    <br>
<input class="form-control w-75"  type="text" name="title" placeholder="title"><br>
<input class="form-control w-75"  type="text" name="description" placeholder="description"><br>
<select name="user_id" class="form-select form-select-sm w-75 " >
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
</select><br>
<input class="form-control w-75" type="text" name="created_at" placeholder="Created at"><br>
<input class="form-control  w-75" type="text" name="updated_at" placeholder="posted by"><br>
<input class="form-control w-25" type="submit" name="add">
</form>

@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

