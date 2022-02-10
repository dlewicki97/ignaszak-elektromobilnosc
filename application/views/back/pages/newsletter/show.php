    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Newsletter</h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
    </div><!-- d-flex -->
    <form method="POST" action="<?= base_url(). 'panel/newsletter/send' ?>" enctype="multipart/form-data">
        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if(isset($_SESSION['flashdata'])): ?>
                <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>

            <div class="form-layout form-layout-2">

                <div class="row no-gutters">

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-control-label">Temat Twojej wiadomości:</label>
                                <input <?= @$value->id ? 'disabled' : '' ?> class="form-control" type="text" name="subject" value="<?= @$value->subject ?>" required>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-md-12">
                            <div class="form-group  bd-t-0-force">
                                <label class="form-control-label">Treść Twojej wiadomości</label>
                                <textarea <?= $this->uri->segment(4) ? 'disabled class="form-control"' : 'class="summernote"' ?>   required name="message"><?= $this->uri->segment(4) ? strip_tags(@$value->message) : @$value->message ?></textarea>
                            </div>

                        </div><!-- col-12 -->
                        <?php if(!$this->uri->segment(4)): ?>
                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force">
                                    <label id="infoFile" class="form-control-label"></label>
                                    <label class="form-control-label">Plik:</label>
                                    <input type="hidden" id="name_file_1" name="name_file_1">
                                    <label class="custom-file">
                                        <input type="file" onchange="uploadFile();" id="attachment" class="custom-file-input" name="attachment">
                                        <span class="custom-file-control custom-file-control-inverse"></span>
                                    </label>
                                </div>
                            </div>
                            <?php elseif(@$value->attachment): ?>
                            <div class="col-md-12">
                                <div class="form-group bd-t-0-force">
                                        <label class="form-control-label">Załącznik do pobrania: <a download href="<?php echo base_url(); ?>mailer/attachment/<?php echo $value->attachment?>"><i class="fas fa-file-download fa-3x ml-3 tx-black"></i></a></label>
                                </div>
                            </div>
                        <?php endif; ?>

                            <div class="col-md-12">
                                <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                    <button <?= $this->uri->segment(4) ? 'disabled' : '' ?> class="btn btn-info">Wyślij</button>
                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Powrót</button>
                                </div><!-- form-group -->
                            </div><!-- col-12 -->
                        </div>
                    </div><!-- row -->
                </div><!-- form-layout -->

            </form>


            <script>
                function uploadFile() {
                    document.getElementById('infoFile').innerHTML = '<span class="text-center"><i class="fas fa-spinner fa-pulse loader"></i></span>';
                    setTimeout(function(){ 
                        document.getElementById('infoFile').innerHTML = '<span class="text-success"><i class="fas fa-check"></i> Plik został przygotowany do wysłania</span>';
                    }, 1000);
                }
            </script>