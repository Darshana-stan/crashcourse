<x-app-layout>
    <div class="note-container">
     <a href="{{route('note.create')}}" class="note-edit-button">     
         New Note
     </a>
     @foreach($notes as $note)
     <div class="notes">
         <div class="note">
             <h3 class="note-title">{{ $note->title }}</h3>
             <div class="note-body">
                 {{ Str::words($note->note, 5)}} 
             </div>
             <div class="note-buttons">
                 <a href="{{route('note.show',$note)}}" class="note-edit-button">View</a>
                 <a href="{{route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                 <form action="{{ route('note.destroy', $note)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-edit-button">Delete</button>
                 </form>
             </div>
         </div>
     </div>
     @endforeach
     {{$notes->links()}}
    </div>
 </x-app-layout>
  
 
 