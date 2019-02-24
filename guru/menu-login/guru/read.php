
<table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Username </th>
              <th>Password</th>
              <th>Kode Guru</th>
              <th>NIP</th>
              <th>Nama Guru</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>Tlp</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
        <?php
          session_start();
          $id_g = $_SESSION['id'];

          if($_SESSION['status']!="login"){
            header("location:../index.php?pesan=belum_login");
            }
           ?>

		  <tbody>  
          <?php
             $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE id_guru = '$id_g' "); 

             $i = 1;

             while($row = mysqli_fetch_assoc($query)){
               echo                
               "<tr>
                   <td scope='row'><center>".$i++."</center></td>
                   <td>".$row['username']."</td>
                   <td>".$row['password']."</td>
                   <td>".$row['kode_guru']."</td>
                   <td>".$row['nip']."</td>
                   <td>".$row['nama_guru']."</td>
                   <td>".$row['jk']."</td>
                   <td>".$row['alamat']."</td>
                   <td>".$row['agama']."</td>
                   <td>".$row['tlp']."</td>
               ";
          ?>
              <td><img src="images/<?php echo $row['gambar'];?>" height="20"></td>
              <td>
               <a href="index.php?page=edit&id_guru=<?php echo $id_g?>"><i class="fa fa-pencil"></i></a> 
              </td>
          </tr>
<!--  --><?php } ?>
			</tbody>
        </table>
      </div>