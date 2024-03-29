<!-- main -->
<div class="container main-page">
<div class="row">
<div class="col-lg-2 text-center hidden-md hidden-sm hidden-xs noprint">
   <div class="sky-ad"></div>
</div>

<!-- content -->
<div class="col-xs-12 col-lg-8 text-center">

<?php foreach ($title as $d) :?>            
<!-- <div class="div-share"><h1>"<?php echo $d['artist'] ?>" lyrics</h1></div> -->
<div class="lyricsh">
<h2><b><?php echo $d['artist'] ?> Lyrics</b></h2>
</div>

<div class="ringtone">
<span id="cf_text_top"></span>
</div>

<b>"<?php echo $d['title'] ?>"</b><br>
<br>

<div>

   <div class="artist">
      <h2 href="<?php base_url() ?>index.php/song/lyrics/<?php echo $d['artist'] ?>"><b></b></h2>
   </div>
   <div class="lyrics">
      <a href="<?php base_url() ?>index.php/song/lyrics/<?php echo $d['artist'] ?>"></a><br>
      <a href="<?php base_url() ?>index.php/song/lyrics/<?php echo $d['title'] ?>"></a><br>
   </div>
      <?php echo $d['lyrics'] ?>
<?php endforeach ?>
   </div>

<br><br>

<!-- MxM banner -->
<div class="noprint">
<script>
if  ( /Android|webOS|iPhone|iPod|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) 
  {
     document.write('<div style="margin-left: auto; margin-right: auto;">'+
  '<iframe scrolling="no" style="border: 0px none; overflow:hidden;" src="//adv.mxmcdn.net/br/t1.0/m_js/e_0/sn_0/l_18903786/su_0/rs_0/tr_3vUCABGL6C5Y3NGfMqd5-1v9prTyhMZefheoPwlDemQiQwaiwvFyF0NEtk3DS1I2ZkTBnPV_X9dRWKgRoFOrH3ifEo5kc6VlXQmhRYJNu4qUGb-2sJmTjhZXsFnpmld8fPYH9Rdk-lMJo3V6eRdkHk5iy0b0hs6ogsorGnb7Qf0yxyMcdO4Up0i-qyVN1i0xEwfvh2yFrNmx-f12A04hhlI35MXb7Rn0ASQQ9lGWYggG9xkQckMVMqkYcljHG06tUd5tffx8tAqJ1Y_JrY2Uxh4NAjHGMS_jHTPvN3rVAKrI3pVj5HGULAnVMppQr7tlv6kZSa5O85rdkaSlxOU2cplPZSaVuo3jBX3QYsxshnWmC_Yfp0RuyRYJHccG1GkBiGwWbhd7ehTvGPU_U7D1mJIUuE1JlfaDc6NX_E5jNjkxg0CZg0iukoaIFoHz/" width="290px" height="50px"></iframe>'+
  '</div>');
   }
</script>
<br><br>
</div>

<form id="addsong" action="../../add.php" method="post">
<input type="hidden" name="what" value="add_song">
<input type="hidden" name="artist" value="Joji">
<input type="hidden" name="artist_id" value="8009">
</form>

<form id="corlyr" action="../../add.php" method="post">
<input type="hidden" name="what" value="correct_lyrics">
<input type="hidden" name="song_id" value="581064">
</form>

<div class="smt noprint">
<a class="btn btn-share" href="<?php echo base_url()?>index.php/song/update/<?php echo $d['id_song']?>" onclick="submitCorrections()"><span class="glyphicon glyphicon-pencil"></span> Submit Corrections</a>
</div>
<div class="smt noprint">
<a class="btn btn-share" href="<?php echo base_url()?>index.php/song/deletesong/<?php echo $d['id_song']?>" onclick="submitCorrections()"><span class="glyphicon glyphicon-pencil"></span> Delete Lyrics</a>
</div>

<div class="smt"></div>

<div class="noprint" style="padding: 15px 0">
<span id="cf_text_bottom"></span>
</div>

<!-- credits -->
<div class="smt"></div>

<!-- song facts -->

<!-- artist link -->
<ol class="breadcrumb noprint" itemscope itemtype="https://schema.org/BreadcrumbList">
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?php echo base_url()?>"><span itemprop="name">AZLyrics</span></a></li>
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?php echo base_url()?>index.php/song/listartist/<?php echo $d['artist'][0]?>"><span itemprop="name"><?php echo $d['artist'][0]?></span></a></li>
  <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?php echo base_url()?>index.php/song/artist/<?php echo $d['artist']?>"><span itemprop="name"><?php echo $d['artist']?> Lyrics</span></a></li>
</ol>

<!-- album songlists -->
<div class="panel songlist-panel noprint">
<?php foreach ($title as $d ) : ?>
album: <b>"<?php echo $d['album']?>"</b><br><br>
<?php endforeach; ?>
<?php foreach ($title as $d ) : ?>
<a href="<?php echo base_url()?>index.php/song/lyrics/<?php echo $d['id_song']?>"><?php echo $d['title']?></a><br>
<?php endforeach; ?>
</div>

<!-- album songlists end -->

<form class="search" method="post" action="<?php echo base_url() ?>index.php/song/search/">
                <div class="input-group">  
                <input type="text" class="form-control" placeholder="" name="keyword" id="q">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                    </span>
                </div>
            </form>

<div class="noprint visible-xs-block" style="margin-top:5px;margin-bottom:5px">
<span id="cf_rect_bottom"></span>
</div>

</div> <!-- content -->

<div class="col-lg-2 text-center hidden-md hidden-sm hidden-xs noprint">
   <div class="sky-ad"></div>
</div>
</div>
</div>  <!-- container main-page -->