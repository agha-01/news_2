             <style>
       #bootstrap-data-table_filter{
        display: flex!important;
        justify-content: flex-end !important;
       }
     </style>

      

      <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo $site_url; ?>home">Dashboard</a></li>
                            <li><a href="<?php echo $site_url; ?>news">Xeberler</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Xəbərlər</strong>
                             <a href="<?php echo $site_url.'addslider/'.$lng;?>">
                               <h4 class="card-title float-right text-danger">Yeni Slider əlavə et</h4>
                             </a>
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Şəkil</th>
                        <th>Başlıq</th>
                        <th>Text</th>
                        <th>Baxis</th>
                        <th>Edit/Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql=Controller::$conn->Select('slidernews',$lng);
                           while ($row=mysqli_fetch_assoc($sql)) {
                             ?>
                      <tr>
                        <td><?php echo $row["id"]; ?></td>
                         <td><img src="<?php echo $site_url.$row["image"]; ?>" width="150"></td>
                        <td><?php echo $row["basliq"]; ?></td>
                        <td><?php echo $row["text"]; ?></td>
                        <td><?php echo $row["baxis"]; ?></td>

                         <td>
                          <a href="<?php echo $site_url;?>editslider/<?php echo "$lng/".$row["id"]; ?>"><button class="btn btn-success">Düzəliş et</button>
                            </a>
                           <a href="<?php echo $site_url.'delete/'."$lng/".'slidernews_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

                                <script>
                                  deletee.addEventListener("click",function(e){
                                    if (confirm("Silmek istediyinize eminsiniz?")) {

                                    }
                                    else{
                                      e.preventDefault();
                                    }
                                  });
                                </script>
                        </td>
                      </tr>
                    <?php } ?>
                      

                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


  