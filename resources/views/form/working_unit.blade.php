<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(@isset($working_unit))
                {{ __('Izmena radne jedinice') }}
            @else
                {{ __('Kreiranje radne jedinice') }}
            @endif

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form
                          @isset($working_unit)
                          action="{{url('/radne_jedinice/'. $working_unit->id)}}" method="POST"
                          @endisset
                          action="{{url('radne_jedinice')}}" method="POST">
                        @if(@isset($working_unit))
                            @method('PUT')
                        @else
                            @method('POST')
                        @endif
                        @csrf

                        <label for="title">Naziv radne jedinice</label>

                        <input id="naziv_radne_jedinice"
                               name="name"
                               type="text"
                               class="@error('title') is-invalid @enderror"
                               @isset($working_unit)
                               value="{{ $working_unit->name }}"
                                @endisset>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="button submit" class="btn btn-outline-success">Sacuvaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>