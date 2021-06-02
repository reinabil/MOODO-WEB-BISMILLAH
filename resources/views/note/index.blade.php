<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-xl text-center text-gray-800 leading-tight">Jurnal Harianmu
        </h2>
        <hr class="my-4">
        <div class="py-3">
            <a class="btn text-white shadow" style="border-radius: 25px; padding: 10px 25px 10px 25px; background-color: rgba(65, 167, 165, 1)" href="/notes/create"
                class="text-sm text-gray-700 underline">Tambah Data</a>
        </div>
        <div class="py-3">
            <table class="w-full text-left rounded-lg">
                <thead>
                    <tr class="text-white border border-b-0" style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);">
                        <th class="px-4 py-3">No.</th>
                        <th class="px-4 py-3">Judul</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Mood</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($notes as $note)
                        <tr class="w-full font-light text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                            <td class="px-4 py-4">{{ $loop->iteration }}</td>
                            <td class="px-4 py-4">{{ $note->title }} 
                            <div class="btn-group py-3 d-grid gap-2" role="group" aria-label="Button group">
                                <a href="/notes/{{ $note->note_id }}" class="btn text-white font-bold px-2 py-1 text-sm 
                                    uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400" style="background-color: #41A7A5">Detail</a>
                                
                                <a href="/notes/{{ $note->note_id }}/edit"
                                    class="btn bg-green-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                    Edit</a>
                            </div>
                            </td>
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
                            
                            <div class="btn-group" role="group" aria-label="Button group example">
                                <form action="/notes/{{ $note->note_id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn bg-red-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                        Delete</button>
                                </form>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    

    <!-- ini apa???? yg dibawah sini? -->

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
    </x-slot>

</x-app-layout>
