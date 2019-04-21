<!-- main -->
<div class="container main-page">
    <div class="row">
        <div class="col-sm-6 col-lg-4 col-lg-offset-2 text-center artist-col">
            <h1>Welcome to AZLyrics!</h1><br>
                It's a place where all searches end!<br><br>
                We have a large, legal, every day growing universe of lyrics where stars of all genres and ages shine.<br><br>
                <form class="search" method="get" action="<?php echo base_url() ?>search">
                    <div class="input-group">  
                        <input type="text" class="form-control" placeholder="" name="q">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
	            </form>
	            <p class="help-block">Enter artist name or song title</p>
        </div>
        <div class="col-sm-6 col-lg-4 text-center artist-col">
            <div class="hidden-xs rect-ad">
                <span id="cf_medrec"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-8 col-lg-offset-2 text-center artist-col">
            <h1>WHAT'S HOT?</h1>
        </div>
    </div>
    <!-- what's hot placeholder -->
    <div class="row">
        <?php foreach ($song as $sg) :?>
        <div class="col-xs-3 albuma"><a href="<?php echo base_url() ?>artist"><img src="assets/<?php echo $sg['image'] ?>" alt="" /></a><a href="<?php echo base_url() ?>artist"><?php echo $sg['artist'] ?></a>"<?php echo $sg['title'] ?>"</div>
        <?php endforeach ?>
    </div>
    <!-- end of what's hot placeholder -->
</div>  <!-- container main-page -->