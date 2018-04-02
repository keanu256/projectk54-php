<?= $this->Html->script('/lib/tinymce/tinymce.min.js')?>   
<?= $this->Html->script('jquery-3.2.1.js')?>   
<form method="post" action="/editor_content_save">
    <textarea id="<?= $editor_id ?>" rows="10" cols="80" style="display:none">
        
    </textarea>
</form>
<script>
    let current_url = window.location.pathname + window.location.search;
    $(function() {
        $.ajax({
            url: '<?= $this->Url->build(['controller'=>'Pages','action' => 'loadEditorSave']) ?>',
            data: {url:current_url, user_id: 1},
            type: 'post',
            success: function(res){
                let content = (res.code == 200)? res.data.content : '';
                InitMCE(content);             
            }
        });           
    });  

    function InitMCE(content){
        tinymce.init({ 
            selector:'#<?= $editor_id ?>',
            setup: function(editor) {
                editor.on('init', function(e) {
                    editor.execCommand('mceFullScreen');
                });
            },
            init_instance_callback: function(editor){
                editor.execCommand('insertHTML', false, content);                       
            },
            branding: false,
            toolbar: [
                "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify anchor | forecolor backcolor |bullist numlist outdent indent | link image | visualchars searchreplace" ,
                "productpreview code | responsivefilemanager media emoticons help save"
            ],
            plugins : [
                "advlist anchor autolink autoresize code link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking bbcode codesample",
                "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview",
                "colorpicker help imagetools textcolor productpreview"
            ],
            save_onsavecallback: function (e) { 
                $.ajax({
                    url: '<?= $this->Url->build(['controller'=>'Pages','action' => 'saveEditorContent']) ?>',
                    data: {url:current_url, user_id: 1, content: tinymce.activeEditor.getContent({format: 'raw'})},
                    type: 'post',
                    success: function(res){
                        console.log(res);          
                    }
                }); 
            },
            external_filemanager_path:"filemanager/",
            filemanager_title:"File Manager" ,
            external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"}
        }); 
        $('#<?= $editor_id ?>').show();
    } 
</script>
