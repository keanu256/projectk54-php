<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->script('/lib/tinymce/tinymce.min.js')?>   
</head>
<body>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
    <script>
        tinymce.init({ 
            selector:'#editor1',
            file_browser_callback: function(field_name, url, type, win) {
                console.log(field_name);
            },
            plugins : [
                "advlist autolink code link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview wordcount"
            ],
            external_filemanager_path:"filemanager/",
            filemanager_title:"File Manager" ,
            external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"}
        });    
    </script>
</body>
</html>