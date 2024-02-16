<x-layout>
    <form action="{{route('articoli.store') }}"  method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" value={{old('title')}} >
          </div>
          @error('title')<span class="text-danger">{{ $message }}</span> @enderror
        <div class="mb-3">
          <label for="category" class="form-label">Categoria</label>
          <input name="category" type="text" class="form-control" id="category" value={{old('category')}}>
        </div>
        @error('category')<span class="text-danger">{{ $message }}</span> @enderror
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <input name="description" type="text" class="form-control" id="description" value={{old('description')}}>
        </div>
        @error('description')<span class="text-danger">{{ $message }}</span> @enderror
        <div class="mb-3">
        
        <input name="image" type="file" class="form-control" id="image" value={{old('description')}}>
        </div>
        <button name="submit" class="btn btn-primary">Invia</button>
      </form>
</x-layout>