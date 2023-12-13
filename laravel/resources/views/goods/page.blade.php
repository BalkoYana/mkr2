<h1>Ви впевнені, що хочете видалити цей товар?</h1>
<p>{{$good->name}}</p>
<form method="POST" action="{{ route('goods.destroy', ['good' => $good->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Так, видалити</button>
</form>
<a href="{{route('goods.index')}}">Ні, повернутися назад</a>
