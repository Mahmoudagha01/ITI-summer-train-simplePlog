@extends('layouts.app')
<div class="container-sm">
<table  class="table table-striped" >
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Created At</th>
    <th>Posted At</th>
    <th colspan="3">Actions</th>
</tr>
@foreach ($posts as $key)
<tr>
    
      <td> {{ $key['id'] }} </td>
      <td> {{ $key['title'] }} </td>
      <td> {{ $key['description'] }} </td>
      <td> {{ $key['created_at'] }} </td>
      <td> {{ $key['updated_at'] }} </td>
     
  
    <td > <a class="btn btn-primary" href ='posts/{{$key['id']}}' >view</a></td>
      <td> <a class="btn btn-primary" href ='posts/{{$key['id']}}/edit' >edit</a></td>
      <td> <form action="posts/{{$key['id']}}" method="post">
          @csrf
          @method('DELETE')
          <input class="btn btn-primary" type="submit" value="Delete">
      </form></td>
  </tr>
@endforeach



</table>
<a href="/posts/create">Add post</a>
</div>