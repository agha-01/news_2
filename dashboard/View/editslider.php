<div class="col-lg-10">
                    <div class="card">
                      <div class="card-header">
                        <strong>edit news</strong>
                      </div>
          <!-- Azerbaycan dili start -->
        <div class="card-body card-block">
          <form action="<?php echo $site_url.'slideredit/'.$lng."/$param"; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                <?php 

                $sql=Controller::$conn->selectForEdit("slidernews",$param);
                      $row=mysqli_fetch_assoc($sql);
                    
                 ?>
                        <i class="flag-icon flag-icon-az" style="float: right; font-size: 30px;"></i>
                        <br>
                        <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                            	<input type="text" id="text-input" name="basliq" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                            	<small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                            	<textarea name="text"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>                      
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                          </div>
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">
                         
        </div>
        <!-- Azerbaycan dili end -->


        <!-- Rus dili start -->
        <div class="card-body card-block">
         
                <?php 

                $sql=Controller::$conn->selectForEdit("slidernews",$param+1);
                      $row=mysqli_fetch_assoc($sql);
                      
                 ?>
                 <i class="flag-icon flag-icon-ru" style="float: right; font-size: 30px;"></i>
                        <br>
                        <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqr" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                              <small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="textr"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                       
        </div>
        <!-- rus dili end -->

        <!-- Ingilis dili start -->
        <div class="card-body card-block">
          
                <?php 

                $sql=Controller::$conn->selectForEdit("slidernews",$param+2);
                      $row=mysqli_fetch_assoc($sql);
                      
                 ?>
                 <i class="flag-icon flag-icon-us" style="float: right; font-size: 30px;"></i>
                        <br>
                        <br>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">basliq</label></div>
                            <div class="col-12 col-md-9">

                              <input type="text" id="text-input" name="basliqen" value="<?php echo $row["basliq"];?>" placeholder="Basliq" class="form-control" required>

                              <small class="form-text text-muted">basliq</small></div>
                          </div>
                          
                          
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Text</label></div>
                            <div class="col-12 col-md-9">

                              <textarea name="texten"  id="textarea-input" rows="9" placeholder="Text" class="form-control">
                              <?php echo $row["text"]; ?>
                              </textarea>

                            </div>
                          </div>
                          
                          <input type="hidden" name="hidden" value="<?php echo $row["id"]; ?>">
                          <input type="hidden" name="uImage" value="<?php echo $row["image"]; ?>">
                          <div class="card">
                    
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                          </button>
                          <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                          </button>
                        </div>
                       </div>
            </form>
        </div>
        <!-- Ingilis dili end -->
                     
                    </div>
                    
                  </div>