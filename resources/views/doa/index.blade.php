<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Doa
        </h2>
        <table class="w-full text-left rounded-lg mt-10">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Judul</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doas as $doa)
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4">{{ $doa->judul }}</td>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>



    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}





</x-app-layout>
