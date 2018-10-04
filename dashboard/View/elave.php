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
                            <li><a href="<?php echo $site_url;?>home">Dashboard</a></li>
                            <li><a href="<?php echo $site_url;?>adminlist">Elave</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Elave list</strong>
                             <strong class="card-title float-right text-danger">
                              <a href="<?php echo $site_url.'addelave/'.$lng;?>">
                              Elave xeber
                              </a>
                              </strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">id</th>                     
                                  <th scope="col">Sekil</th>
                                  <th scope="col">Edit/Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $sql=Controller::$conn->elaveSelect('elavenews');
                           while ($row=mysqli_fetch_assoc($sql)) {
                             ?>


                            <tr>
                              <td scope="row"><?php echo $row["id"]; ?></td>
                              <td class="elave"><img src="<?php echo $site_url.$row["image"]; ?>"></td>
                         
                              <td>

                                <a href="">
                                  <button class="btn btn-success"><a href="<?php echo $site_url.'editelave/'."$lng/".$row["id"]; ?>">Edit</a></button>
                                </a>
                                 <a href="<?php echo $site_url.'delete/'."$lng/".'elavenews_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Delete</button></a>

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


    </div>
    <style>
      .elave img{
        height: 200px;
        width: 300px;
      }
    </style>
   