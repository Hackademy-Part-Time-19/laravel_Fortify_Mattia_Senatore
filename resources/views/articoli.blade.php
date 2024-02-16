<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($articles as $chiave => $articolo )
                
            
            <x-cards
            :titolo="$articolo['title']"
            :categoria="$articolo['category']"
            :descrizione="$articolo['description']"
            :immagine="Storage::url($articolo['image'])">
            

            </x-cards>
            
            @endforeach
        </div>
    </div>
</x-layout>