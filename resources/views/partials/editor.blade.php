@section('css')
<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/ui/trumbowyg.min.css') }}">
@append


@section('scripts')
<!-- Import jQuery -->
<script src="{{ asset('Trumbowyg-main/docs/js/vendor/jquery-3.3.1.min.js') }}"></script>
<script>
    // window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
</script>

<!-- Import Trumbowyg -->
<script src="{{ asset('Trumbowyg-main/dist/trumbowyg.min.js') }}"></script>

<!-- Import Trumbowyg  Plugins -->

<script>
    $('#texteditor').trumbowyg({
        btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]

});
</script>
@append
