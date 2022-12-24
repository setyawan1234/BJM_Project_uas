@extends('layoutuser.main')
@section('content')                     
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Rule Diagnosa</h1>
        <p class="mb-4">Berikut merupakan data rule diagnosa</p>

      @if(Session::has('berhasil'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Success,</strong>
              {{ Session::get('berhasil') }}
          </div>
      @endif
        <!-- DataTales Example -->

        <br>
     <div class="w3-container w3-light-gray">
         <div class="w3-row">
             <div class="w3-col l1">&nbsp;</div>
             <div class="w3-col l10 w3-white">
                 <div class="w3-container"><br>
                     <div class="w3-row">
                         <div class="w3-col l12 w3-center">
                             <div class="w3-xlarge">SISTEM PAKAR</div>
                             <div class="w3-large"><strong>DIAGNOSIS KERUSAKAN MOBIL</strong></div>
                             <div class="w3-small" style="margin-top:3px;">MENGGUNAKAN METODE <strong>FORDWARD
                                     CHAINING</strong></div>
                         </div>

                     </div>
                     <hr>
                 </div>

                 <div class="w3-container">
                     <div class="w3-row">
    
                         <div class="w3-col l9" style="padding-left:8px;">
                             <div class="w3-border w3-padding">
                                 <div class="w3-border-bottom" style="padding-bottom:10px; margin-top:8px;"><strong><i
                                             class="fa fa-check"></i> PILIH GEJALA</strong></div>
                                 <div class="w3-padding w3-center w3-border w3-border-yellow w3-pale-yellow w3-small"
                                     style="margin-top:8px;">
                                     <div class="w3-medium">Pilih Gejala Yang Anda Rasakan</div>
                                 </div>



                                 <script type="text/javascript">
                                 $(document).ready(function() {
                                     $("form").submit(function() {
                                         if (!isCheckedById("gejala")) {
                                             alert(
                                                 "Anda Belum Memilih Gejala Apapun\nSilahkan Pilih Gejala..!");
                                             return false;
                                         } else {
                                             return true; //submit the form
                                         }
                                     });

                                     function isCheckedById(id) {
                                         var checked = $("input[@id=" + id + "]:checked").length;
                                         if (checked == 0) {
                                             return false;
                                         } else {
                                             return true;
                                         }
                                     }
                                     // pilih bobot
                                     function isCheckedById2(id) {
                                         var checked = $("option[@id=" + id + "]:checked").length;
                                         if (checked == "") {
                                             return false;
                                         } else {
                                             return true;
                                         }
                                     }
                                     //--
                                 });
                                 </script>



                                 <form method="post" name="form" target="_self" action="diagnosa_cek.php">
                                     <ul style="list-style:none; margin-top:8px;" class="w3-ul w3-border">
                                         <?php
											include "koneksi.php";
											$kosong_tmp_penyakit = mysqli_query($koneksi, "DELETE FROM tmp_penyakit");
											$query = mysqli_query($koneksi, "SELECT * FROM gejala ORDER BY gejala ASC") or die("Query Error..!" . mysql_error);
											while ($row = mysqli_fetch_array($query)) {
											?>
                                         <li class="w3-small w3-justify"><input style="cursor:pointer" type="checkbox"
                                                 class="w3-check" name="gejala[]" id="gejala"
                                                 value="<?php echo $row['kd_gejala']; ?>"><span
                                                 style="margin-left:10px;"><?php echo $row['gejala']; ?></span></li>
                                         <?php } ?>
                                     </ul>
                                     <hr>
                                     <div class="w3-center">
                                        <a href="diagnosa_create.php" style="cursor:pointer" class="w3-btn w3-small w3-red"><i class="fa fa-times-rectangle fa-fw"></i> Batal</a> 
                                        <button type="reset" class="w3-btn w3-small w3-orange"><i class="fa fa-recycle fa-fw"></i> Reset</button> 
                                        <button type="submit" class="w3-btn w3-small w3-green"><i class="fa fa-save fa-fw"></i> Proses Diagnosa</button>
                                     </div>

                                 </form>

                                 <br>
                             </div>

                         </div>
                     </div>
                 </div><br>

             </div>
             <div class="w3-col l1">&nbsp;</div>
         </div>
     </div>
     <br>
      </div>
      <!-- /.container-fluid -->
</div>
</div>       
@endsection