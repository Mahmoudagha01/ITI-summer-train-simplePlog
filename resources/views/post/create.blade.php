@extends('layouts.app')
<form action="/posts" method="post">
    @csrf
<input type="text" name="title" placeholder="title"><br>
<input type="text" name="description" placeholder="description"><br>
<select name="user_id" class="form-select form-select-sm w-25" >
    @foreach ($users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
</select>
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