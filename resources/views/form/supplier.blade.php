<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(@isset($supplier))
                {{ __('Izmena dobavljaca') }}
            @else
                {{ __('Kreiranje dobavljaca') }}
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form
                            @isset($supplier)
                            action="{{url('/dobavljaci/'. $supplier->id)}}" method="POST"
                            @endisset
                            action="{{url('dobavljaci')}}" method="POST">
                        @if(@isset($supplier))
                            @method('PUT')
                        @else
                            @method('POST')
                        @endif
                        @csrf
                        <label for="name">Naziv dobavljaca</label>

                        <input id="name"
                               name="name"
                               type="text"
                               class="@error('name') is-invalid @enderror"
                               @isset($supplier)
                               value="{{ $supplier->name }}"
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