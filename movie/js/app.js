 function searchMovie() {
    $('#movie-list').html('');
    
    $.ajax({
        //  PAKE API KEY OMDB
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            //  OMDB API KEY DI GMAIL SEOMOONAMOON
            'apikey': 'ec829d71',
            // ADA S ADA T KALO S CARI FILM DENGAN INPUT NYA SEARCH INPUT , KALO PAKE T TITLE
            's':  $('#search-input').val()
        },
        success: function (hasil) {
           if(hasil.Response == "True") {

            let movies = hasil.Search;
             $.each(movies, function (i, data) {
                $('#movie-list').append(`
                <div class="col-md-4">
                <div class="card mb-3">
                <img src="`+ data.Poster +`" class="card-img-top" alt="Error Img">
                <div class="card-body">
                    <h5 class="card-title">`+ data.Title +`</h5>
                    <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                    <a href="#" class="see-detail"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">See Detail</a>
                </div>
                </div>
        </div>
                `);
             });

             $('#search-input').val();

           } else {
            //   KETIKA SALAH MEMASUKKAN NAMA FILM KELUARKAN INI
            $('#movie-list').html(`
            <div class="col">
            <h1 class="text-center">`+ hasil.Error +`</h1>
            </div>
            `)
           }
        }
    });
}

    // KETIKA USER CLIK BUTTON
$('#search-button').on('click', function() {
    searchMovie();
});
//   KETIKA USER PENCER TOMBOL ENTER 
$('#search-input').on('keyup', function(e) {
      // KODE ENTER YAITU 13 ( KALO GATAU CARI DI KEYCODE.INFO)
     if (e.keyCode === 13) {
        searchMovie();
     }
});

    // EVENT BINDING , SEE DETAIL MUNCUL SAAT MOVIE DI SEARCH JADI JIKA MOVIE BELUM DI SEARCH TIDAK AKAN MUNCUL
    //  CARANYA TEMPELKAN EVENT KE PARENT NYA TERLEBIH DAHULU LALU BARU MASUKKAN KE CHILD NYA
    //  KETIK KLIK MOVIE LIST DI DALAM CLASS NYA ADA SEE DETAIL BARU DIBERIKAN EVENT
$('#movie-list').on('click', '.see-detail', function() {
    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey': 'ec829d71',
            'i' : $(this).data('id'),
        }, 
        success: function(detMov){
            if(detMov.Response === "True"){
                $('.modal-body').html(`

                <div class="container-fluid">
                <div class="row">

                <div class="col-md-4">
                <img src="`+ detMov.Poster +`" class="img-fluid">
                </div>

                <div class="col-md-8">
                            <ul class="list-group">
            <li class="list-group-item"><h3>`+detMov.Title+`</h3></li>
            <li class="list-group-item">Released : `+detMov.Released+`</li>
            <li class="list-group-item">Genre : `+detMov.Genre+`</li>
            <li class="list-group-item">Director : `+detMov.Director+`</li>
            <li class="list-group-item">Actors : `+detMov.Actors+`</li>
          
            </ul>
                </div>

                </div>
                </div>
                `)
            }
        }
    })
    console.log($(this).data('id'));
})