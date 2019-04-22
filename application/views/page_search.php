<div class="container main-page">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center" style="padding-top: 20px;">
        <?php if($song != false){?>
            <div class="panel">
                <div class="panel-heading"><b>Artist results:</b><br><small>[1-1 of 1 total <span class="text-lowercase">Artists</span> found]</small></div>
               
                <table class="table table-condensed">
                    
            <!-- Perulangan Database -->        
            <?php
            $i = 1;
             foreach ($song as $row){ ?>
            <tr>
                <td class="text-left visitedlyr">
                    <?= $i++?>. <a href="artist/<?php echo $row['artist'] ?>" target="_blank"><b><?php echo $row['artist'];
 ?></b></a>
                </td>
            </tr>
            <?php } ?>
            <!-- end -->
                    
                </table>
               
            </div>
            <?php } ?>
            <?php if($song != false){?>
            <div class="panel">
                <div class="panel-heading"><b>Album results:</b><br><small>[1-1 of 1 total <span class="text-lowercase">Album</span> found]</small></div>
               
                <table class="table table-condensed">
                    
            <!-- Perulangan Database -->        
            <?php
            $i = 1;
             foreach ($song as $row){ ?>
            <tr>
                <td class="text-left visitedlyr">
                    <?= $i++?>. <a href="artist/<?php echo $row['artist'] ?>" target="_blank"><b><?php echo $row['album'];
 ?></b></a>
                </td>
            </tr>
            <?php } ?>
            <!-- end -->
                    
                </table>
               
            </div>
            <?php } ?>

            <div class="panel">
                <div class="panel-heading"><b>Song results:</b><br><small>[1-5 of 56 total <span class="text-lowercase">Songs</span> found]</small></div>
                <table class="table table-condensed">
                    
            <!-- Perulangan Database -->
            <tr>
            <td class="text-left visitedlyr">
                    <?= $i++?>. <a href="artist/<?php echo $row['artist'] ?>" target="_blank"><b><?php echo $row['title'];
 ?></b></a>
                </td>
            </tr>
            <!-- end -->

            <tr>
                <td>
                    <a class="btn btn-share" href="more">More Song Results</a>
                </td>
            </tr>
            
                    
                </table>
            </div>
            
            <form class="search" method="get" action="" role="search">
                <div style="margin-bottom:15px" class="input-group">
                    <input type="text" class="form-control" placeholder="" name="q" value="">
                    <span class="input-group-btn">
            	  <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
          	</span>
                </div>
            </form>
        </div>
    </div>
</div>