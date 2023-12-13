@foreach($goods as $goods1)
    <form method="POST" action="{{ route('goods.destroy', ['good' => $goods1->id]) }}">
        @csrf
        @method('DELETE')
        @endforeach
        <button type="submit">Delete</button>
    </form>
