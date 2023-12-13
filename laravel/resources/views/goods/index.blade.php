
@vite('resources/css/app.css')
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Назва</th>
                        <th class="py-3 px-6 text-left">Виробник</th>
                        <th class="py-3 px-6 text-center">Ціна</th>
                        <th class="py-3 px-6 text-center">Дата</th>
                        <th class="py-3 px-6 text-center">Дії</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                    @foreach($goods as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <span class="font-medium">{{$item->id}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{$item->name}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <span>{{$item->produser}}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span>{{$item->price}}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span>{{$item->date}}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{route('goods.page', ['id' => $item->id])}}" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">Видалити</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

