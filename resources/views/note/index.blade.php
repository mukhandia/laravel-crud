<x-layout>
    <div class="note-container">
        <a href="{{route('note.create')}}" class="new-note-button">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{Str::words( $note->note,30) }}
                    </div>

                </div>
                <div class="note-buttons">
                    <a href="{{route('note.show', $note)}}" class="note-view-button">View</a>
                    <a href="{{route('note.edit',$note)}}" class="note-edit-button">Edit</a>
                    <a href="{{route('note.destroy',$note)}}" class="note-delete buttom">Delete</a>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
