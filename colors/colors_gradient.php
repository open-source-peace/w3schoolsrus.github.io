<?php include '../include/head.php'; ?>
<title>HTML Цветовой градиент. <?php include '../include/title.php'; ?></title>
<meta name='description' content='HTML Цветовой градиент. Что такое градиент? Как используются градиенты на веб-страницах? Как сделать цветовой градиент? <?php include '../include/description.php'; ?>'>
<style>
        #shield {
            display:none;
            top:0;
            left:0;
            width:100%;
            position:absolute;
            height:100%;
            z-index:4;
        }

        .colorinput {
            width:105px;
            padding:25px 0 15px 0;
        }
        .colorslider {
            padding:30px 25px 15px 20px;
        }
        .tableslider {
            width:100%;
            border-collapse:collapse;
        }
        .pointer {
            cursor:pointer;text-align:center;display:none;position:absolute;top:-14px;left:-2px;
        }
        .pointerup {
            cursor:pointer;text-align:center;display:none;position:absolute;top:-10px;left:-2px;
        }
        .pointer div{
            background-color:#ffffff;
            border:1px solid #aaaaaa;
            height:24px;
            width:40px;
            padding:2px 4px;
            position:absolute;
            text-align:center;
            top:-14px;
            left:-15px;
            color:#000000;
            border-radius:4px;
            font:14px verdana;
        }
        .pointerup div{
            background-color:#ffffff;
            border:1px solid #aaaaaa;
            height:24px;
            width:40px;
            padding:2px 4px;
            position:absolute;
            text-align:center;
            top:14px;
            left:-15px;
            color:#000000;
            border-radius:4px;
            font:14px verdana;
        }
        .pointer div::selection {
            color: #000000;
            background: #ffffff;
        }
        .pointer i{
            color:#aaaaaa
        }
        .pointerup div::selection {
            color: #000000;
            background: #ffffff;
        }
        .pointerup i{
            color:#aaaaaa
        }


        #result01 {
            height: 310px;
        }

        .directionbtn {
            height:100px;
            padding:5px;
        }
        .directionbtn div {
            width:100%;
            height:100%;
            text-align:center;
            font-size:48px;
            cursor:pointer;
        }
        .directionbtn div.active {
            outline:2px solid #555555;
            border:2px solid #f1f1f1;
        }

        .directionbtn div:hover {
            outline:2px solid #555555;
        }
        @media screen and (max-width:600px) {
            .colorinput {
                padding:25px 0 0 0;
            }
            .colorslider {
                width:100%;
                padding:30px 25px 15px 20px;
            }
            .directionbtn  {
                height:50px;
                padding:5px;
            }
            .directionbtn div {
                font-size:24px;
            }
            #pow1, #pow2 {
                max-width:60px;
            }
        }

    </style>
<?php include '../include/topmenu.php'; ?>
<?php include '../include/leftmenu_colors.php'; ?>
<?php include '../include/before_content_colors.php'; ?>

<article>
    <h1>Цветовой градиент</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_ncol.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_theory.php">Next &#10095;</a>
    </div>
    <br>
    <div class="w3-container w3-padding-large" style="background-color:#f1f1f1;border:1px solid #d3d3d3;">
        <div class="w3-row">
            <div class="w3-col m7">
                <h2>Градиент фона:</h2>
                <div id="result01"></div>
                <br>
                <div class="w3-row">
                    <div class="w3-col m12">
                        <div class="w3-row">
                            <div class="w3-col s3 directionbtn"><div id="dir1" onclick="setGradient('bottom')">&darr;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir2" onclick="setGradient('right')">&rarr;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir3" onclick="setGradient('top left')">&#8598;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir4" onclick="setGradient('top right')">&#8599;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir5" onclick="setGradient('top')">&uarr;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir6" onclick="setGradient('left')">&larr;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir7" onclick="setGradient('bottom left')">&#8601;</div></div>
                            <div class="w3-col s3 directionbtn"><div id="dir8" onclick="setGradient('bottom right')">&#8600;</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3-col m1">&nbsp;</div>
            <div class="w3-col m4">
                <h2>Выберите цвета:</h2>
                <div class="w3-hide-small">
                    <img style='margin-right:2px;' src='../images/img_colormap.gif' usemap='#colormap1' alt='colormap' /><map id='colormap1' name='colormap1' xonmouseout='mouseOutMap()'><area style='cursor:pointer' shape='poly' coords='63,0,72,4,72,15,63,19,54,15,54,4' onclick='clickColor(1,"#003366",-200,54)' xonmouseover='mouseOverColor("#003366")' alt='#003366' /><area style='cursor:pointer' shape='poly' coords='81,0,90,4,90,15,81,19,72,15,72,4' onclick='clickColor(1,"#336699",-200,72)' xonmouseover='mouseOverColor("#336699")' alt='#336699' /><area style='cursor:pointer' shape='poly' coords='99,0,108,4,108,15,99,19,90,15,90,4' onclick='clickColor(1,"#3366CC",-200,90)' xonmouseover='mouseOverColor("#3366CC")' alt='#3366CC' /><area style='cursor:pointer' shape='poly' coords='117,0,126,4,126,15,117,19,108,15,108,4' onclick='clickColor(1,"#003399",-200,108)' xonmouseover='mouseOverColor("#003399")' alt='#003399' /><area style='cursor:pointer' shape='poly' coords='135,0,144,4,144,15,135,19,126,15,126,4' onclick='clickColor(1,"#000099",-200,126)' xonmouseover='mouseOverColor("#000099")' alt='#000099' /><area style='cursor:pointer' shape='poly' coords='153,0,162,4,162,15,153,19,144,15,144,4' onclick='clickColor(1,"#0000CC",-200,144)' xonmouseover='mouseOverColor("#0000CC")' alt='#0000CC' /><area style='cursor:pointer' shape='poly' coords='171,0,180,4,180,15,171,19,162,15,162,4' onclick='clickColor(1,"#000066",-200,162)' xonmouseover='mouseOverColor("#000066")' alt='#000066' /><area style='cursor:pointer' shape='poly' coords='54,15,63,19,63,30,54,34,45,30,45,19' onclick='clickColor(1,"#006666",-185,45)' xonmouseover='mouseOverColor("#006666")' alt='#006666' /><area style='cursor:pointer' shape='poly' coords='72,15,81,19,81,30,72,34,63,30,63,19' onclick='clickColor(1,"#006699",-185,63)' xonmouseover='mouseOverColor("#006699")' alt='#006699' /><area style='cursor:pointer' shape='poly' coords='90,15,99,19,99,30,90,34,81,30,81,19' onclick='clickColor(1,"#0099CC",-185,81)' xonmouseover='mouseOverColor("#0099CC")' alt='#0099CC' /><area style='cursor:pointer' shape='poly' coords='108,15,117,19,117,30,108,34,99,30,99,19' onclick='clickColor(1,"#0066CC",-185,99)' xonmouseover='mouseOverColor("#0066CC")' alt='#0066CC' /><area style='cursor:pointer' shape='poly' coords='126,15,135,19,135,30,126,34,117,30,117,19' onclick='clickColor(1,"#0033CC",-185,117)' xonmouseover='mouseOverColor("#0033CC")' alt='#0033CC' /><area style='cursor:pointer' shape='poly' coords='144,15,153,19,153,30,144,34,135,30,135,19' onclick='clickColor(1,"#0000FF",-185,135)' xonmouseover='mouseOverColor("#0000FF")' alt='#0000FF' /><area style='cursor:pointer' shape='poly' coords='162,15,171,19,171,30,162,34,153,30,153,19' onclick='clickColor(1,"#3333FF",-185,153)' xonmouseover='mouseOverColor("#3333FF")' alt='#3333FF' /><area style='cursor:pointer' shape='poly' coords='180,15,189,19,189,30,180,34,171,30,171,19' onclick='clickColor(1,"#333399",-185,171)' xonmouseover='mouseOverColor("#333399")' alt='#333399' /><area style='cursor:pointer' shape='poly' coords='45,30,54,34,54,45,45,49,36,45,36,34' onclick='clickColor(1,"#669999",-170,36)' xonmouseover='mouseOverColor("#669999")' alt='#669999' /><area style='cursor:pointer' shape='poly' coords='63,30,72,34,72,45,63,49,54,45,54,34' onclick='clickColor(1,"#009999",-170,54)' xonmouseover='mouseOverColor("#009999")' alt='#009999' /><area style='cursor:pointer' shape='poly' coords='81,30,90,34,90,45,81,49,72,45,72,34' onclick='clickColor(1,"#33CCCC",-170,72)' xonmouseover='mouseOverColor("#33CCCC")' alt='#33CCCC' /><area style='cursor:pointer' shape='poly' coords='99,30,108,34,108,45,99,49,90,45,90,34' onclick='clickColor(1,"#00CCFF",-170,90)' xonmouseover='mouseOverColor("#00CCFF")' alt='#00CCFF' /><area style='cursor:pointer' shape='poly' coords='117,30,126,34,126,45,117,49,108,45,108,34' onclick='clickColor(1,"#0099FF",-170,108)' xonmouseover='mouseOverColor("#0099FF")' alt='#0099FF' /><area style='cursor:pointer' shape='poly' coords='135,30,144,34,144,45,135,49,126,45,126,34' onclick='clickColor(1,"#0066FF",-170,126)' xonmouseover='mouseOverColor("#0066FF")' alt='#0066FF' /><area style='cursor:pointer' shape='poly' coords='153,30,162,34,162,45,153,49,144,45,144,34' onclick='clickColor(1,"#3366FF",-170,144)' xonmouseover='mouseOverColor("#3366FF")' alt='#3366FF' /><area style='cursor:pointer' shape='poly' coords='171,30,180,34,180,45,171,49,162,45,162,34' onclick='clickColor(1,"#3333CC",-170,162)' xonmouseover='mouseOverColor("#3333CC")' alt='#3333CC' /><area style='cursor:pointer' shape='poly' coords='189,30,198,34,198,45,189,49,180,45,180,34' onclick='clickColor(1,"#666699",-170,180)' xonmouseover='mouseOverColor("#666699")' alt='#666699' /><area style='cursor:pointer' shape='poly' coords='36,45,45,49,45,60,36,64,27,60,27,49' onclick='clickColor(1,"#339966",-155,27)' xonmouseover='mouseOverColor("#339966")' alt='#339966' /><area style='cursor:pointer' shape='poly' coords='54,45,63,49,63,60,54,64,45,60,45,49' onclick='clickColor(1,"#00CC99",-155,45)' xonmouseover='mouseOverColor("#00CC99")' alt='#00CC99' /><area style='cursor:pointer' shape='poly' coords='72,45,81,49,81,60,72,64,63,60,63,49' onclick='clickColor(1,"#00FFCC",-155,63)' xonmouseover='mouseOverColor("#00FFCC")' alt='#00FFCC' /><area style='cursor:pointer' shape='poly' coords='90,45,99,49,99,60,90,64,81,60,81,49' onclick='clickColor(1,"#00FFFF",-155,81)' xonmouseover='mouseOverColor("#00FFFF")' alt='#00FFFF' /><area style='cursor:pointer' shape='poly' coords='108,45,117,49,117,60,108,64,99,60,99,49' onclick='clickColor(1,"#33CCFF",-155,99)' xonmouseover='mouseOverColor("#33CCFF")' alt='#33CCFF' /><area style='cursor:pointer' shape='poly' coords='126,45,135,49,135,60,126,64,117,60,117,49' onclick='clickColor(1,"#3399FF",-155,117)' xonmouseover='mouseOverColor("#3399FF")' alt='#3399FF' /><area style='cursor:pointer' shape='poly' coords='144,45,153,49,153,60,144,64,135,60,135,49' onclick='clickColor(1,"#6699FF",-155,135)' xonmouseover='mouseOverColor("#6699FF")' alt='#6699FF' /><area style='cursor:pointer' shape='poly' coords='162,45,171,49,171,60,162,64,153,60,153,49' onclick='clickColor(1,"#6666FF",-155,153)' xonmouseover='mouseOverColor("#6666FF")' alt='#6666FF' /><area style='cursor:pointer' shape='poly' coords='180,45,189,49,189,60,180,64,171,60,171,49' onclick='clickColor(1,"#6600FF",-155,171)' xonmouseover='mouseOverColor("#6600FF")' alt='#6600FF' /><area style='cursor:pointer' shape='poly' coords='198,45,207,49,207,60,198,64,189,60,189,49' onclick='clickColor(1,"#6600CC",-155,189)' xonmouseover='mouseOverColor("#6600CC")' alt='#6600CC' /><area style='cursor:pointer' shape='poly' coords='27,60,36,64,36,75,27,79,18,75,18,64' onclick='clickColor(1,"#339933",-140,18)' xonmouseover='mouseOverColor("#339933")' alt='#339933' /><area style='cursor:pointer' shape='poly' coords='45,60,54,64,54,75,45,79,36,75,36,64' onclick='clickColor(1,"#00CC66",-140,36)' xonmouseover='mouseOverColor("#00CC66")' alt='#00CC66' /><area style='cursor:pointer' shape='poly' coords='63,60,72,64,72,75,63,79,54,75,54,64' onclick='clickColor(1,"#00FF99",-140,54)' xonmouseover='mouseOverColor("#00FF99")' alt='#00FF99' /><area style='cursor:pointer' shape='poly' coords='81,60,90,64,90,75,81,79,72,75,72,64' onclick='clickColor(1,"#66FFCC",-140,72)' xonmouseover='mouseOverColor("#66FFCC")' alt='#66FFCC' /><area style='cursor:pointer' shape='poly' coords='99,60,108,64,108,75,99,79,90,75,90,64' onclick='clickColor(1,"#66FFFF",-140,90)' xonmouseover='mouseOverColor("#66FFFF")' alt='#66FFFF' /><area style='cursor:pointer' shape='poly' coords='117,60,126,64,126,75,117,79,108,75,108,64' onclick='clickColor(1,"#66CCFF",-140,108)' xonmouseover='mouseOverColor("#66CCFF")' alt='#66CCFF' /><area style='cursor:pointer' shape='poly' coords='135,60,144,64,144,75,135,79,126,75,126,64' onclick='clickColor(1,"#99CCFF",-140,126)' xonmouseover='mouseOverColor("#99CCFF")' alt='#99CCFF' /><area style='cursor:pointer' shape='poly' coords='153,60,162,64,162,75,153,79,144,75,144,64' onclick='clickColor(1,"#9999FF",-140,144)' xonmouseover='mouseOverColor("#9999FF")' alt='#9999FF' /><area style='cursor:pointer' shape='poly' coords='171,60,180,64,180,75,171,79,162,75,162,64' onclick='clickColor(1,"#9966FF",-140,162)' xonmouseover='mouseOverColor("#9966FF")' alt='#9966FF' /><area style='cursor:pointer' shape='poly' coords='189,60,198,64,198,75,189,79,180,75,180,64' onclick='clickColor(1,"#9933FF",-140,180)' xonmouseover='mouseOverColor("#9933FF")' alt='#9933FF' /><area style='cursor:pointer' shape='poly' coords='207,60,216,64,216,75,207,79,198,75,198,64' onclick='clickColor(1,"#9900FF",-140,198)' xonmouseover='mouseOverColor("#9900FF")' alt='#9900FF' /><area style='cursor:pointer' shape='poly' coords='18,75,27,79,27,90,18,94,9,90,9,79' onclick='clickColor(1,"#006600",-125,9)' xonmouseover='mouseOverColor("#006600")' alt='#006600' /><area style='cursor:pointer' shape='poly' coords='36,75,45,79,45,90,36,94,27,90,27,79' onclick='clickColor(1,"#00CC00",-125,27)' xonmouseover='mouseOverColor("#00CC00")' alt='#00CC00' /><area style='cursor:pointer' shape='poly' coords='54,75,63,79,63,90,54,94,45,90,45,79' onclick='clickColor(1,"#00FF00",-125,45)' xonmouseover='mouseOverColor("#00FF00")' alt='#00FF00' /><area style='cursor:pointer' shape='poly' coords='72,75,81,79,81,90,72,94,63,90,63,79' onclick='clickColor(1,"#66FF99",-125,63)' xonmouseover='mouseOverColor("#66FF99")' alt='#66FF99' /><area style='cursor:pointer' shape='poly' coords='90,75,99,79,99,90,90,94,81,90,81,79' onclick='clickColor(1,"#99FFCC",-125,81)' xonmouseover='mouseOverColor("#99FFCC")' alt='#99FFCC' /><area style='cursor:pointer' shape='poly' coords='108,75,117,79,117,90,108,94,99,90,99,79' onclick='clickColor(1,"#CCFFFF",-125,99)' xonmouseover='mouseOverColor("#CCFFFF")' alt='#CCFFFF' /><area style='cursor:pointer' shape='poly' coords='126,75,135,79,135,90,126,94,117,90,117,79' onclick='clickColor(1,"#CCCCFF",-125,117)' xonmouseover='mouseOverColor("#CCCCFF")' alt='#CCCCFF' /><area style='cursor:pointer' shape='poly' coords='144,75,153,79,153,90,144,94,135,90,135,79' onclick='clickColor(1,"#CC99FF",-125,135)' xonmouseover='mouseOverColor("#CC99FF")' alt='#CC99FF' /><area style='cursor:pointer' shape='poly' coords='162,75,171,79,171,90,162,94,153,90,153,79' onclick='clickColor(1,"#CC66FF",-125,153)' xonmouseover='mouseOverColor("#CC66FF")' alt='#CC66FF' /><area style='cursor:pointer' shape='poly' coords='180,75,189,79,189,90,180,94,171,90,171,79' onclick='clickColor(1,"#CC33FF",-125,171)' xonmouseover='mouseOverColor("#CC33FF")' alt='#CC33FF' /><area style='cursor:pointer' shape='poly' coords='198,75,207,79,207,90,198,94,189,90,189,79' onclick='clickColor(1,"#CC00FF",-125,189)' xonmouseover='mouseOverColor("#CC00FF")' alt='#CC00FF' /><area style='cursor:pointer' shape='poly' coords='216,75,225,79,225,90,216,94,207,90,207,79' onclick='clickColor(1,"#9900CC",-125,207)' xonmouseover='mouseOverColor("#9900CC")' alt='#9900CC' /><area style='cursor:pointer' shape='poly' coords='9,90,18,94,18,105,9,109,0,105,0,94' onclick='clickColor(1,"#003300",-110,0)' xonmouseover='mouseOverColor("#003300")' alt='#003300' /><area style='cursor:pointer' shape='poly' coords='27,90,36,94,36,105,27,109,18,105,18,94' onclick='clickColor(1,"#009933",-110,18)' xonmouseover='mouseOverColor("#009933")' alt='#009933' /><area style='cursor:pointer' shape='poly' coords='45,90,54,94,54,105,45,109,36,105,36,94' onclick='clickColor(1,"#33CC33",-110,36)' xonmouseover='mouseOverColor("#33CC33")' alt='#33CC33' /><area style='cursor:pointer' shape='poly' coords='63,90,72,94,72,105,63,109,54,105,54,94' onclick='clickColor(1,"#66FF66",-110,54)' xonmouseover='mouseOverColor("#66FF66")' alt='#66FF66' /><area style='cursor:pointer' shape='poly' coords='81,90,90,94,90,105,81,109,72,105,72,94' onclick='clickColor(1,"#99FF99",-110,72)' xonmouseover='mouseOverColor("#99FF99")' alt='#99FF99' /><area style='cursor:pointer' shape='poly' coords='99,90,108,94,108,105,99,109,90,105,90,94' onclick='clickColor(1,"#CCFFCC",-110,90)' xonmouseover='mouseOverColor("#CCFFCC")' alt='#CCFFCC' /><area style='cursor:pointer' shape='poly' coords='117,90,126,94,126,105,117,109,108,105,108,94' onclick='clickColor(1,"#FFFFFF",-110,108)' xonmouseover='mouseOverColor("#FFFFFF")' alt='#FFFFFF' /><area style='cursor:pointer' shape='poly' coords='135,90,144,94,144,105,135,109,126,105,126,94' onclick='clickColor(1,"#FFCCFF",-110,126)' xonmouseover='mouseOverColor("#FFCCFF")' alt='#FFCCFF' /><area style='cursor:pointer' shape='poly' coords='153,90,162,94,162,105,153,109,144,105,144,94' onclick='clickColor(1,"#FF99FF",-110,144)' xonmouseover='mouseOverColor("#FF99FF")' alt='#FF99FF' /><area style='cursor:pointer' shape='poly' coords='171,90,180,94,180,105,171,109,162,105,162,94' onclick='clickColor(1,"#FF66FF",-110,162)' xonmouseover='mouseOverColor("#FF66FF")' alt='#FF66FF' /><area style='cursor:pointer' shape='poly' coords='189,90,198,94,198,105,189,109,180,105,180,94' onclick='clickColor(1,"#FF00FF",-110,180)' xonmouseover='mouseOverColor("#FF00FF")' alt='#FF00FF' /><area style='cursor:pointer' shape='poly' coords='207,90,216,94,216,105,207,109,198,105,198,94' onclick='clickColor(1,"#CC00CC",-110,198)' xonmouseover='mouseOverColor("#CC00CC")' alt='#CC00CC' /><area style='cursor:pointer' shape='poly' coords='225,90,234,94,234,105,225,109,216,105,216,94' onclick='clickColor(1,"#660066",-110,216)' xonmouseover='mouseOverColor("#660066")' alt='#660066' /><area style='cursor:pointer' shape='poly' coords='18,105,27,109,27,120,18,124,9,120,9,109' onclick='clickColor(1,"#336600",-95,9)' xonmouseover='mouseOverColor("#336600")' alt='#336600' /><area style='cursor:pointer' shape='poly' coords='36,105,45,109,45,120,36,124,27,120,27,109' onclick='clickColor(1,"#009900",-95,27)' xonmouseover='mouseOverColor("#009900")' alt='#009900' /><area style='cursor:pointer' shape='poly' coords='54,105,63,109,63,120,54,124,45,120,45,109' onclick='clickColor(1,"#66FF33",-95,45)' xonmouseover='mouseOverColor("#66FF33")' alt='#66FF33' /><area style='cursor:pointer' shape='poly' coords='72,105,81,109,81,120,72,124,63,120,63,109' onclick='clickColor(1,"#99FF66",-95,63)' xonmouseover='mouseOverColor("#99FF66")' alt='#99FF66' /><area style='cursor:pointer' shape='poly' coords='90,105,99,109,99,120,90,124,81,120,81,109' onclick='clickColor(1,"#CCFF99",-95,81)' xonmouseover='mouseOverColor("#CCFF99")' alt='#CCFF99' /><area style='cursor:pointer' shape='poly' coords='108,105,117,109,117,120,108,124,99,120,99,109' onclick='clickColor(1,"#FFFFCC",-95,99)' xonmouseover='mouseOverColor("#FFFFCC")' alt='#FFFFCC' /><area style='cursor:pointer' shape='poly' coords='126,105,135,109,135,120,126,124,117,120,117,109' onclick='clickColor(1,"#FFCCCC",-95,117)' xonmouseover='mouseOverColor("#FFCCCC")' alt='#FFCCCC' /><area style='cursor:pointer' shape='poly' coords='144,105,153,109,153,120,144,124,135,120,135,109' onclick='clickColor(1,"#FF99CC",-95,135)' xonmouseover='mouseOverColor("#FF99CC")' alt='#FF99CC' /><area style='cursor:pointer' shape='poly' coords='162,105,171,109,171,120,162,124,153,120,153,109' onclick='clickColor(1,"#FF66CC",-95,153)' xonmouseover='mouseOverColor("#FF66CC")' alt='#FF66CC' /><area style='cursor:pointer' shape='poly' coords='180,105,189,109,189,120,180,124,171,120,171,109' onclick='clickColor(1,"#FF33CC",-95,171)' xonmouseover='mouseOverColor("#FF33CC")' alt='#FF33CC' /><area style='cursor:pointer' shape='poly' coords='198,105,207,109,207,120,198,124,189,120,189,109' onclick='clickColor(1,"#CC0099",-95,189)' xonmouseover='mouseOverColor("#CC0099")' alt='#CC0099' /><area style='cursor:pointer' shape='poly' coords='216,105,225,109,225,120,216,124,207,120,207,109' onclick='clickColor(1,"#993399",-95,207)' xonmouseover='mouseOverColor("#993399")' alt='#993399' /><area style='cursor:pointer' shape='poly' coords='27,120,36,124,36,135,27,139,18,135,18,124' onclick='clickColor(1,"#333300",-80,18)' xonmouseover='mouseOverColor("#333300")' alt='#333300' /><area style='cursor:pointer' shape='poly' coords='45,120,54,124,54,135,45,139,36,135,36,124' onclick='clickColor(1,"#669900",-80,36)' xonmouseover='mouseOverColor("#669900")' alt='#669900' /><area style='cursor:pointer' shape='poly' coords='63,120,72,124,72,135,63,139,54,135,54,124' onclick='clickColor(1,"#99FF33",-80,54)' xonmouseover='mouseOverColor("#99FF33")' alt='#99FF33' /><area style='cursor:pointer' shape='poly' coords='81,120,90,124,90,135,81,139,72,135,72,124' onclick='clickColor(1,"#CCFF66",-80,72)' xonmouseover='mouseOverColor("#CCFF66")' alt='#CCFF66' /><area style='cursor:pointer' shape='poly' coords='99,120,108,124,108,135,99,139,90,135,90,124' onclick='clickColor(1,"#FFFF99",-80,90)' xonmouseover='mouseOverColor("#FFFF99")' alt='#FFFF99' /><area style='cursor:pointer' shape='poly' coords='117,120,126,124,126,135,117,139,108,135,108,124' onclick='clickColor(1,"#FFCC99",-80,108)' xonmouseover='mouseOverColor("#FFCC99")' alt='#FFCC99' /><area style='cursor:pointer' shape='poly' coords='135,120,144,124,144,135,135,139,126,135,126,124' onclick='clickColor(1,"#FF9999",-80,126)' xonmouseover='mouseOverColor("#FF9999")' alt='#FF9999' /><area style='cursor:pointer' shape='poly' coords='153,120,162,124,162,135,153,139,144,135,144,124' onclick='clickColor(1,"#FF6699",-80,144)' xonmouseover='mouseOverColor("#FF6699")' alt='#FF6699' /><area style='cursor:pointer' shape='poly' coords='171,120,180,124,180,135,171,139,162,135,162,124' onclick='clickColor(1,"#FF3399",-80,162)' xonmouseover='mouseOverColor("#FF3399")' alt='#FF3399' /><area style='cursor:pointer' shape='poly' coords='189,120,198,124,198,135,189,139,180,135,180,124' onclick='clickColor(1,"#CC3399",-80,180)' xonmouseover='mouseOverColor("#CC3399")' alt='#CC3399' /><area style='cursor:pointer' shape='poly' coords='207,120,216,124,216,135,207,139,198,135,198,124' onclick='clickColor(1,"#990099",-80,198)' xonmouseover='mouseOverColor("#990099")' alt='#990099' /><area style='cursor:pointer' shape='poly' coords='36,135,45,139,45,150,36,154,27,150,27,139' onclick='clickColor(1,"#666633",-65,27)' xonmouseover='mouseOverColor("#666633")' alt='#666633' /><area style='cursor:pointer' shape='poly' coords='54,135,63,139,63,150,54,154,45,150,45,139' onclick='clickColor(1,"#99CC00",-65,45)' xonmouseover='mouseOverColor("#99CC00")' alt='#99CC00' /><area style='cursor:pointer' shape='poly' coords='72,135,81,139,81,150,72,154,63,150,63,139' onclick='clickColor(1,"#CCFF33",-65,63)' xonmouseover='mouseOverColor("#CCFF33")' alt='#CCFF33' /><area style='cursor:pointer' shape='poly' coords='90,135,99,139,99,150,90,154,81,150,81,139' onclick='clickColor(1,"#FFFF66",-65,81)' xonmouseover='mouseOverColor("#FFFF66")' alt='#FFFF66' /><area style='cursor:pointer' shape='poly' coords='108,135,117,139,117,150,108,154,99,150,99,139' onclick='clickColor(1,"#FFCC66",-65,99)' xonmouseover='mouseOverColor("#FFCC66")' alt='#FFCC66' /><area style='cursor:pointer' shape='poly' coords='126,135,135,139,135,150,126,154,117,150,117,139' onclick='clickColor(1,"#FF9966",-65,117)' xonmouseover='mouseOverColor("#FF9966")' alt='#FF9966' /><area style='cursor:pointer' shape='poly' coords='144,135,153,139,153,150,144,154,135,150,135,139' onclick='clickColor(1,"#FF6666",-65,135)' xonmouseover='mouseOverColor("#FF6666")' alt='#FF6666' /><area style='cursor:pointer' shape='poly' coords='162,135,171,139,171,150,162,154,153,150,153,139' onclick='clickColor(1,"#FF0066",-65,153)' xonmouseover='mouseOverColor("#FF0066")' alt='#FF0066' /><area style='cursor:pointer' shape='poly' coords='180,135,189,139,189,150,180,154,171,150,171,139' onclick='clickColor(1,"#CC6699",-65,171)' xonmouseover='mouseOverColor("#CC6699")' alt='#CC6699' /><area style='cursor:pointer' shape='poly' coords='198,135,207,139,207,150,198,154,189,150,189,139' onclick='clickColor(1,"#993366",-65,189)' xonmouseover='mouseOverColor("#993366")' alt='#993366' /><area style='cursor:pointer' shape='poly' coords='45,150,54,154,54,165,45,169,36,165,36,154' onclick='clickColor(1,"#999966",-50,36)' xonmouseover='mouseOverColor("#999966")' alt='#999966' /><area style='cursor:pointer' shape='poly' coords='63,150,72,154,72,165,63,169,54,165,54,154' onclick='clickColor(1,"#CCCC00",-50,54)' xonmouseover='mouseOverColor("#CCCC00")' alt='#CCCC00' /><area style='cursor:pointer' shape='poly' coords='81,150,90,154,90,165,81,169,72,165,72,154' onclick='clickColor(1,"#FFFF00",-50,72)' xonmouseover='mouseOverColor("#FFFF00")' alt='#FFFF00' /><area style='cursor:pointer' shape='poly' coords='99,150,108,154,108,165,99,169,90,165,90,154' onclick='clickColor(1,"#FFCC00",-50,90)' xonmouseover='mouseOverColor("#FFCC00")' alt='#FFCC00' /><area style='cursor:pointer' shape='poly' coords='117,150,126,154,126,165,117,169,108,165,108,154' onclick='clickColor(1,"#FF9933",-50,108)' xonmouseover='mouseOverColor("#FF9933")' alt='#FF9933' /><area style='cursor:pointer' shape='poly' coords='135,150,144,154,144,165,135,169,126,165,126,154' onclick='clickColor(1,"#FF6600",-50,126)' xonmouseover='mouseOverColor("#FF6600")' alt='#FF6600' /><area style='cursor:pointer' shape='poly' coords='153,150,162,154,162,165,153,169,144,165,144,154' onclick='clickColor(1,"#FF5050",-50,144)' xonmouseover='mouseOverColor("#FF5050")' alt='#FF5050' /><area style='cursor:pointer' shape='poly' coords='171,150,180,154,180,165,171,169,162,165,162,154' onclick='clickColor(1,"#CC0066",-50,162)' xonmouseover='mouseOverColor("#CC0066")' alt='#CC0066' /><area style='cursor:pointer' shape='poly' coords='189,150,198,154,198,165,189,169,180,165,180,154' onclick='clickColor(1,"#660033",-50,180)' xonmouseover='mouseOverColor("#660033")' alt='#660033' /><area style='cursor:pointer' shape='poly' coords='54,165,63,169,63,180,54,184,45,180,45,169' onclick='clickColor(1,"#996633",-35,45)' xonmouseover='mouseOverColor("#996633")' alt='#996633' /><area style='cursor:pointer' shape='poly' coords='72,165,81,169,81,180,72,184,63,180,63,169' onclick='clickColor(1,"#CC9900",-35,63)' xonmouseover='mouseOverColor("#CC9900")' alt='#CC9900' /><area style='cursor:pointer' shape='poly' coords='90,165,99,169,99,180,90,184,81,180,81,169' onclick='clickColor(1,"#FF9900",-35,81)' xonmouseover='mouseOverColor("#FF9900")' alt='#FF9900' /><area style='cursor:pointer' shape='poly' coords='108,165,117,169,117,180,108,184,99,180,99,169' onclick='clickColor(1,"#CC6600",-35,99)' xonmouseover='mouseOverColor("#CC6600")' alt='#CC6600' /><area style='cursor:pointer' shape='poly' coords='126,165,135,169,135,180,126,184,117,180,117,169' onclick='clickColor(1,"#FF3300",-35,117)' xonmouseover='mouseOverColor("#FF3300")' alt='#FF3300' /><area style='cursor:pointer' shape='poly' coords='144,165,153,169,153,180,144,184,135,180,135,169' onclick='clickColor(1,"#FF0000",-35,135)' xonmouseover='mouseOverColor("#FF0000")' alt='#FF0000' /><area style='cursor:pointer' shape='poly' coords='162,165,171,169,171,180,162,184,153,180,153,169' onclick='clickColor(1,"#CC0000",-35,153)' xonmouseover='mouseOverColor("#CC0000")' alt='#CC0000' /><area style='cursor:pointer' shape='poly' coords='180,165,189,169,189,180,180,184,171,180,171,169' onclick='clickColor(1,"#990033",-35,171)' xonmouseover='mouseOverColor("#990033")' alt='#990033' /><area style='cursor:pointer' shape='poly' coords='63,180,72,184,72,195,63,199,54,195,54,184' onclick='clickColor(1,"#663300",-20,54)' xonmouseover='mouseOverColor("#663300")' alt='#663300' /><area style='cursor:pointer' shape='poly' coords='81,180,90,184,90,195,81,199,72,195,72,184' onclick='clickColor(1,"#996600",-20,72)' xonmouseover='mouseOverColor("#996600")' alt='#996600' /><area style='cursor:pointer' shape='poly' coords='99,180,108,184,108,195,99,199,90,195,90,184' onclick='clickColor(1,"#CC3300",-20,90)' xonmouseover='mouseOverColor("#CC3300")' alt='#CC3300' /><area style='cursor:pointer' shape='poly' coords='117,180,126,184,126,195,117,199,108,195,108,184' onclick='clickColor(1,"#993300",-20,108)' xonmouseover='mouseOverColor("#993300")' alt='#993300' /><area style='cursor:pointer' shape='poly' coords='135,180,144,184,144,195,135,199,126,195,126,184' onclick='clickColor(1,"#990000",-20,126)' xonmouseover='mouseOverColor("#990000")' alt='#990000' /><area style='cursor:pointer' shape='poly' coords='153,180,162,184,162,195,153,199,144,195,144,184' onclick='clickColor(1,"#800000",-20,144)' xonmouseover='mouseOverColor("#800000")' alt='#800000' /><area style='cursor:pointer' shape='poly' coords='171,180,180,184,180,195,171,199,162,195,162,184' onclick='clickColor(1,"#993333",-20,162)' xonmouseover='mouseOverColor("#993333")' alt='#993333' /></map>
                    <script>
                        var thistop = "-35";
                        var thisleft = "135";
                    </script>

                    <div id='selectedhexagon1' style='visibility:hidden;position:relative;width:21px;height:21px;background-image:url("../images/img_selectedcolor.gif")'></div>
                </div>
                <div style="font-family:Consolas, 'courier new';padding-bottom:16px;">
                    <input id="color1" type="text" class="w3-input w3-border" onchange="setGradient()" onkeydown="submitOnEnter(event)">
                    <div style="height:10px"></div>
                    <input id="color2" type="text" class="w3-input w3-border" onchange="setGradient()" onkeydown="submitOnEnter(event)">
                </div>
                <div class="w3-hide-small">
                    <img style='margin-right:2px;' src='img_colormap.gif' usemap='#colormap2' alt='colormap' /><map id='colormap2' name='colormap2' xonmouseout='mouseOutMap()'><area style='cursor:pointer' shape='poly' coords='63,0,72,4,72,15,63,19,54,15,54,4' onclick='clickColor(2,"#003366",-200,54)' xonmouseover='mouseOverColor("#003366")' alt='#003366' /><area style='cursor:pointer' shape='poly' coords='81,0,90,4,90,15,81,19,72,15,72,4' onclick='clickColor(2,"#336699",-200,72)' xonmouseover='mouseOverColor("#336699")' alt='#336699' /><area style='cursor:pointer' shape='poly' coords='99,0,108,4,108,15,99,19,90,15,90,4' onclick='clickColor(2,"#3366CC",-200,90)' xonmouseover='mouseOverColor("#3366CC")' alt='#3366CC' /><area style='cursor:pointer' shape='poly' coords='117,0,126,4,126,15,117,19,108,15,108,4' onclick='clickColor(2,"#003399",-200,108)' xonmouseover='mouseOverColor("#003399")' alt='#003399' /><area style='cursor:pointer' shape='poly' coords='135,0,144,4,144,15,135,19,126,15,126,4' onclick='clickColor(2,"#000099",-200,126)' xonmouseover='mouseOverColor("#000099")' alt='#000099' /><area style='cursor:pointer' shape='poly' coords='153,0,162,4,162,15,153,19,144,15,144,4' onclick='clickColor(2,"#0000CC",-200,144)' xonmouseover='mouseOverColor("#0000CC")' alt='#0000CC' /><area style='cursor:pointer' shape='poly' coords='171,0,180,4,180,15,171,19,162,15,162,4' onclick='clickColor(2,"#000066",-200,162)' xonmouseover='mouseOverColor("#000066")' alt='#000066' /><area style='cursor:pointer' shape='poly' coords='54,15,63,19,63,30,54,34,45,30,45,19' onclick='clickColor(2,"#006666",-185,45)' xonmouseover='mouseOverColor("#006666")' alt='#006666' /><area style='cursor:pointer' shape='poly' coords='72,15,81,19,81,30,72,34,63,30,63,19' onclick='clickColor(2,"#006699",-185,63)' xonmouseover='mouseOverColor("#006699")' alt='#006699' /><area style='cursor:pointer' shape='poly' coords='90,15,99,19,99,30,90,34,81,30,81,19' onclick='clickColor(2,"#0099CC",-185,81)' xonmouseover='mouseOverColor("#0099CC")' alt='#0099CC' /><area style='cursor:pointer' shape='poly' coords='108,15,117,19,117,30,108,34,99,30,99,19' onclick='clickColor(2,"#0066CC",-185,99)' xonmouseover='mouseOverColor("#0066CC")' alt='#0066CC' /><area style='cursor:pointer' shape='poly' coords='126,15,135,19,135,30,126,34,117,30,117,19' onclick='clickColor(2,"#0033CC",-185,117)' xonmouseover='mouseOverColor("#0033CC")' alt='#0033CC' /><area style='cursor:pointer' shape='poly' coords='144,15,153,19,153,30,144,34,135,30,135,19' onclick='clickColor(2,"#0000FF",-185,135)' xonmouseover='mouseOverColor("#0000FF")' alt='#0000FF' /><area style='cursor:pointer' shape='poly' coords='162,15,171,19,171,30,162,34,153,30,153,19' onclick='clickColor(2,"#3333FF",-185,153)' xonmouseover='mouseOverColor("#3333FF")' alt='#3333FF' /><area style='cursor:pointer' shape='poly' coords='180,15,189,19,189,30,180,34,171,30,171,19' onclick='clickColor(2,"#333399",-185,171)' xonmouseover='mouseOverColor("#333399")' alt='#333399' /><area style='cursor:pointer' shape='poly' coords='45,30,54,34,54,45,45,49,36,45,36,34' onclick='clickColor(2,"#669999",-170,36)' xonmouseover='mouseOverColor("#669999")' alt='#669999' /><area style='cursor:pointer' shape='poly' coords='63,30,72,34,72,45,63,49,54,45,54,34' onclick='clickColor(2,"#009999",-170,54)' xonmouseover='mouseOverColor("#009999")' alt='#009999' /><area style='cursor:pointer' shape='poly' coords='81,30,90,34,90,45,81,49,72,45,72,34' onclick='clickColor(2,"#33CCCC",-170,72)' xonmouseover='mouseOverColor("#33CCCC")' alt='#33CCCC' /><area style='cursor:pointer' shape='poly' coords='99,30,108,34,108,45,99,49,90,45,90,34' onclick='clickColor(2,"#00CCFF",-170,90)' xonmouseover='mouseOverColor("#00CCFF")' alt='#00CCFF' /><area style='cursor:pointer' shape='poly' coords='117,30,126,34,126,45,117,49,108,45,108,34' onclick='clickColor(2,"#0099FF",-170,108)' xonmouseover='mouseOverColor("#0099FF")' alt='#0099FF' /><area style='cursor:pointer' shape='poly' coords='135,30,144,34,144,45,135,49,126,45,126,34' onclick='clickColor(2,"#0066FF",-170,126)' xonmouseover='mouseOverColor("#0066FF")' alt='#0066FF' /><area style='cursor:pointer' shape='poly' coords='153,30,162,34,162,45,153,49,144,45,144,34' onclick='clickColor(2,"#3366FF",-170,144)' xonmouseover='mouseOverColor("#3366FF")' alt='#3366FF' /><area style='cursor:pointer' shape='poly' coords='171,30,180,34,180,45,171,49,162,45,162,34' onclick='clickColor(2,"#3333CC",-170,162)' xonmouseover='mouseOverColor("#3333CC")' alt='#3333CC' /><area style='cursor:pointer' shape='poly' coords='189,30,198,34,198,45,189,49,180,45,180,34' onclick='clickColor(2,"#666699",-170,180)' xonmouseover='mouseOverColor("#666699")' alt='#666699' /><area style='cursor:pointer' shape='poly' coords='36,45,45,49,45,60,36,64,27,60,27,49' onclick='clickColor(2,"#339966",-155,27)' xonmouseover='mouseOverColor("#339966")' alt='#339966' /><area style='cursor:pointer' shape='poly' coords='54,45,63,49,63,60,54,64,45,60,45,49' onclick='clickColor(2,"#00CC99",-155,45)' xonmouseover='mouseOverColor("#00CC99")' alt='#00CC99' /><area style='cursor:pointer' shape='poly' coords='72,45,81,49,81,60,72,64,63,60,63,49' onclick='clickColor(2,"#00FFCC",-155,63)' xonmouseover='mouseOverColor("#00FFCC")' alt='#00FFCC' /><area style='cursor:pointer' shape='poly' coords='90,45,99,49,99,60,90,64,81,60,81,49' onclick='clickColor(2,"#00FFFF",-155,81)' xonmouseover='mouseOverColor("#00FFFF")' alt='#00FFFF' /><area style='cursor:pointer' shape='poly' coords='108,45,117,49,117,60,108,64,99,60,99,49' onclick='clickColor(2,"#33CCFF",-155,99)' xonmouseover='mouseOverColor("#33CCFF")' alt='#33CCFF' /><area style='cursor:pointer' shape='poly' coords='126,45,135,49,135,60,126,64,117,60,117,49' onclick='clickColor(2,"#3399FF",-155,117)' xonmouseover='mouseOverColor("#3399FF")' alt='#3399FF' /><area style='cursor:pointer' shape='poly' coords='144,45,153,49,153,60,144,64,135,60,135,49' onclick='clickColor(2,"#6699FF",-155,135)' xonmouseover='mouseOverColor("#6699FF")' alt='#6699FF' /><area style='cursor:pointer' shape='poly' coords='162,45,171,49,171,60,162,64,153,60,153,49' onclick='clickColor(2,"#6666FF",-155,153)' xonmouseover='mouseOverColor("#6666FF")' alt='#6666FF' /><area style='cursor:pointer' shape='poly' coords='180,45,189,49,189,60,180,64,171,60,171,49' onclick='clickColor(2,"#6600FF",-155,171)' xonmouseover='mouseOverColor("#6600FF")' alt='#6600FF' /><area style='cursor:pointer' shape='poly' coords='198,45,207,49,207,60,198,64,189,60,189,49' onclick='clickColor(2,"#6600CC",-155,189)' xonmouseover='mouseOverColor("#6600CC")' alt='#6600CC' /><area style='cursor:pointer' shape='poly' coords='27,60,36,64,36,75,27,79,18,75,18,64' onclick='clickColor(2,"#339933",-140,18)' xonmouseover='mouseOverColor("#339933")' alt='#339933' /><area style='cursor:pointer' shape='poly' coords='45,60,54,64,54,75,45,79,36,75,36,64' onclick='clickColor(2,"#00CC66",-140,36)' xonmouseover='mouseOverColor("#00CC66")' alt='#00CC66' /><area style='cursor:pointer' shape='poly' coords='63,60,72,64,72,75,63,79,54,75,54,64' onclick='clickColor(2,"#00FF99",-140,54)' xonmouseover='mouseOverColor("#00FF99")' alt='#00FF99' /><area style='cursor:pointer' shape='poly' coords='81,60,90,64,90,75,81,79,72,75,72,64' onclick='clickColor(2,"#66FFCC",-140,72)' xonmouseover='mouseOverColor("#66FFCC")' alt='#66FFCC' /><area style='cursor:pointer' shape='poly' coords='99,60,108,64,108,75,99,79,90,75,90,64' onclick='clickColor(2,"#66FFFF",-140,90)' xonmouseover='mouseOverColor("#66FFFF")' alt='#66FFFF' /><area style='cursor:pointer' shape='poly' coords='117,60,126,64,126,75,117,79,108,75,108,64' onclick='clickColor(2,"#66CCFF",-140,108)' xonmouseover='mouseOverColor("#66CCFF")' alt='#66CCFF' /><area style='cursor:pointer' shape='poly' coords='135,60,144,64,144,75,135,79,126,75,126,64' onclick='clickColor(2,"#99CCFF",-140,126)' xonmouseover='mouseOverColor("#99CCFF")' alt='#99CCFF' /><area style='cursor:pointer' shape='poly' coords='153,60,162,64,162,75,153,79,144,75,144,64' onclick='clickColor(2,"#9999FF",-140,144)' xonmouseover='mouseOverColor("#9999FF")' alt='#9999FF' /><area style='cursor:pointer' shape='poly' coords='171,60,180,64,180,75,171,79,162,75,162,64' onclick='clickColor(2,"#9966FF",-140,162)' xonmouseover='mouseOverColor("#9966FF")' alt='#9966FF' /><area style='cursor:pointer' shape='poly' coords='189,60,198,64,198,75,189,79,180,75,180,64' onclick='clickColor(2,"#9933FF",-140,180)' xonmouseover='mouseOverColor("#9933FF")' alt='#9933FF' /><area style='cursor:pointer' shape='poly' coords='207,60,216,64,216,75,207,79,198,75,198,64' onclick='clickColor(2,"#9900FF",-140,198)' xonmouseover='mouseOverColor("#9900FF")' alt='#9900FF' /><area style='cursor:pointer' shape='poly' coords='18,75,27,79,27,90,18,94,9,90,9,79' onclick='clickColor(2,"#006600",-125,9)' xonmouseover='mouseOverColor("#006600")' alt='#006600' /><area style='cursor:pointer' shape='poly' coords='36,75,45,79,45,90,36,94,27,90,27,79' onclick='clickColor(2,"#00CC00",-125,27)' xonmouseover='mouseOverColor("#00CC00")' alt='#00CC00' /><area style='cursor:pointer' shape='poly' coords='54,75,63,79,63,90,54,94,45,90,45,79' onclick='clickColor(2,"#00FF00",-125,45)' xonmouseover='mouseOverColor("#00FF00")' alt='#00FF00' /><area style='cursor:pointer' shape='poly' coords='72,75,81,79,81,90,72,94,63,90,63,79' onclick='clickColor(2,"#66FF99",-125,63)' xonmouseover='mouseOverColor("#66FF99")' alt='#66FF99' /><area style='cursor:pointer' shape='poly' coords='90,75,99,79,99,90,90,94,81,90,81,79' onclick='clickColor(2,"#99FFCC",-125,81)' xonmouseover='mouseOverColor("#99FFCC")' alt='#99FFCC' /><area style='cursor:pointer' shape='poly' coords='108,75,117,79,117,90,108,94,99,90,99,79' onclick='clickColor(2,"#CCFFFF",-125,99)' xonmouseover='mouseOverColor("#CCFFFF")' alt='#CCFFFF' /><area style='cursor:pointer' shape='poly' coords='126,75,135,79,135,90,126,94,117,90,117,79' onclick='clickColor(2,"#CCCCFF",-125,117)' xonmouseover='mouseOverColor("#CCCCFF")' alt='#CCCCFF' /><area style='cursor:pointer' shape='poly' coords='144,75,153,79,153,90,144,94,135,90,135,79' onclick='clickColor(2,"#CC99FF",-125,135)' xonmouseover='mouseOverColor("#CC99FF")' alt='#CC99FF' /><area style='cursor:pointer' shape='poly' coords='162,75,171,79,171,90,162,94,153,90,153,79' onclick='clickColor(2,"#CC66FF",-125,153)' xonmouseover='mouseOverColor("#CC66FF")' alt='#CC66FF' /><area style='cursor:pointer' shape='poly' coords='180,75,189,79,189,90,180,94,171,90,171,79' onclick='clickColor(2,"#CC33FF",-125,171)' xonmouseover='mouseOverColor("#CC33FF")' alt='#CC33FF' /><area style='cursor:pointer' shape='poly' coords='198,75,207,79,207,90,198,94,189,90,189,79' onclick='clickColor(2,"#CC00FF",-125,189)' xonmouseover='mouseOverColor("#CC00FF")' alt='#CC00FF' /><area style='cursor:pointer' shape='poly' coords='216,75,225,79,225,90,216,94,207,90,207,79' onclick='clickColor(2,"#9900CC",-125,207)' xonmouseover='mouseOverColor("#9900CC")' alt='#9900CC' /><area style='cursor:pointer' shape='poly' coords='9,90,18,94,18,105,9,109,0,105,0,94' onclick='clickColor(2,"#003300",-110,0)' xonmouseover='mouseOverColor("#003300")' alt='#003300' /><area style='cursor:pointer' shape='poly' coords='27,90,36,94,36,105,27,109,18,105,18,94' onclick='clickColor(2,"#009933",-110,18)' xonmouseover='mouseOverColor("#009933")' alt='#009933' /><area style='cursor:pointer' shape='poly' coords='45,90,54,94,54,105,45,109,36,105,36,94' onclick='clickColor(2,"#33CC33",-110,36)' xonmouseover='mouseOverColor("#33CC33")' alt='#33CC33' /><area style='cursor:pointer' shape='poly' coords='63,90,72,94,72,105,63,109,54,105,54,94' onclick='clickColor(2,"#66FF66",-110,54)' xonmouseover='mouseOverColor("#66FF66")' alt='#66FF66' /><area style='cursor:pointer' shape='poly' coords='81,90,90,94,90,105,81,109,72,105,72,94' onclick='clickColor(2,"#99FF99",-110,72)' xonmouseover='mouseOverColor("#99FF99")' alt='#99FF99' /><area style='cursor:pointer' shape='poly' coords='99,90,108,94,108,105,99,109,90,105,90,94' onclick='clickColor(2,"#CCFFCC",-110,90)' xonmouseover='mouseOverColor("#CCFFCC")' alt='#CCFFCC' /><area style='cursor:pointer' shape='poly' coords='117,90,126,94,126,105,117,109,108,105,108,94' onclick='clickColor(2,"#FFFFFF",-110,108)' xonmouseover='mouseOverColor("#FFFFFF")' alt='#FFFFFF' /><area style='cursor:pointer' shape='poly' coords='135,90,144,94,144,105,135,109,126,105,126,94' onclick='clickColor(2,"#FFCCFF",-110,126)' xonmouseover='mouseOverColor("#FFCCFF")' alt='#FFCCFF' /><area style='cursor:pointer' shape='poly' coords='153,90,162,94,162,105,153,109,144,105,144,94' onclick='clickColor(2,"#FF99FF",-110,144)' xonmouseover='mouseOverColor("#FF99FF")' alt='#FF99FF' /><area style='cursor:pointer' shape='poly' coords='171,90,180,94,180,105,171,109,162,105,162,94' onclick='clickColor(2,"#FF66FF",-110,162)' xonmouseover='mouseOverColor("#FF66FF")' alt='#FF66FF' /><area style='cursor:pointer' shape='poly' coords='189,90,198,94,198,105,189,109,180,105,180,94' onclick='clickColor(2,"#FF00FF",-110,180)' xonmouseover='mouseOverColor("#FF00FF")' alt='#FF00FF' /><area style='cursor:pointer' shape='poly' coords='207,90,216,94,216,105,207,109,198,105,198,94' onclick='clickColor(2,"#CC00CC",-110,198)' xonmouseover='mouseOverColor("#CC00CC")' alt='#CC00CC' /><area style='cursor:pointer' shape='poly' coords='225,90,234,94,234,105,225,109,216,105,216,94' onclick='clickColor(2,"#660066",-110,216)' xonmouseover='mouseOverColor("#660066")' alt='#660066' /><area style='cursor:pointer' shape='poly' coords='18,105,27,109,27,120,18,124,9,120,9,109' onclick='clickColor(2,"#336600",-95,9)' xonmouseover='mouseOverColor("#336600")' alt='#336600' /><area style='cursor:pointer' shape='poly' coords='36,105,45,109,45,120,36,124,27,120,27,109' onclick='clickColor(2,"#009900",-95,27)' xonmouseover='mouseOverColor("#009900")' alt='#009900' /><area style='cursor:pointer' shape='poly' coords='54,105,63,109,63,120,54,124,45,120,45,109' onclick='clickColor(2,"#66FF33",-95,45)' xonmouseover='mouseOverColor("#66FF33")' alt='#66FF33' /><area style='cursor:pointer' shape='poly' coords='72,105,81,109,81,120,72,124,63,120,63,109' onclick='clickColor(2,"#99FF66",-95,63)' xonmouseover='mouseOverColor("#99FF66")' alt='#99FF66' /><area style='cursor:pointer' shape='poly' coords='90,105,99,109,99,120,90,124,81,120,81,109' onclick='clickColor(2,"#CCFF99",-95,81)' xonmouseover='mouseOverColor("#CCFF99")' alt='#CCFF99' /><area style='cursor:pointer' shape='poly' coords='108,105,117,109,117,120,108,124,99,120,99,109' onclick='clickColor(2,"#FFFFCC",-95,99)' xonmouseover='mouseOverColor("#FFFFCC")' alt='#FFFFCC' /><area style='cursor:pointer' shape='poly' coords='126,105,135,109,135,120,126,124,117,120,117,109' onclick='clickColor(2,"#FFCCCC",-95,117)' xonmouseover='mouseOverColor("#FFCCCC")' alt='#FFCCCC' /><area style='cursor:pointer' shape='poly' coords='144,105,153,109,153,120,144,124,135,120,135,109' onclick='clickColor(2,"#FF99CC",-95,135)' xonmouseover='mouseOverColor("#FF99CC")' alt='#FF99CC' /><area style='cursor:pointer' shape='poly' coords='162,105,171,109,171,120,162,124,153,120,153,109' onclick='clickColor(2,"#FF66CC",-95,153)' xonmouseover='mouseOverColor("#FF66CC")' alt='#FF66CC' /><area style='cursor:pointer' shape='poly' coords='180,105,189,109,189,120,180,124,171,120,171,109' onclick='clickColor(2,"#FF33CC",-95,171)' xonmouseover='mouseOverColor("#FF33CC")' alt='#FF33CC' /><area style='cursor:pointer' shape='poly' coords='198,105,207,109,207,120,198,124,189,120,189,109' onclick='clickColor(2,"#CC0099",-95,189)' xonmouseover='mouseOverColor("#CC0099")' alt='#CC0099' /><area style='cursor:pointer' shape='poly' coords='216,105,225,109,225,120,216,124,207,120,207,109' onclick='clickColor(2,"#993399",-95,207)' xonmouseover='mouseOverColor("#993399")' alt='#993399' /><area style='cursor:pointer' shape='poly' coords='27,120,36,124,36,135,27,139,18,135,18,124' onclick='clickColor(2,"#333300",-80,18)' xonmouseover='mouseOverColor("#333300")' alt='#333300' /><area style='cursor:pointer' shape='poly' coords='45,120,54,124,54,135,45,139,36,135,36,124' onclick='clickColor(2,"#669900",-80,36)' xonmouseover='mouseOverColor("#669900")' alt='#669900' /><area style='cursor:pointer' shape='poly' coords='63,120,72,124,72,135,63,139,54,135,54,124' onclick='clickColor(2,"#99FF33",-80,54)' xonmouseover='mouseOverColor("#99FF33")' alt='#99FF33' /><area style='cursor:pointer' shape='poly' coords='81,120,90,124,90,135,81,139,72,135,72,124' onclick='clickColor(2,"#CCFF66",-80,72)' xonmouseover='mouseOverColor("#CCFF66")' alt='#CCFF66' /><area style='cursor:pointer' shape='poly' coords='99,120,108,124,108,135,99,139,90,135,90,124' onclick='clickColor(2,"#FFFF99",-80,90)' xonmouseover='mouseOverColor("#FFFF99")' alt='#FFFF99' /><area style='cursor:pointer' shape='poly' coords='117,120,126,124,126,135,117,139,108,135,108,124' onclick='clickColor(2,"#FFCC99",-80,108)' xonmouseover='mouseOverColor("#FFCC99")' alt='#FFCC99' /><area style='cursor:pointer' shape='poly' coords='135,120,144,124,144,135,135,139,126,135,126,124' onclick='clickColor(2,"#FF9999",-80,126)' xonmouseover='mouseOverColor("#FF9999")' alt='#FF9999' /><area style='cursor:pointer' shape='poly' coords='153,120,162,124,162,135,153,139,144,135,144,124' onclick='clickColor(2,"#FF6699",-80,144)' xonmouseover='mouseOverColor("#FF6699")' alt='#FF6699' /><area style='cursor:pointer' shape='poly' coords='171,120,180,124,180,135,171,139,162,135,162,124' onclick='clickColor(2,"#FF3399",-80,162)' xonmouseover='mouseOverColor("#FF3399")' alt='#FF3399' /><area style='cursor:pointer' shape='poly' coords='189,120,198,124,198,135,189,139,180,135,180,124' onclick='clickColor(2,"#CC3399",-80,180)' xonmouseover='mouseOverColor("#CC3399")' alt='#CC3399' /><area style='cursor:pointer' shape='poly' coords='207,120,216,124,216,135,207,139,198,135,198,124' onclick='clickColor(2,"#990099",-80,198)' xonmouseover='mouseOverColor("#990099")' alt='#990099' /><area style='cursor:pointer' shape='poly' coords='36,135,45,139,45,150,36,154,27,150,27,139' onclick='clickColor(2,"#666633",-65,27)' xonmouseover='mouseOverColor("#666633")' alt='#666633' /><area style='cursor:pointer' shape='poly' coords='54,135,63,139,63,150,54,154,45,150,45,139' onclick='clickColor(2,"#99CC00",-65,45)' xonmouseover='mouseOverColor("#99CC00")' alt='#99CC00' /><area style='cursor:pointer' shape='poly' coords='72,135,81,139,81,150,72,154,63,150,63,139' onclick='clickColor(2,"#CCFF33",-65,63)' xonmouseover='mouseOverColor("#CCFF33")' alt='#CCFF33' /><area style='cursor:pointer' shape='poly' coords='90,135,99,139,99,150,90,154,81,150,81,139' onclick='clickColor(2,"#FFFF66",-65,81)' xonmouseover='mouseOverColor("#FFFF66")' alt='#FFFF66' /><area style='cursor:pointer' shape='poly' coords='108,135,117,139,117,150,108,154,99,150,99,139' onclick='clickColor(2,"#FFCC66",-65,99)' xonmouseover='mouseOverColor("#FFCC66")' alt='#FFCC66' /><area style='cursor:pointer' shape='poly' coords='126,135,135,139,135,150,126,154,117,150,117,139' onclick='clickColor(2,"#FF9966",-65,117)' xonmouseover='mouseOverColor("#FF9966")' alt='#FF9966' /><area style='cursor:pointer' shape='poly' coords='144,135,153,139,153,150,144,154,135,150,135,139' onclick='clickColor(2,"#FF6666",-65,135)' xonmouseover='mouseOverColor("#FF6666")' alt='#FF6666' /><area style='cursor:pointer' shape='poly' coords='162,135,171,139,171,150,162,154,153,150,153,139' onclick='clickColor(2,"#FF0066",-65,153)' xonmouseover='mouseOverColor("#FF0066")' alt='#FF0066' /><area style='cursor:pointer' shape='poly' coords='180,135,189,139,189,150,180,154,171,150,171,139' onclick='clickColor(2,"#CC6699",-65,171)' xonmouseover='mouseOverColor("#CC6699")' alt='#CC6699' /><area style='cursor:pointer' shape='poly' coords='198,135,207,139,207,150,198,154,189,150,189,139' onclick='clickColor(2,"#993366",-65,189)' xonmouseover='mouseOverColor("#993366")' alt='#993366' /><area style='cursor:pointer' shape='poly' coords='45,150,54,154,54,165,45,169,36,165,36,154' onclick='clickColor(2,"#999966",-50,36)' xonmouseover='mouseOverColor("#999966")' alt='#999966' /><area style='cursor:pointer' shape='poly' coords='63,150,72,154,72,165,63,169,54,165,54,154' onclick='clickColor(2,"#CCCC00",-50,54)' xonmouseover='mouseOverColor("#CCCC00")' alt='#CCCC00' /><area style='cursor:pointer' shape='poly' coords='81,150,90,154,90,165,81,169,72,165,72,154' onclick='clickColor(2,"#FFFF00",-50,72)' xonmouseover='mouseOverColor("#FFFF00")' alt='#FFFF00' /><area style='cursor:pointer' shape='poly' coords='99,150,108,154,108,165,99,169,90,165,90,154' onclick='clickColor(2,"#FFCC00",-50,90)' xonmouseover='mouseOverColor("#FFCC00")' alt='#FFCC00' /><area style='cursor:pointer' shape='poly' coords='117,150,126,154,126,165,117,169,108,165,108,154' onclick='clickColor(2,"#FF9933",-50,108)' xonmouseover='mouseOverColor("#FF9933")' alt='#FF9933' /><area style='cursor:pointer' shape='poly' coords='135,150,144,154,144,165,135,169,126,165,126,154' onclick='clickColor(2,"#FF6600",-50,126)' xonmouseover='mouseOverColor("#FF6600")' alt='#FF6600' /><area style='cursor:pointer' shape='poly' coords='153,150,162,154,162,165,153,169,144,165,144,154' onclick='clickColor(2,"#FF5050",-50,144)' xonmouseover='mouseOverColor("#FF5050")' alt='#FF5050' /><area style='cursor:pointer' shape='poly' coords='171,150,180,154,180,165,171,169,162,165,162,154' onclick='clickColor(2,"#CC0066",-50,162)' xonmouseover='mouseOverColor("#CC0066")' alt='#CC0066' /><area style='cursor:pointer' shape='poly' coords='189,150,198,154,198,165,189,169,180,165,180,154' onclick='clickColor(2,"#660033",-50,180)' xonmouseover='mouseOverColor("#660033")' alt='#660033' /><area style='cursor:pointer' shape='poly' coords='54,165,63,169,63,180,54,184,45,180,45,169' onclick='clickColor(2,"#996633",-35,45)' xonmouseover='mouseOverColor("#996633")' alt='#996633' /><area style='cursor:pointer' shape='poly' coords='72,165,81,169,81,180,72,184,63,180,63,169' onclick='clickColor(2,"#CC9900",-35,63)' xonmouseover='mouseOverColor("#CC9900")' alt='#CC9900' /><area style='cursor:pointer' shape='poly' coords='90,165,99,169,99,180,90,184,81,180,81,169' onclick='clickColor(2,"#FF9900",-35,81)' xonmouseover='mouseOverColor("#FF9900")' alt='#FF9900' /><area style='cursor:pointer' shape='poly' coords='108,165,117,169,117,180,108,184,99,180,99,169' onclick='clickColor(2,"#CC6600",-35,99)' xonmouseover='mouseOverColor("#CC6600")' alt='#CC6600' /><area style='cursor:pointer' shape='poly' coords='126,165,135,169,135,180,126,184,117,180,117,169' onclick='clickColor(2,"#FF3300",-35,117)' xonmouseover='mouseOverColor("#FF3300")' alt='#FF3300' /><area style='cursor:pointer' shape='poly' coords='144,165,153,169,153,180,144,184,135,180,135,169' onclick='clickColor(2,"#FF0000",-35,135)' xonmouseover='mouseOverColor("#FF0000")' alt='#FF0000' /><area style='cursor:pointer' shape='poly' coords='162,165,171,169,171,180,162,184,153,180,153,169' onclick='clickColor(2,"#CC0000",-35,153)' xonmouseover='mouseOverColor("#CC0000")' alt='#CC0000' /><area style='cursor:pointer' shape='poly' coords='180,165,189,169,189,180,180,184,171,180,171,169' onclick='clickColor(2,"#990033",-35,171)' xonmouseover='mouseOverColor("#990033")' alt='#990033' /><area style='cursor:pointer' shape='poly' coords='63,180,72,184,72,195,63,199,54,195,54,184' onclick='clickColor(2,"#663300",-20,54)' xonmouseover='mouseOverColor("#663300")' alt='#663300' /><area style='cursor:pointer' shape='poly' coords='81,180,90,184,90,195,81,199,72,195,72,184' onclick='clickColor(2,"#996600",-20,72)' xonmouseover='mouseOverColor("#996600")' alt='#996600' /><area style='cursor:pointer' shape='poly' coords='99,180,108,184,108,195,99,199,90,195,90,184' onclick='clickColor(2,"#CC3300",-20,90)' xonmouseover='mouseOverColor("#CC3300")' alt='#CC3300' /><area style='cursor:pointer' shape='poly' coords='117,180,126,184,126,195,117,199,108,195,108,184' onclick='clickColor(2,"#993300",-20,108)' xonmouseover='mouseOverColor("#993300")' alt='#993300' /><area style='cursor:pointer' shape='poly' coords='135,180,144,184,144,195,135,199,126,195,126,184' onclick='clickColor(2,"#990000",-20,126)' xonmouseover='mouseOverColor("#990000")' alt='#990000' /><area style='cursor:pointer' shape='poly' coords='153,180,162,184,162,195,153,199,144,195,144,184' onclick='clickColor(2,"#800000",-20,144)' xonmouseover='mouseOverColor("#800000")' alt='#800000' /><area style='cursor:pointer' shape='poly' coords='171,180,180,184,180,195,171,199,162,195,162,184' onclick='clickColor(2,"#993333",-20,162)' xonmouseover='mouseOverColor("#993333")' alt='#993333' /></map>
                    <script>
                        var thistop = "-35";
                        var thisleft = "135";
                    </script>

                    <div id='selectedhexagon2' style='visibility:hidden;position:relative;width:21px;height:21px;background-image:url("../images/img_selectedcolor.gif")'></div>
                </div>
            </div>
        </div>

        <hr style="border-color:#d3d3d3">

        <div class="w3-row">
            <div class="w3-col m1" style="font-family:Consolas, 'courier new';">
                <div id="touchbutton1" style="text-align:center;display:none;">
                    <button ontouchstart="touchslider(1, -1, event)" ontouchend="stoptouchslider()" onmousedown="touchslider(1, -1, event)" onmouseup="stoptouchslider()">&#10094;</button>
                    <button ontouchstart="touchslider(1, 1, event)" ontouchend="stoptouchslider()" onmousedown="touchslider(1, 1, event)" onmouseup="stoptouchslider()">&#10095;</button>
                </div>
                <input class="w3-input w3-border" type="number" style="padding:3px 5px;margin:auto;" id="pow1" oninput="setGradient()" onchange="setGradient()" value="0">
                <br class="w3-hide-medium w3-hide-large">
            </div>
            <div class="w3-col m10" style="position:relative;">
                <div id="shield"></div>
                <div id="redtable"></div>
            </div>
            <div class="w3-col m1" style="font-family:Consolas, 'courier new';">
                <br class="w3-hide-medium w3-hide-large">
                <input class="w3-input w3-border" type="number" style="padding:3px 5px;margin:auto;" id="pow2" oninput="setGradient()" onchange="setGradient()" value="100">
                <div id="touchbutton2" style="display:none;text-align:center;">
                    <button ontouchstart="touchslider(2, -1, event)" ontouchend="stoptouchslider()" onmousedown="touchslider(2, -1, event)" onmouseup="stoptouchslider()">&#10094;</button>
                    <button ontouchstart="touchslider(2, 1, event)" ontouchend="stoptouchslider()" onmousedown="touchslider(2, 1, event)" onmouseup="stoptouchslider()">&#10095;</button>
                </div>
            </div>
        </div>
        <hr style="border-color:#d3d3d3">
        <h4>CSS Код:</h4>
        <div class="w3-code notranslate">
            <div class="cssHigh">
                div {<br>&nbsp;&nbsp;&nbsp; <span id="stylepropval">background: linear-gradient(to bottom right,lightblue, coral);</span><br>}<br>
            </div>
        </div>
        <a class="w3-btn w3-margin-bottom" onclick="submitTryit()" href="../colorstryit/trycolors_gradient.html" target="_blank">Попробуйте сами &raquo;</a>
        <form id="gradientform" action="../colorstryit/trycolors_gradient.html" target="_blank" method="post">
            <input type="hidden" id="gradientinput" name="gradientinput">
        </form>
    </div>

    <script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            document.getElementById("touchbutton1").style.display = "block";
            document.getElementById("touchbutton2").style.display = "block";
        }
        var touchinterval;
        function touchslider(x, n, e) {
            e.preventDefault();
            var pow = Number(document.getElementById("pow" + x).value);
            document.getElementById("pow" + x).value = pow + n;
            setGradient();
            touchinterval = window.setInterval(function () {
                var pow = Number(document.getElementById("pow" + x).value);
                document.getElementById("pow" + x).value = pow + n;
                setGradient();
            }, 100);
        }
        function stoptouchslider() {
            window.clearInterval(touchinterval);
        }
        function drawRedTable() {
            var x = "", i, j, n, g, b, cARR = [], color, col1, col2, tr, tg, tb, br, bg, bb, pow1, pow2, pow3;
            g = 0;
            b = 0;
            x += "<table class='tableslider'>"
            x += "<tr>";
            for (i = -25; i <= 125; i++) {
                x += "<td";
                x += " style='position:relative;padding:0;'><div class='pointer' onmousedown='dragstart(1, event)' ontouchstart='dragstart(1, event)' id='redpointer" + i + "'><div>" + i + "</div><i class='fa fa-caret-down'></i></div></td>";
            }
            x += "</tr>";
            pow1 = Number(document.getElementById("pow1").value);
            pow2 = Number(document.getElementById("pow2").value);
            pow3 = pow2 - pow1;
            col1 = w3color(document.getElementById("color1").value);
            col2 = w3color(document.getElementById("color2").value);
            tr=col1.red;
            tg=col1.green;
            tb=col1.blue;
            br=col2.red;
            bg=col2.green;
            bb=col2.blue;
            n = 0;
            x += "<tr>";
            for (j = pow1; j <= pow2; j++) {
                n++;
                opacity = n / (pow3 + 1);
                rr=opacity*br+(1-opacity)*tr
                rg=opacity*bg+(1-opacity)*tg
                rb=opacity*bb+(1-opacity)*tb
                rr=Math.round(rr);
                rg=Math.round(rg)
                rb=Math.round(rb)
                cARR[j] = "rgb(" + rr + "," + rg + "," + rb + ")";
            }
            for (i = -25; i <= 125; i++) {
                bordercolor = "#555555";
                if (pow2 < pow1) {bordercolor = "#f44336";}
                if ((i < pow1 && i < pow2) || (i > pow2 && i > pow1)) {
                    bordercolor = "transparent";
                }
                if (i < pow1) {
                    color = col1.toRgbString();
                } else if (i >= pow2) {
                    color = col2.toRgbString();
                } else {
                    color = cARR[i];
                }
                if (i < 0) {color = "transparent";}
                if (i > 100) {color = "transparent";}
                x += "<td style='background:" + color + ";border-top:1px solid " + bordercolor + ";border-bottom:1px solid " + bordercolor + ";";
                if (pow1 < pow2) {
                    if (i == pow1) {x += "border-left:1px solid " + bordercolor + ";" }
                    if (i == pow2) {x += "border-right:1px solid " + bordercolor + ";"; }
                } else {
                    if (i == pow2) {x += "border-left:1px solid " + bordercolor + ";" }
                    if (i == pow1) {x += "border-right:1px solid " + bordercolor + ";"; }
                }
                x += "height:29px;width:1px;padding:0;'></td>";
            }
            x += "</tr>";
            x += "<tr>";
            for (i = -25; i <= 125; i++) {
                x += "<td";
                x += " style='position:relative;padding:0;'><div onmousedown='dragstart(2, event)' ontouchstart='dragstart(2, event)' class='pointerup' id='redpointerup" + i + "'><div>" + i + "</div><i class='fa fa-caret-up'></i></div></td>";
            }
            x += "</tr>";
            x += "</table>";
            document.getElementById("redtable").innerHTML = x;
            if (document.getElementById("redpointer" + pow1)) {document.getElementById("redpointer" + pow1).style.display = "block";}
            if (document.getElementById("redpointerup" + pow2)) {document.getElementById("redpointerup" + pow2).style.display = "block";}
        }

        function submitTryit() {
            event.preventDefault();
            document.getElementById("gradientform").submit();
        }
        function submitOnEnter(e) {
            keyboardKey = e.which || e.keyCode;
            if (keyboardKey == 13) {
                setGradient();
            }
        }
    </script>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="colors_gradient.php">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="colors_theory.php">Next &#10095;</a>
    </div>
    <script src="../lib/w3color.js"></script>
    <script>
        var currentdir = "to bottom, ", direle = "dir1";
        function setGradient(x) {
            var ele, col1, col2, pow1, pow2, i, r, g, b, rgb;
            col1 = w3color(document.getElementById("color1").value);
            col2 = w3color(document.getElementById("color2").value);
            pow1 = document.getElementById("pow1").value;
            pow2 = document.getElementById("pow2").value;
            ele = document.getElementById("result01");
            for (i = 1; i <= 8; i++) {
                document.getElementById("dir" + i).className = document.getElementById("dir" + i).className.replace("active", "");
            }
            if (x == "bottom") {currentdir = "to bottom, "; direle = "dir1";}
            if (x == "right") {currentdir = "to right, "; direle = "dir2"; }
            if (x == "top left") {currentdir = "to top left, "; direle = "dir3"; }
            if (x == "top right") {currentdir = "to top right, "; direle = "dir4"; }
            if (x == "top") {currentdir = "to top, "; direle = "dir5"; }
            if (x == "left") {currentdir = "to left, "; direle = "dir6"; }
            if (x == "bottom left") {currentdir = "to bottom left, "; direle = "dir7"; }
            if (x == "bottom right") {currentdir = "to bottom right, "; direle = "dir8"; }
            document.getElementById(direle).className += "active";
            ele.style.background = "linear-gradient(" + currentdir + col1.toRgbString() + " " + pow1 + "%, " + col2.toRgbString() + " " + pow2 + "%)";
            document.getElementById("stylepropval").innerHTML = "background: <span class='csspropertyvaluecolor'>linear-gradient(" + currentdir + col1.toHexString() + " " + pow1 + "%, " + col2.toHexString() + " " + pow2 + "%)</span><span style='color:black'>;</span>";
            document.getElementById("gradientinput").value = "linear-gradient(" + currentdir + col1.toHexString() + " " + pow1 + "%, " + col2.toHexString() + " " + pow2 + "%)";
            placeHexagon(col1.toHexString(),1);
            placeHexagon(col2.toHexString(),2);
            document.getElementById("dir1").style.background = "linear-gradient(to bottom, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir2").style.background = "linear-gradient(to right, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir3").style.background = "linear-gradient(to top left, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir4").style.background = "linear-gradient(to top right, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir5").style.background = "linear-gradient(to top, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir6").style.background = "linear-gradient(to left, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir7").style.background = "linear-gradient(to bottom left, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            document.getElementById("dir8").style.background = "linear-gradient(to bottom right, " + col1.toRgbString() + "," + col2.toRgbString() + ")";document.getElementById("dir1").style.background = "linear-gradient(to bottom, " + col1.toRgbString() + "," + col2.toRgbString() + ")";
            drawRedTable();
        }
        function clickColor(n, hex, seltop, selleft, html5) {
            var c, cObj, colormap, areas, i, areacolor, cc;
            c = hex;
            cObj = w3color(c);
            colorhex = cObj.toHexString();
            if (cObj.valid) {

            } else {

                return;
            }
            r = cObj.red;
            g = cObj.green;
            b = cObj.blue;
            document.getElementById("color" + n).value = cObj.toHexString();
            setGradient();
        }

        function placeHexagon(color, n) {
            var colormap, i, seltop, selleft;
            colormap = document.getElementById("colormap" + n);
            areas = colormap.getElementsByTagName("AREA");
            for (i = 0; i < areas.length; i++) {
                areacolor = areas[i].getAttribute("onclick").substr(14,7)
                if (areacolor.toLowerCase() == color.toLowerCase()) {
                    cc = areas[i].getAttribute("onclick").replace(')', '').split(",");
                    seltop = Number(cc[2]);
                    selleft = Number(cc[3]);
                }
            }
            if ((seltop+200)>-1 && selleft>-1) {
                document.getElementById("selectedhexagon" + n).style.top=seltop + "px";
                document.getElementById("selectedhexagon" + n).style.left=selleft + "px";
                document.getElementById("selectedhexagon" + n).style.visibility="visible";
            } else {
                document.getElementById("selectedhexagon" + n).style.visibility = "hidden";
            }
        }
        color1 = w3color("rgb(51, 204, 255)");
        color2 = w3color("rgb(255, 153, 204)");
        document.getElementById("color1").value = color1.toHexString();
        document.getElementById("color2").value = color2.toHexString();
        setGradient();

        dragging = false;
        dragpointer = 1;
        function dragstart(n, e) {
            e.preventDefault();
            dragging = true;
            dragpointer = n;
        }
        var prevPos = false;

        function dragmove(e) {
            if (dragging)
            {
                document.getElementById("shield").style.display = "block";
                var pow = Number(document.getElementById("pow" + dragpointer).value);
                var pos = e.pageX;
                var cc;
                cc = window.innerWidth / 400;
                if (!prevPos) {prevPos = pos;}
                if (prevPos && (pos + cc) < prevPos) {
                    document.getElementById("pow" + dragpointer).value = (pow - 1);
                    setGradient();
                    prevPos = pos;
                }
                if (prevPos && (pos - cc) > prevPos) {
                    document.getElementById("pow" + dragpointer).value = (pow + 1);
                    setGradient();
                    prevPos = pos;
                }
            }
        }
        function dragend() {
            document.getElementById("shield").style.display = "none";
            dragging = false;
        }
        if (window.addEventListener) {
            window.addEventListener("mousemove", function(e) {dragmove(e);});
            window.addEventListener("touchmove", function(e) {dragmove(e);});
            window.addEventListener("mouseup", dragend);
            window.addEventListener("touchend", dragend);
        }
    </script>
    <hr>
    <p>Уроки по использованию цветов на веб-страницах смотрите на нашем сайте <?php include '../include/w3schools.php'; ?> в разделах
        <a href="../html/html_colors.php">HTML Цвета</a> и <a href="../css/css_colors.php">CSS Цвета</a>.</p>
</article>
<?php include '../include/addown_content.php'; ?>
</div>
<?php include '../include/rightbar.php'; ?>
<?php include '../include/footer.php'; ?>