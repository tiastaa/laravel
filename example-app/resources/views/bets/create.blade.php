<form action="{{route('bets.store')}}" method="post">

    @csrf
    <label for="name">Name</label>
    <input required name="name"/>
    <br/>
    <label for="price">Price</label>
    <input required name="price"/>
    <br/>
    <label for="lot_id">Lot</label>
    <select name="lot_id">
        <option value="0">please select Lot</option>
        @foreach($lot_list as $lot_item)
            <option value="{{$lot_item->id}}">{{$lot_item->owner}}</option>
        @endforeach
    </select>
    <br/>
    <br/>
    <button type="submit">Create</button>
</form>
