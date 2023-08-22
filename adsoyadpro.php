<?php 
include("inc/sidebar.php");
include("server/vipkontrol.php");

?>            <div class="main-content">
                <div class="page-content">
                  <div class="container-fluid">

            <div class="container-xxl flex-grow-1 container-p-y">
               <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Ad Soyad Premium</h5>
                      <small class="text-primary float-end">Lütfen Sorgulanacak Kişinin Ad Soyad Ve İl Bilgisini Giriniz.</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Ad</label>
                          <input type="text" class="form-control" name="ad"  id="basic-default-fullname" placeholder="Ahmet">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Soyad</label>
                          <input type="text" class="form-control" name="soyad"  id="basic-default-fullname" placeholder="Türkoğlu">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">İl</label>
                          <input type="text" class="form-control" name="il"  id="basic-default-fullname" placeholder="İstanbul">
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Doğum Tarihi</label>
                          <input type="text" class="form-control" name="dtarih"  id="basic-default-fullname" placeholder="31.10.2003">
                        </div>
                      
                       <button id="btnAngeris" type="submit" class="btn btn-primary">Sorgula</button>
                       <br><br>
                          <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered text-nowrap w-100">

                                  <br><br>
                    <thead>
                      <tr>
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
        var name = $("[name=ad]").val();
        var surname = $("[name=soyad]").val();
        var nufus = $("[name=il]").val();
        var dogum = $("[name=dtarih]").val();
        $("#angerisapi").html(
            ''
        );

        var rol = <?=$angeris['role']?>;

        if (rol != "1" && rol != "2") {

        Swal.fire ({
       icon : "error",
       title : "Oopss...",
       text : "Bu Çözümü Kullanabilmek İçin Premium Üye Paketini Satın Almanız Gerekir.",
       footer: '<a href="https://t.me/rotatechecker>Telegram Adresimiz</a>',
       showConfirmButton: false,
        timer: 1500
 })
          
        }else{

          Swal.fire ({
            imageUrl: 'https://thumbs.gfycat.com/MetallicSmugDavidstiger-max-1mb.gif',
            imageHeight: 100,
            title : 'Sorgu Çözümü Başladı !',
            text : 'Sorgulanıyor...',
            footer: '<a href="https://t.me/rotatechecker>Telegram Adresimiz</a>',
            showConfirmButton: false,
            })

            $.ajax({

            type : 'POST',
            url : 'api/adsoyad/apiv2.php',
            data : {name,surname,nufus,dogum},

            success : function(data){
                swal.close();
             var json = data;

             $("#angerisapi").html(data);

             if (json == false) {

              swal.close();
                Swal.fire ({
                icon : "error",
                title : "Oopss...",
                text : "Sorguladığınız Kişiye  Ait Bir Bilgi Bulunamadı.",
                footer: '<a href="https://t.me/rotatechecker>Telegram Adresimiz</a>',
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