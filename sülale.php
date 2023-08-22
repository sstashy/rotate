<?php 
include("inc/sidebar.php");
include("server/vipkontrol.php");



?>
            <div class="main-content">
                <div class="page-content">
                  <div class="container-fluid">

            <div class="container-xxl flex-grow-1 container-p-y">
               <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Soyağacı Sorgu</h5>
                      <small class="text-primary float-end">Lütfen Sorgulanacak Kişinin T.C Bilgisini Giriniz.</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">T.C</label>
                          <input type="text" class="form-control" name="tcno"  id="basic-default-fullname" placeholder="31123868338"/ required>
                        </div>
                      
                       <button id="btnAngeris" type="submit" class="btn btn-primary">Sorgula</button>
                       <br><br>
                          <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered text-nowrap w-100">

                                  <br><br>
                    <thead>
                      <tr>
                        <th>Yakınlık</th>
                        <th>Kimlik No</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Doğum Tarihi</th>
                        <th>Anne Adı</th>
                        <th>Anne Tc</th>
                        <th>Baba Adı</th>
                        <th>Baba Tc</th>
                        <th>İl</th>
                        <th>İlçe</th>
                        <th>Uyruk</th>
                        <th>Author</th>
                      </tr>
                    </thead>
                        <tbody id="angerisapi">
                  
                    </tbody>
                  </table>
                  </div>
                </div>
               </div>
             </div>
           </div>
          </div>
        </div>
       </div>
      </div>
     </div>
    </div>
</div>
<script type="text/javascript">
    
    $("#btnAngeris").click(function(){
        var tc = $("[name=tcno]").val();

        $("#angerisapi").html(
            ''
        );

        if (tc == "") {

            Swal.fire ({
                icon : "error",
                title : "Oopss...",
                text : "T.C Boş Bırakılmaz",
                footer: '<a href="https://t.me/rotatechecker">Telegram Adresimiz</a>',
                showConfirmButton: false,
                timer: 1500
            })
            
        }else{

            Swal.fire ({
            imageUrl: 'https://thumbs.gfycat.com/MetallicSmugDavidstiger-max-1mb.gif',
            imageHeight: 100,
            title : 'Sorgu Çözümü Başladı !',
            text : 'Sorgulanıyor...',
            footer: '<a href="https://t.me/rotatechecker">Telegram Adresimiz</a>',
            showConfirmButton: false,
            })

            $.ajax({

            type : 'POST',
            url : 'api/sülale/api.php',
            data : {tc},
            success: function(data) {
              var json = data;
              swal.close();

              $("#angerisapi").html(data);
              
              if (json == false) {
                Swal.fire ({
                icon : "error",
                title : "Oopss...",
                text : "Sorguladığınız T.C Numarasına Ait Bir Bilgi Bulunamadı.",
                footer: '<a href="https://t.me/rotatechecker">Telegram Adresimiz</a>',
            })
            return;
                
              }

            }

          });
        }

    });


    </script>
             
             <?php 

include("inc/main_js.php");

?>



