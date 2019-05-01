<div class="container main-page">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center" style="padding-top: 20px;">
        <?php if (empty($song)) :?>
        <div class=" panel">
          <div class="alert-danger panel-heading" role="alert">
            Data tidak ditemukan
          </div>
        </div>
        <?php endif;?>
            <div class="panel">
                <div class="panel-heading"><b>Artist results:</b><br></div>
               
                <table class="table table-condensed">
                    
            <!-- Perulangan Database -->        
            <?php
            $i = 1;
             foreach ($song as $row){ ?>
            <tr>
                <td class="text-left visitedlyr">
                    <?= $i++?>. <a href="<?php echo base_url() ?>index.php/song/artist/<?php echo $row['artist'] ?>"><b><?php echo $row['artist'];
            ?></b></a>
                </td>
            </tr>
            <?php } ?>
            <!-- end -->
                    
                </table>
               
            </div>
            
            <div class="panel">
                <div class="panel-heading"><b>Album results:</b><br></div>
               
                <table class="table table-condensed">
                    
                  
            <?php
            $i = 1;
             foreach ($song as $row){ ?>
            <tr>
                <td class="text-left visitedlyr">
                    <?= $i++?>. <a href="<?php echo base_url() ?>index.php/song/artist/<?php echo $row['artist'] ?>"><b><?php echo $row['artist'];?> - <?php echo $row['album'];?></b></a>
                </td>
            </tr>
            <?php } ?>
            
                    
                </table>
               
            </div>
            
            
            <div class="panel">
                <div class="panel-heading"><b>Song results:</b><br></div>
                <table class="table table-condensed">
            <?php 
            $i = 1;
            foreach ($song as $row){ ?>
            <tr>
            <td class="text-left visitedlyr">
                <?= $i++?>. <a href="<?php echo base_url() ?>index.php/song/lyrics/<?php echo $row['id_song'] ?>"><b><?php echo $row['title'];?> </b></a>by <b><?php echo $row['artist'];?></b><br>
                <?php $row['lyrics'] = word_limiter($row['lyrics'], 50); ?>
                <small><?php echo $row['lyrics'];?></small>
            </td></tr>

            <?php } ?>
            
            <!-- end -->

            
                </table>
            </div>
            
            <form class="search" method="post" action="<?php echo base_url() ?>index.php/song/search">
                <div class="input-group">  
                <input type="text" class="form-control" placeholder="" name="keyword" id="q">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>