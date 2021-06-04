<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Doa
        </h2>
        <table class="w-full text-left rounded-lg mt-10">
            <thead class="text-white" style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);>
                <tr class=" text-gray-800 border border-b-0">
                <th class="px-4 py-3">No.</th>
                <th class="px-4 py-3">Judul</th>
                <th class="px-4 py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doas as $doa)
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4">{{ $doa->judul }}</td>
                        <td class="px-4 py-4">
                            <a href="/doas/{{ $doa->doa_id }}" class="btn text-white font-bold px-2 py-1 text-sm 
                                uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400"
                                style="background-color: #41A7A5">Detail</a>
                        </td>


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
