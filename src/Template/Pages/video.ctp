<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->css('/lib/plyr/plyr.css') ?>
</head>
<body>
    <style>
        .plyr__control--overlaid{
            background: rgb(211, 217, 226);
            border: 0;
            border-radius: 50% / 10%;  
            padding: 20px 35px;           
        }
        .plyr__control--overlaid:hover{
            background: rgb(211, 217, 226);
        }
        .plyr__control--overlaid:before{
            background: rgb(211, 217, 226);
            border-radius: 5% / 50%;
            bottom: 9%;
            content: "";
            left: -5%;
            position: absolute;
            right: -5%;
            top: 9%;  
        }
        .plyr__control--overlaid svg{
            height: 40px;
            width: 40px;
        }

        .plyr--init-hide-controls .plyr__controls {
            opacity: 0;
        }
    </style>
    <!-- <div style="width:600px; height:550px;">
        <audio id="player" controls>
            <source src="/filemanager/uploads/audio/1.mp3" type="audio/mp3">
            <source src="/filemanager/uploads/audio/2.mp3" type="audio/mp3">
        </audio>
    </div> -->

    <div style="width:600px; height:550px;">
        <video id="player" controls></video>
    </div>
   
    <?= $this->Html->script('/lib/jquery/jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('/lib/plyr/plyr.js') ?>
    <script>
        // const player = new Plyr('#player', {
        //     settings : [
        //         'captions', 'quality', 'speed', 'loop'
        //     ],
        //     loop: {
        //         active: true
        //     },
        //     controls: [
        //         'play-large', 
        //         'play', 
        //         'progress', 
        //         'current-time', 
        //         'mute', 
        //         'volume', 
        //         'captions', 
        //         'settings', 
        //         'pip', 
        //         'airplay', 
        //         'fullscreen'
        //     ]
        // });

        const player = new Plyr('#player',{
            controls: [
                'play-large', // The large play button in the center
                'restart', // Restart playback
                'rewind', // Rewind by the seek time (default 10 seconds)
                'play', // Play/pause playback
                'fast-forward', // Fast forward by the seek time (default 10 seconds)
                'progress', // The progress bar and scrubber for playback and buffering
                'current-time', // The current time of playback
                'duration', // The full duration of the media
                'mute', // Toggle mute
                'volume', // Volume control
                'captions', // Toggle captions
                'settings', // Settings menu
                'pip', // Picture-in-picture (currently Safari only)
                'airplay', // Airplay (currently Safari only)
                'fullscreen', // Toggle fullscreen
            ]
        });
        

        $(function() {  
            player.source = {
                title: 'ysys',
                type: 'video',
                sources: [
                    {
                        src: '/filemanager/uploads/video/1.mp4',
                        type: 'video/mp4',
                        title: 'Example title',
                    },
                ],
                tracks: [
                    {
                        kind: 'captions',
                        label: 'English',
                        srclang: 'en',
                        src: '/path/to/captions.en.vtt',
                        default: true,
                    },
                    {
                        kind: 'captions',
                        label: 'French',
                        srclang: 'fr',
                        src: '/path/to/captions.fr.vtt',
                    },
                ],
            };

            // player.source = {
            //     type: 'audio',
            //     title: 'Example title',
            //     sources: [
            //         {
            //             src: '/filemanager/uploads/audio/1.mp3',
            //             type: 'audio/mp3',
            //         },
            //         {
            //             src: '/filemanager/uploads/audio/2.mp3',
            //             type: 'audio/mp3',
            //         },
            //     ],
            // };
        }); 

        $('.plyr').on('ready', function(event) {

            $(this).addClass('plyr--init-hide-controls');

        }).on('play', function(event) {

            $(this).removeClass('plyr--init-hide-controls');

        });      
    </script>
</body>
</html>