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
      <!-- <input type="hidden" name="song_id" value="null">
      <input type="hidden" name="artist_id" id="artist_id" value="null">
      <div class="form-group">
        <label>You want to...</label>
        <div class="radio">
          <label class="radio-inline">
            <input checked type="radio" id="what-add" name="what" value="added lyrics">
            Submit Lyrics
            </label>
          <label class="radio-inline">
            <input  type="radio" id="what-cor" name="what" value="corrected lyrics">
            Correct Lyrics
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="name">Your name or nickname:</label>
        <input type="text" class="form-control" id="name" name="name" maxlength="60" value="">
        <p class="help-block">(Your name may be published on the lyrics page. Leave blank to remain anonymous.)</p>
      </div>
      <div class="form-group">
        <label for="artist">Artist/band:</label>
        <input type="text" class="form-control" id="artist" name="artist" maxlength="100" value="">
        <span id="artistval" class="help-block"></span>
      </div>
      <div class="form-group">
        <label for="song">Song title:</label>
        <input type="text" class="form-control" id="song" name="song" maxlength="150" value="">
      </div>
      <div class="form-group">
        <label for="album">Album:</label>
        <input type="text" class="form-control" id="album" name="album" maxlength="100" value="">
      </div>
      <div class="form-group">
        <label for="source">Where did you get these lyrics?</label>
        <select class="form-control" id="source" name="source">
          <option selected value="site">from another website</option>
          <option  value="CD cover">album booklet</option>
          <option  value="transcribed">transcribed by yourself</option>
          <option  value="lyric video">official lyric video</option>
          <option  value="other source">other</option>
        </select>
      </div>
      <div class="form-group" id="other_text_group" style="display: none">
        <label for="other_text">Please specify your source:</label>
        <input type="text" class="form-control" id="other_text" name="other_text" maxlength="200" value="">
      </div>
      <div class="form-group">
        <label for="lyrics">Lyrics:</label>
        <textarea class="form-control" id="lyrics" name="lyrics" rows="30" style="resize: none;"></textarea>
      </div>
      <div class="alert" id="resultBlock" style="display: none"></div> -->
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
        <!-- <input type="text" class="form-control" id="lyrics" name="lyrics"> -->
        <small class="form-text text-danger"><?= form_error('lyrics') ?></small>
      </div>
      <div class="form-group">
      <label for="lyrics">Album Cover:</label>
      <div class="input-group">
        <input type="file" id="imgInp" name='userfile' class="form-control" rows="5">
        <span class="input-group-btn">
          <input class="btn btn-primary" type="submit" value="Upload">
        </span>
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