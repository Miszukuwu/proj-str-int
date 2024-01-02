<div class="panel">
    <h1 class="title">Posty</h1>
    <form action="?operation=add_post" method="post">
        <input required type="text" name="tytul" id="title" class="posty" placeholder="Tytuł posta">
        <input required type="date" name="date" id="date" class="posty">
        <textarea id="editor" name="tresc" id="tresc" rows="15" class="posty"></textarea>
        <button type="submit">Zapisz</button>
    </form>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
