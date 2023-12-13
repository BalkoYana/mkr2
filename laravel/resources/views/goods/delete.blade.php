@vite('resources/css/app.css')
<form method="POST" action="{{ route('goods.destroy', ['good' => $goods1->id]) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('DELETE')
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="good-id">
            Видалити товар з ID: {{$goods1->id}}
        </label>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
            Видалити
        </button>
    </div>
</form>
