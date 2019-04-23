<!-- main -->
<div class="container main-page">
    <div class="row">
      <div class="col-sm-6 text-center artist-col">
        <?php if (empty($artist)) :?>
          <div class="alert-danger text-center artist-col" role="alert">
            Data tidak ditemukan
          </div>
        <?php endif;?>
        <?php foreach ($artist as $a) :?>
          <a href="<?php echo base_url() ?>index.php/song/artist/<?php echo $a['artist'] ?>"><?php echo $a['artist'] ?></a><br>
        <?php endforeach ?>
      </div>
    </div>
  </div>  <!-- container main-page -->