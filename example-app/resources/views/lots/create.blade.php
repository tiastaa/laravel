<form action="{{route('lots.store')}}" method="post">

    @csrf

    <label for="title">Title</label>
    <input required name = "title"/>
    <br/>
    <label for="start">Start</label>
    <input type="date" required name = "start"/>
    <br/>
    <label for="finish">Finish</label>
    <input type="date" required name = "finish"/>
    <br/>
    <label for="price">Price</label>
    <input required name ="price"/>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
