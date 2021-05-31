<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Semoga harimu menyenangkan ya,
            @php
                $myvalue = Auth::user()->name;
                $arr = explode(' ', trim($myvalue));
                echo $arr[0];
            @endphp
            !
        </h2>
        <x-jet-nav-link href="{{ route('notes.index') }}" :active="request()->routeIs('doas.*')">
            {{ __('Catatan harianmu') }}
        </x-jet-nav-link>
    </x-slot>

    {{-- <div class="bg-white rounded-lg shadow-lg">
        <div class="block overflow-x-auto mx-6 mb-8">

        </div>
    </div> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <div class="bg-white rounded-lg shadow-lg py-6">
        <div class="block overflow-x-auto mx-6">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="text-gray-800 border border-b-0">
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Judul</th>

                    </tr>
                </thead>
                <tbody>




                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
