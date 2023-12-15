@include('includes.base')
<div class="container">
    <h1>{{ $post->subject }}</h1>
    <h2>{{ $post->content }}</h2>

    <a href="{{ route('forum.index') }}" class="btn btn-secondary">Terug naar Home</a>
    <br>
    <br>
    <h2>Comments</h2>
    @foreach ($comments as $comment)
        <div class="card">
            <div class="card-header">
                <h3>{{ $comment->user->name }}</h3>
            <div class="card-body">
                <p>{{ $comment->content }}</p>
            </div>
        </div>
        <br>
    @endforeach
</div>
