@extends('layouts.app')
@section('content')

<form action="posts/{{$post->id}}" method="post" style="margin: auto 25%">

    @csrf
    @method('PUT')
    <input class="form-control w-75" type="text" name="title" placeholder="title"><br>
    <input class="form-control w-75" type="text" name="desc" placeholder="description"><br>
    <input class="form-control w-75" type="text" name="posted_by" placeholder="posted by"><br>
    <input class="form-control w-75" type="text" name="created_at" placeholder="Created at"><br>
    <input class="form-control w-25" type="submit" name="add">
    </form>
    @endsection