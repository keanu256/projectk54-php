<?= $this->Element('Homepage/banner_homepage') ?>	
<?= $this->Element('Homepage/ads_homepage') ?>	
<?= $this->Element('Homepage/institutional_homepage') ?>	
<?= $this->Element('Homepage/billboard_homepage') ?>	

<?= $this->Html->script('jquery-3.2.1.js') ?>
<!-- <script>
    $(function() {
        try{
            var socket = io.connect('http://localhost:6789', {
                query: {
                    user: 'democlient',
                    page_url: window.location.pathname
                }
            })
            
            console.log(window.location.pathname);

            socket.on("user_on_page", function(data) {
                console.log(data.total);
            })
        }catch(e){
            console.log(e);
        }     
    });
</script> -->