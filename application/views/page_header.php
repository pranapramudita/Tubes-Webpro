<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- title, icon, etc.-->
        <title>AZLyrics - Song Lyrics from A to Z</title>
        <link rel="shortcut icon" href="assets/icon.png">        

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/home.css"/>
    </head>

    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- code -->
        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search-collapse"><span class="glyphicon glyphicon-search"></span></button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#artists-collapse"><span class="glyphicon glyphicon-th-list"></span></button>
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img alt="AZLyrics.com" class="pull-left" style="max-height:40px; margin-top:-10px;" src="<?php echo base_url() ?>/assets/icon.png"></a>
            </div>
            <ul class="collapse navbar-collapse nav navbar-nav" id="artists-collapse">
            <li>
            <div class="btn-group text-center" role="group">
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/a">A</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/b">B</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/c">C</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/d">D</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/e">E</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/f">F</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/g">G</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/h">H</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/i">I</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/j">J</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/k">K</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/l">L</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/m">M</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/n">N</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/o">O</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/p">P</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/q">Q</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/r">R</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/s">S</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/t">T</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/u">U</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/v">V</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/w">W</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/x">X</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/y">Y</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/z">Z</a>
            <a class="btn btn-menu" href="<?php echo base_url() ?>index.php/song/listartist/1">#</a>
            </div>
            </li>
            </ul>

            <div class="collapse navbar-collapse" id="search-collapse">

            <form class="navbar-form navbar-right search" method="post" action="<?php echo base_url() ?>index.php/song/search">
                <div class="input-group">  
                <input type="text" class="form-control" placeholder="" name="keyword" id="q">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                    </span>
            </div>   
            </form>

            </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <!-- top ban -->
        <div class="lboard-wrap">
        <div class="container">
            <div class="row">
            <div class="col-xs-12 top-ad text-center">
                <span id="cf_banner_top_nofc"></span>
            </div>
            </div>
        </div>
        </div>
    </body>
</html>