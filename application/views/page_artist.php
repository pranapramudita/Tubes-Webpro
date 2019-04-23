<!-- main -->
<div class="container main-page">
    <div class="row">
        <div class="col-md-3 text-center hidden-sm hidden-xs">
            <div class="sky-ad"></div>
        </div>

        <!-- content -->
        <div class="col-xs-12 col-md-6 text-center">

            <form id="addsong" action="../add.php" method="post">
            <input type="hidden" name="what" value="add_song">
            <input type="hidden" name="artist" value="Aaron Lewis">
            <input type="hidden" name="artist_id" value="2713">
            </form>

            <!-- <div class="div-share noprint">
            <div class="fb-like" style="float:left;" data-href="//www.azlyrics.com/a/aaronlewis.html" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            </div> -->
            <?php foreach ( $song as $a ) : ?>
            <h1><strong><?= $a['artist']; ?> Lyrics</strong></h1>
            <?php endforeach; ?>
            <!-- <div class="ringtone">
            <span id="cf_text_top"></span>
            </div> -->

            Related artists:<br>
            <!-- <a href="../s/staind.html">Staind</a>
            <br><br> -->

            <!-- start of song list -->
            <a href="#" class="btn btn-xs btn-default sorting" onclick="return showAlbum();"><span class="glyphicon glyphicon-sort-by-order"></span> sort by album</a>
            <a href="#" class="btn btn-xs btn-default sorting" onclick="return showSong();"><span class="glyphicon glyphicon-sort-by-alphabet"></span> sort by song</a><br>

            <!-- Perulangan list album -->

            <?php foreach ( $song as $a ) : ?>
                <div id="" class="">album: <b><?= $a['album']; ?></b> </div>
            <?php endforeach; ?>
            <!-- Perulangan list lagu -->
            <?php foreach ( $song as $a ) : ?>
                <a href="#" target="_blank"><?= $a['title']; ?></a><br> </div>
            <?php endforeach; ?>
            <!-- end -->
            <!-- </div> -->
            
            <!-- end of song list -->

            <!-- <div class="ringtone">
            <span id="cf_text_bottom"></span>
            </div> -->

        </div> <!-- content -->

    <!-- <div class="col-md-3 text-center hidden-sm hidden-xs">
    <div class="sky-ad"></div>
    </div> -->
    </div>
</div>  <!-- container main-page -->