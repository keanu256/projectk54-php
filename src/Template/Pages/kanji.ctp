<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kanji</title>
    <?= $this->Html->script('/lib/jquery/jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('/lib/raphael/raphael.min.js') ?>
    <?= $this->Html->script('/lib/dmak/dmak.min.js') ?>
    <?= $this->Html->script('/lib/dmak/jquery.dmak.min.js') ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
    .kanjidiv{
        left:50%;
        top:50%;
        position: absolute;
        transform: translate(-50%,-50%);
    }

    .bordered{
        border: 2px black solid;
    }

    #kanji{
        width: 250px;
        height: 252px;
        top: -25px;
        position: relative;
    }

    .control-kanji{
        text-align:center;
        height: 25px;
        padding-left: 25px;
    }

    .kanji-circle{
        background: steelblue;
        width: 22px;
        padding: 10px;
        color: #fff;
        border-radius: 15%;
        margin-right: 10px;
        margin-bottom: 10px;
        float: left;
        font-size: 20px;
    }
    .kanji-circle:hover{
        cursor: pointer;
        background: red;
    }
    .kanji-add{
        background: green;
        width: 22px;
        padding: 10px;
        color: #fff;
        border-radius: 15%;
        margin-right: 10px;
        margin-bottom: 10px;
        float: left;
        font-size: 20px;
    }
    .kanji-add:hover{
        cursor: pointer;
        background: purple;
    }
    .kanji-arr{
        text-align: center;
    }
 
</style>
<div class="kanji-arr">
    <div class="kanji-add">+</div>
<div>
<div class="kanjidiv">
    <div id="kanji" class=""></div>
    <div class"control-kanji"> 
        <center>
        <button type="button" id="prev">PREV</button>
        <button type="button" id="pause">PAUSE</button>
        <button type="button" id="next">NEXT</button>
        </center>
    </div>
</div>

<script>
    var kanjiArray = '<?= $kanjiArray ?>';
    var kanjiPresent = 0;
    var dmak;
    var flagPause = false;

    var option = {
        'element': "kanji",
        'uri': "/kanjivg/",
        'width': 250,
        'height': 250,
        'stroke': {
            'order': {
                'visible' : false,
                'attr': {
                    'font-size' : 8,
                    'fill' : "#999999"
                }
            },
            'attr':{
                'stroke' : '#000', //random neu muon ngau nhien mau
                'stroke-width' : 5,
                'stroke-linecap' : 'round',
                'stroke-linejoin' : 'miter'
            }
        },
        'grid': {
            'attr':{
                'stroke' : '#000',
                'stroke-width': 0.5
            }
        },
        'step': 0.02
    };

    $(function() {  
        for(var i = 0; i < kanjiArray.length; i++){
            $('.kanji-arr').find('.kanji-add').before('<div class="kanji-circle">'+kanjiArray[i]+'</div>');
        }
        drawKanji(kanjiArray[0]);
    });

    $(document).on('click','button[id="pause"]',function(){      
        if(!flagPause){
            dmak.pause();         
        }else{
            dmak.render()
        }
        flagPause = !flagPause;
    });

    $(document).on('click','button[id="next"]',function(){
        var p = kanjiPresent%kanjiArray.length + 1;
        kanjiPresent = (p >= kanjiArray.length) ? 0 : p;
        drawKanji(kanjiArray[kanjiPresent]);
    });

    $(document).on('click','button[id="prev"]',function(){
        var p = kanjiPresent%kanjiArray.length - 1;
        kanjiPresent = (p <= 0) ? (kanjiArray.length-1) : p;
        drawKanji(kanjiArray[kanjiPresent]);
    });

    $(document).on('click','.kanji-circle',function(){
        drawKanji($(this).html().trim());
    });

    $(document).on('click','.kanji-add',function(){
        elementTMP = $(this);
        swal({
            content: {
                element: "input",
                attributes: {
                    placeholder: "Only One Character",
                },
            },
        }).then(function(result){
            if(result.length > 1){
                swal('ERROR!');
            }else{
                kanjiArray += result;
                elementTMP.before('<div class="kanji-circle">'+result+'</div>');
            }
        });
    });

    function drawKanji(kanji){
        $('#kanji').addClass('bordered');
        $('#kanji').empty();
        dmak = new Dmak(kanji, option);
        dmak.render();
    }
</script>
