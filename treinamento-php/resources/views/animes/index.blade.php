<x-layout title="Animes">
	<a href="/animes/criar" class="btn btn-success mb-3">Adicionar Anime</a>

    <ul class="list-group">
    @foreach ($animes as $anime)
    
    	<li class="list-group-item">{{ $anime }} </li>
	
	@endforeach
	
    </ul>
	
</x-layout>