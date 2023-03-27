<table>
    <tr><th>Title</th><th>Start</th><th>Finish</th><th>Price</th></tr>
    @foreach($lots as $lot)
        <tr>
            <td>{{$lot->title}}</td>
            <td>{{$lot->start}}</td>
            <td>{{$lot->finish}}</td>
            <td>{{$lot->price}}</td>
            <td><a href="{{route('lots.edit',$lot->id)}}">Edit</a></td>
            <td>
                <form action="{{route('lots.destroy',$lot->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('lots.create')}}">Create</a>
