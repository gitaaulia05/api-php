function allData() {
    $.getJSON('data/sbux.json', function(data) {
      let product  = data.product;
       $.each(product , function(i, data){
        $('#menus').append('<div class="col-md-4"><div class="card mb-3"><img src="img/'+ data.img +'" class="card-img-top" ><div class="card-body"><h5 class="card-title">'+ data.name +'</h5><p class="card-text">'+ data.desc +' </p><p class="card-text fw-bold">RP. '+ data.price +'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>');
       });
    });
}

// allData();


$('.nav-link').on('click', function(){
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let category = $(this).html();
   $('#title').html(category);

   if(category == 'All Menu') {
    $('#menus').html('');
        allData();
        return;
   }

   $.getJSON('data/sbux.json' , function(data){
    let product = data.product;
    let content = '';
    $.each(product, function(i, data) {
        if(data.category == category.toLowerCase()){
            content +='<div class="col-md-4"><div class="card mb-3"><img src="img/'+ data.img +'" class="card-img-top" ><div class="card-body"><h5 class="card-title">'+ data.name +'</h5><p class="card-text">'+ data.desc +' </p><p class="card-text fw-bold">RP. '+ data.price +'</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
        }
    });
    $('#menus').html(content);
   });

});