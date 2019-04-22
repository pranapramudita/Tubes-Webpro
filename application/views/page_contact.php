<!-- main -->
<div class="container main-page">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
            <div class="panel">
                <div class="panel-heading">
                    <b>Filling out this form will send your message directly to AZLyrics.com team!</b><br>
                    <small>If you want to submit/correct lyrics, please <a href="submit">click here</a></small>
                </div>
                <div class="panel-body">
                    <form action="contact_save" method="post">
                    <div class="form-group">
                        <label for="name">Your name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">Your e-mail address:</label>
                        <input type="text" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="subj">Subject:</label>
                        <input type="text" class="form-control" id="subj" name="subj" value="">
                    </div>
                    <div class="form-group">
                        <label for="comments">Message:</label>
                        <textarea class="form-control" id="comments" name="comments" rows="15" ></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Send Message</button>
                    </form>
                </div>
                <!-- <?php echo $this->session->flashdata('message');?> -->
            </div>
        </div>
    </div>
</div>  <!-- container main-page -->