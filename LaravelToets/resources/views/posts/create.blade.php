@include('includes.base')
<div class="container">
    <h1>Maak een post</h1>

    <form action="{{ route('forum.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="subject">Onderwerp</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Onderwerp">
        </div>
        <div class="form-group">
            <label for="content">Inhoud</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Inhoud"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Maak post</button>
    </form>
</div>