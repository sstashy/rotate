<?php 
include("inc/sidebar.php");



?>
            <div class="main-content">
                <div class="page-content">
                  <div class="container-fluid">

            <div class="container-xxl flex-grow-1 container-p-y">
               <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">GSM-TC</h5>
                      <small class="text-primary float-end">Lütfen Sorgulanacak Kişinin G.S.M Bilgisini Giriniz.</small>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">G.S.M</label>
                          <input type="text" class="form-control" name="tcno"  id="basic-default-fullname" placeholder="00000000000"/ required>
                        </div>
                      
                       <button id="btnAngeris" type="submit" class="btn btn-primary">Sorgula</button>
                  
                            
                       <br><br>
                          <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered text-nowrap w-100">

                                  <br><br>
                    <thead>
                      <tr>
                        <th>GSM</th>
                        <th>T.C</th>
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
                text : "G.S.M Boş Bırakılmaz",
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
            url : 'api/gsm/apiv2.php',
            data : {tc},

            success : function(data){
                swal.close();
             var json = data;
             
           
             $("#angerisapi").html(data);

             if (json == false) {

              Swal.fire ({
                icon : "error",
                title : "Oopss...",
                text : "Sorguladığınız G.S.M Numarasına Ait Bir Bilgi Bulunamadı.",
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