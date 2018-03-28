<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->script('/lib/tinymce/tinymce.min.js')?>   
</head>
<body>
    <form method="post">
        <textarea name="editor1" id="editor1" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
        </textarea>
    </form>
    <script>
        tinymce.init({ 
            selector:'#editor1',
            file_browser_callback: function(field_name, url, type, win) {
                console.log(field_name);
            },
            branding: false,
            toolbar: [
                "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify anchor | forecolor backcolor |bullist numlist outdent indent | link image | visualchars searchreplace",
                "fullscreen preview code | responsivefilemanager media emoticons help save"
            ],
            plugins : [
                "advlist anchor autolink autoresize code link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking bbcode codesample",
                "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview",
                "colorpicker fullpage help imagetools textcolor"
            ],
            save_onsavecallback: function (e) { console.log(e); },
            external_filemanager_path:"filemanager/",
            filemanager_title:"File Manager" ,
            external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"}
        });    
    </script>
</body>
</html>