<form action="{{route('bets.update',$bet)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="name">Name</label>
    <input required name = "name" value="{{$bet->name}}"/>
    <br/>
    <label for="price">Price</label>
    <input required name = "price" value="{{$bet->price}}"/>
    <br/>
    <label for="lot_id">Lot</label>
    <select name="lot_id">
        <option value="0">Please select lot</option>
        @foreach($lot_list as $lot_item)
            <option
                @if($lot_item->id == $bet->lot_id)
                    selected
                @endif
                value="{{$lot_item->id}}"
            >{{$lot_item->title}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
