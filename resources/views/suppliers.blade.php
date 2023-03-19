<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dobavljaci') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Dobavljaci

                    <table/>
                    @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $supplier->name }} </td>
                            <td>
                                <a class="btn btn-info btn-sm" href="dobavljaci/{{$supplier->id}}/edit">Izmeni</a>
                            </td>
                            <td>
                                <form action="{{url('/dobavljaci/'. $supplier->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit button">Obrisi</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <table/>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dobavljaci.create')"
                                    :active="request()->routeIs('dobavljaci.create')">
                            {{ __('Kreiranje dobavljaca') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>