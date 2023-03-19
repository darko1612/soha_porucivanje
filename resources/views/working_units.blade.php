<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Radne jedinice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Radne jedinice
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('radne_jedinice.create')" :active="request()->routeIs('radne_jedinice.create')"
                                    class="btn ">
                            {{ __('Kreiranje radne jedinice') }}
                        </x-nav-link>
                    </div>
                </div>

                <table/>
                @foreach ($working_units as $working_unit)
                    <tr>
                        <td>{{ $working_unit->name }} </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="radne_jedinice/{{$working_unit->id}}/edit">Izmeni</a>
                        </td>
                        <td>
                            <form action="{{url('/radne_jedinice/'. $working_unit->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit button">Obrisi</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <table/>
            </div>
        </div>
    </div>
</x-app-layout>