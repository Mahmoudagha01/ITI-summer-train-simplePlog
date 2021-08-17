<form action="posts/{{$post->id}}" method="post">

    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="title"><br>
    <input type="text" name="desc" placeholder="description"><br>
    <input type="text" name="posted_by" placeholder="posted by"><br>
    <input type="text" name="created_at" placeholder="Created at"><br>
    <input type="submit" name="add">
    </form>