<x-auth>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color: red">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Delete Product
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Edit Product
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Attribute key
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Attribute value
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Save Attribute
                            </th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">


                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">

                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900 ">
                                            <form method="post" action="{{route('products.destroy', $product)}}">
                                                @csrf
                                                @method('delete')
                                                <button class="text-indigo-600 hover:text-indigo-900"
                                                        onclick="return confirm('Are you really' +
                                                            ' want to delete {{$product->name}} product')">Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <form method="post" action="{{route('products.update', $product)}}">
                                @csrf
                                @method('put')
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 ">
                                                <input type="text" name="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{$product->name}}">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <input type="text" name="description" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{$product->description}}">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 ">
                                                <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </form>
                            <form method="post" action="{{route('productAttributes.store_att', $product)}}">
                                @csrf
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        <input type="text" name="key" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">

                                        <input type="text" name="value" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300
                               placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500
                               focus:border-indigo-500 focus:z-10 sm:text-sm">
                                    </div>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">

                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 ">
                                                <button class="text-indigo-600 hover:text-indigo-900">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </form>

                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-auth>
