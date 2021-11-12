{{-- TO USE --}}
{{--
                @include('partials.editor')
 --}}

<div class="trumbowyg-dark">
    <textarea id="texteditor"></textarea>
</div>

@section('css')
<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/ui/trumbowyg.min.css') }}">

<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/plugins/colors/ui/trumbowyg.colors.css') }}">
<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/plugins/emoji/ui/trumbowyg.emoji.min.css') }}">

<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/plugins/giphy/ui/trumbowyg.giphy.min.css') }}">
<link rel="stylesheet" href="{{ asset('Trumbowyg-main/dist/plugins/table/ui/trumbowyg.table.min.css') }}">
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

<script src="{{ asset('Trumbowyg-main/dist/plugins/colors/trumbowyg.colors.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/emoji/trumbowyg.emoji.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/giphy/trumbowyg.giphy.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/indent/trumbowyg.indent.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/pasteembed/trumbowyg.pasteembed.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/pasteimage/trumbowyg.pasteimage.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/jquery-resizable.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/resizimg/trumbowyg.resizimg.min.js') }}"></script>
<script src="{{ asset('Trumbowyg-main/dist/plugins/table/trumbowyg.table.min.js') }}"></script>

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
        ['indent', 'outdent'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen'],
        ['foreColor', 'backColor'],
        ['giphy'],
        ['emoji'],
        ['table']
    ],
    plugins: {
        colors: {
            colorList: [
                '000', '111', '222', 'ffea00'
            ]
        },

        giphy: {
            apiKey: '7uOO21PLZVor97zsoJIG7yJ9ycR7rB1r'
        },

        resizimg: {
            minSize: 64,
            step: 16,
        },

        table: {
            // Some table plugin options, see details below
        }
    }

});
</script>
@append
