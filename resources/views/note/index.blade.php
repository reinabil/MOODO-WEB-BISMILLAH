<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-xl text-center text-gray-800 leading-tight">Jurnal Harianmu
        </h2>
        <hr class="my-4">
        <div class="pt-3">
            <a class="btn text-white shadow" style="border-radius: 25px; padding: 10px 25px 10px 25px; background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);" href="/notes/create"
                class="text-sm text-gray-700 underline">Tambah Data</a>
        </div>
        <div class="py-1">
                    <!-- TODO MULAI LOOPING -->
                    @foreach ($notes as $note)
                    <div class="max-w-md py-4 px-8 shadow-lg rounded-lg my-5" style="background-image: linear-gradient(to bottom right, #62D69F, #41A7A5);">
            <div>
                <h3 class="text-white text-2xl font-semibold">{{ $note->title }}</h3>
                <h6 class="text-gray-100 text-sm">{{ $note->updated_at }}</h5>
                <h4 class="mt-2 text-white font-semibold">Mood: @if ($note->mood_id == 1)
                                    Sedih
                                @endif
                                @if ($note->mood_id == 2)
                                    Biasa aja
                                @endif
                                @if ($note->mood_id == 3)
                                    Senang
                                @endif
                                {{-- href="/students/{{ $student->id }}" --}}</h4>
            </div>
            <div class="flex justify-center mt-3 space-x-3">
                <a href="/notes/{{ $note->note_id }}" class="btn text-white font-bold px-2 py-1 text-sm 
                                        uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400" style="background-color: #41A7A5">Detail</a>
                                    
                <a href="/notes/{{ $note->note_id }}/edit"
                                        class="btn bg-green-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                        Edit</a>
                <form action="/notes/{{ $note->note_id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn bg-red-400 text-white font-bold px-2 py-1 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-pink-400">
                                            Delete</button>
                                    </form>

            </div>
            <div class="flex justify-end mt-2">
            
            <h2 class="text-gray-200 text-xl font-semibold">{{ $loop->iteration }}</h2>
            </div>
    </div>
                    @endforeach
        </div>
    
    <!-- NOTE Card -->
        


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
