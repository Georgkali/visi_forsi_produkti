<x-app>

    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">

                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center text-gray-300 text-sm font-medium">
                        <p><small>Visi</small></p>
                        <p><small>Forši</small></p><br>
                        <p><small>Produkti</small></p><br>
                    </div>

                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">

                            <a href="/home"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                            <a href="{{route('products.index')}}"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">List</a>

                            <a href="{{route('products.create')}}"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Add</a>

                            <a href="#"
                               class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Bin</a>


                        </div>


                    </div>

                </div>

                <form method="post" action="/logout">

                    @csrf
                    <button class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">
                        Logout {{\Illuminate\Support\Facades\Auth::user()['name']}}</button>
                </form>

            </div>
        </div>

    </nav>

    <br>
    <div class="max-w-7xl mx-auto">
        {{ $slot }}
    </div>
</x-app>

