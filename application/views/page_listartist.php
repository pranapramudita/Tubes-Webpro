<!-- main -->
<div class="container main-page">
    <div class="row">
      <div class="col-sm-6 text-center artist-col">
        <?php foreach ($artist as $a) :?>
            <a href="<?php base_url() ?>artist/<?php echo $a['artist'] ?>"><?php echo $a['artist'] ?></a><br>
        <?php endforeach ?>
      </div>
    </div>
  </div>  <!-- container main-page -->