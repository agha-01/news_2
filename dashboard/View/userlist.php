
<!-- yeni //////////////// -->
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
                            <li><a href="<?php echo $site_url; ?>userlist">Users</a></li>
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
                            <strong class="card-title">Istifadeciler</strong>
                        </div>
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Ad</th>
                        <th scope="col">Soyad</th>     
                        <th scope="col">Cinsi</th>     
                        <th scope="col">Email</th>      
                        <th scope="col">Status</th>
                        <th scope="col">Edit/Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 

                       if ($param==3) {
                          $sql=Controller::$conn->Userselect('users');
                       }
                       else{
                         $sql=Controller::$conn->Userselect('users',"status=$param");
                       }
                        while ($row=mysqli_fetch_assoc($sql)) {

                           ?>
                            <tr>
                              <th scope="row"><?php echo $row["id"]; ?></th>
                              <td><?php echo $row["name"];?></td>
                              <td><?php echo $row["lname"];?></td>
                              <td><?php echo $row["gender"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                             <?php 
                              if ($row["status"]==1) {
                                echo '<td class="text-success">Aktiv</td>';
                              }
                              else{
                                echo '<td class="text-secondary">Qara siyahı</td>';
                              }


                              ?>
                              <td>
                                  
                              
                                  <button class="btn btn-success"><a href="<?php echo $site_url."editusers/"."$lng/".$row["id"]; ?>">Duzelis et</a></button>
                              
                                
                                <a href="<?php echo $site_url.'delete/'."$lng/".'users_'.$row["id"]; ?>" id="deletee" ><button class="btn btn-danger">Sil</button></a>

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
   <?php 
}


    ?>                      
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


