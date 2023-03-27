<form action="{{route('lots.update',$lot)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="title">Title</label>
    <input required name = "title" value="{{$lot->title}}"/>
    <br/>
    <label for="start">Start</label>
    <input type="date" required name = "start" value="{{$lot->start}}"/>
    <br/>
    <label for="finish">Finish</label>
    <input type="date" required name = "finish" value="{{$lot->finish}}"/>
    <br/>
    <label for="price">Price</label>
    <input required name ="price" value="{{$lot->price}}"/>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
