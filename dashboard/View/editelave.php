                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit Admin</strong> 
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo $site_url; ?>elaveedit/<?php echo $lng ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <?php 
              $sql=Controller::$conn->selectForEdit("elavenews",$param);
                      $row=mysqli_fetch_assoc($sql);
                
                 ?>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Sekil</label></div>
                            <div class="col-12 col-md-9 elave"><img src="<?php echo $site_url.$row["image"]; ?>"></div>
                          </div>
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Reset
                            </button>


                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
<style>
  .elave img{
    height: 300px;
    width: auto;
  }
</style>
