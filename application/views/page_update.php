<!-- main -->
<div class="container main-page">
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">

    <div class="alert alert-info"><b>Filling out this form will send lyrics directly to AZLyrics.com Team.</b></div>

    <div class="alert alert-warning">Allow up to a week for submissions to be processed.</div>
    <div class="alert alert-warning">The most requested and currently popular lyrics will be processed first.</div>
    <div class="alert alert-warning">AZLyrics.com Team reserves the right to reject submissions.</div>

    <div class="panel">
    <div class="panel-body">
    <form id="submitLyrics" method="post" action="submit_save">
      <div class="form-group">
        <label for="title">Song Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
        <small class="form-text text-danger"><?= form_error('title') ?></small>
      </div>
      <div class="form-group">
        <label for="artist">Artist:</label>
        <input type="text" class="form-control" id="artist" name="artist" required>
        <small class="form-text text-danger"><?= form_error('artist') ?></small>
      </div>
      <div class="form-group">
        <label for="album">Album:</label>
        <input type="text" class="form-control" id="album" name="album" required>
        <small class="form-text text-danger"><?= form_error('album') ?></small>
      </div>
      <div class="form-group">
        <label for="lyrics">Lyrics:</label>
        <textarea class="form-control" id="lyrics" name="lyrics" rows="30" style="resize: none;" required></textarea>
        <small class="form-text text-danger"><?= form_error('lyrics') ?></small>
      </div>
      <div class="form-group">
        <label for="lyrics">Album Cover:</label>
        <div class="file-upload ">
          <?php echo form_open_multipart('song/upload');?>
          <input class="form-control" type="file" name="userfile" size="20" />
          <br/><br/>
          <i class="fa fa-arrow-up"></i>
        </div>
        <img id='img-upload'/>
      </div>
      <button class="btn btn-primary" name="submit" type="submit">Submit Lyrics</button>
    </form>
    </div>
    </div>

    </div>
  </div>
</div>  <!-- container main-page -->