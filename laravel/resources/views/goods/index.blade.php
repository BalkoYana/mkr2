

<table border="1">
    @foreach($goods as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->produser}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->date}}</td>
            <td>
                <a href="{{route('goods.page', ['id' => $item->id])}}">Видалити</a>

            </td>
        </tr>
    @endforeach
</table>
