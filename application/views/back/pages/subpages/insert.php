    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Podstrony</h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force">
                                <label class="form-control-label">Podtytuł:</label>
                                <input class="form-control" type="text" name="subtitle">
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force">
                                <label class="form-control-label">Krótki opis strony: <span class="tx-danger">*</span></label>
                                <textarea class="summernote" name="description"></textarea>
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-l-0-force text-center">
                            <img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">
                        </div>
                    </div><!-- col-12 -->
                    <div class="col-md-12">
                        <div class="form-group bd-t-0-force bd-l-0-force">
                        <label class="form-control-label">Zdjęcie nagłówkowe:</label>
                        <input type="hidden" id="name_photo_1" name="name_photo_1">
                        <label class="custom-file">
                            <input type="file" id="photo_1" class="custom-file-input" name="photo_1">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </label>
                        </div>
                    </div><!-- col-12 -->
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-t-0-force bd-l-0-force">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt">
                        </div>
                    </div><!-- col-12 -->
                </div>
            </div><!-- row -->
          </form><!-- form-layout -->