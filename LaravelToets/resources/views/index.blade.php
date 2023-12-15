@include('includes.base')
<!-- User Systeem, delete, post comment is niet werkend. Had te weinig tijd en wou een functionele app opleveren. -->
<!-- Had weinig verstand van Bootstrap css. Dus daarom ziet de styling er slecht uit. -->
<div class="container">
    <h1>Welkom bij de forumpagina!</h1>
    <div class="gridcontainer">
        <h2>Posts</h2>
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <h3>{{ $post->subject }}</h3>
                </div>
                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('forum.show', $post->id) }}" class="btn btn-secondary">Bekijk post</a>
                </div>
            </div>
            <br>
        @endforeach
    </div>
    <a href="{{ route('create') }}" class="btn btn-primary">Maak een post</a>
    <br>
</div>