<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Kreiranje artikla') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="/kreiranje_artikla">
                    @csrf
                    @method('POST')
                    <label for="title">Naziv artikla</label>

                    <input id="naziv_artikla"
                           type="text"
                           class="@error('title') is-invalid @enderror">

                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for="jedinica_mere">Jedinica mere</label>
                    <select name="jedinica_mere" id="">
                        <option value="komad">Komad</option>
                        <option value="paket">Paket</option>
                        <option value="gajba">Gajba</option>
                        <option value="kilogram">Kilogram</option>
                    </select>
                    <label for="dobavljac">Dobavljac</label>
                    <select name="dobavljac" id="">
                        <option value="nema dobavljaca">Nema odredjenog dobavljaca</option>

                    </select>
                    <button type="button" class="btn btn-outline-success">Sacuvaj</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>