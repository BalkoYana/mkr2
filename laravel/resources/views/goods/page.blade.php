@vite('resources/css/app.css')
<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h1 class="text-2xl font-semibold leading-tight">Ви впевнені, що хочете видалити цей товар?</h1>
            <p class="text-xl mt-2">{{$good->name}}</p>
        </div>
        <div class="my-2 flex sm:flex-row flex-col">
            <div class="flex flex-row mb-1 sm:mb-0">
                <form method="POST" action="{{ route('goods.destroy', ['good' => $good->id]) }}" class="mt-6">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Так, видалити</button>
                </form>
                <a href="{{route('goods.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">Ні, повернутися назад</a>
            </div>
        </div>
    </div>
</div>

