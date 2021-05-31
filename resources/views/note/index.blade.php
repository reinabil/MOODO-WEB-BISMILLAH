<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Catatan Harianmu
        </h2>
        <div class="py-3">

            <a href="/notes/create">Tambah Data (INI TOMBOL)</a>
        </div>
        <table class="w-full text-left rounded-lg">
            <thead>
                <tr class="text-gray-800 border border-b-0">
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Mood</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                        <td class="px-4 py-4">{{ $loop->iteration }}</td>
                        <td class="px-4 py-4">{{ $note->title }}</td>
                        <td class="px-4 py-4">{{ $note->updated_at }}</td>
                        <td class="px-4 py-4">
                            @if ($note->mood_id == 1)
                                Sedih
                            @endif
                            @if ($note->mood_id == 2)
                                Biasa aja
                            @endif
                            @if ($note->mood_id == 3)
                                Senang
                            @endif
                            {{-- href="/students/{{ $student->id }}" --}}
                        </td>
                        <td class="text-center py-4">

                            <a href="/notes/{{ $note->note_id }}"
                                class="bg-blue-500 text-white font-bold px-4 py-2 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">Detail</a>
                            <button
                                class="bg-green-500 text-white font-bold px-4 py-2 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                Edit</button>
                            <form action="/notes/{{ $note->note_id }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white font-bold px-4 py-2 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                    Delete</button>
                            </form>

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



    <div class="bg-white rounded-lg shadow-lg">
        <div class="block overflow-x-auto mx-6 mb-8">

        </div>
    </div>

</x-app-layout>
