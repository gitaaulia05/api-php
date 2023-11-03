 <!-- CURL -->
 <?php
    // INISIALISASI MAPI MENGGUNAKAN CURL
    $curl = curl_init();
    // KASIH MASUKKAN API YANG MAU DI PAKAI
    curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet&id=UC6Bjycj6lOXbDLCHpP7iXug&key=AIzaSyA1nE68Si5dmziWexiQ9hF0nJz75hY0ipA');

    // TRANSFER MENJADI JSON
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);

    // TUTUP CURL
    curl_close($curl);

    $result = json_decode($result, true);
    var_dump($result);

    $ytPic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

    ?>

 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>PORTOFOLIO</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">
 </head>

 <body>

     <section id="sosmed">

         <div class="container">

             <div class="row pt-4 mb-4">
                 <div class="col text-center">
                     <h2>Social Media</h2>
                 </div>
             </div>


             <div class="row content" style="margin-bottom: 70%;">

                 <div class="col-md-4 ig">

                     <div class="row">
                         <div class="col-md-4"><img src="user.png" width="100" class="rounded-circle img-thumbnail"></div>
                         <div class="col-md-8">gita's Instagram
                             <div class="row">
                                 <div class="col-md-12 follow">900 FOll</div>
                             </div>
                         </div>
                     </div>

                     <div class="ig mt-5">
                         <iframe src="https://www.youtube.com/embed/cVKUS9DoLD0" class="object-fit-contain"></iframe>
                     </div>

                 </div>


                 <div class="col-md-5 yt">

                     <div class="row">
                         <div class="col-md-4"><img src="<?= $ytPic; ?>" width="100" class="rounded-circle img-thumbnail"></div>
                         <div class="col-md-8">gita's Instagram
                             <div class="row">
                                 <div class="col-md-12 follow">900 FOll</div>
                             </div>
                         </div>
                     </div>

                     <div class="row mt-3 pb-3">
                         <div class="col">
                             <div class="ig-thumb">
                                 <img src="americano.jpg">
                             </div>
                         </div>
                     </div>

                 </div>
             </div>


















             <div class="row">

                 <div class="col-md-5">

                     <div class="row">
                         <div class="col-md-4">
                             <div class="row">
                                 <div class="col-md-4">
                                     <img src="user.png" width="100" class="rounded-circle img-thumbnail" alt="hi">
                                 </div>
                                 <div class="col-md-8">
                                     <h5>Gita's Instagram</h5>
                                     <p>120</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8">
                             <h5>Gita's Instagram</h5>
                             <p>120</p>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col mt-5">
                             <iframe src="https://www.youtube.com/embed/cVKUS9DoLD0" class="object-fit-contain"></iframe>
                         </div>
                     </div>

                 </div>

                 <div class="col-md-8">

                     <div class="row">
                         <div class="col-md-4">
                             <img src="user.png" width="100" class="rounded-circle img-thumbnail" alt="hi">
                         </div>
                         <div class="col-md-8">
                             <h5>Gita's Instagram</h5>
                             <p>120</p>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col">
                             <div class="ig-thubmnail">
                                 <img src="americano.jpg">
                             </div>
                         </div>
                     </div>

                 </div>

             </div>

         </div>

     </section>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>

 </html>