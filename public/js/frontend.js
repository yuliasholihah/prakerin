$(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var alamat_artikel = '/api/artikel'
    var alamat_kategori = '/api/kategori'

  // kategori
  // Get Data Siswa
  $.ajax({
    url: alamat_artikel,
    method: "GET",
    dataType: "json",
    success: function (berhasil) {
      // console.log(berhasil)
      $.each(berhasil.data, function (key, value) {


        $("#isi-latest-post").append(
          `
          <div class="single-latest-post d-flex">
          <div class="post-thumb">
              <img src="../assets/img/artikel/${value.foto}" alt="">
          </div>
          <div class="post-content">
              <a href="#" class="post-title">
                  <h6>${value.judul}</h6>
              </a>
              <a href="#" class="post-author"><span>by</span> ${value.user.name}</a>
          </div>
      </div>
                    `
        )
        
      })
    }
  })


  $.ajax({
    url: alamat_kategori,
    method: "GET",
    dataType: "json",
    success: function (berhasil) {
      // console.log(berhasil)
      $.each(berhasil.data, function (key, value) {


        $("#kategori").append(
            `
            <li><a href="#">${value.nama_kategori}</a></li>
            `
                )
        
      })
    }
  })
  
  $.ajax({
    url: alamat_artikel,
    method: "GET",
    dataType: "json",
    success: function (berhasil) {
      // console.log(berhasil)
      $.each(berhasil.data, function (key, value) {


        $("#post-area").append(
            `
            <div class="featured-post-area mb-50">
                                    <!-- Thumbnail -->
                                    <div class="post-thumbnail mb-30">
                                        <a href="#"><img src="../assets/img/artikel/${value.foto}" alt=""></a>
                                    </div>
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p class="post-date">MAY 7, 2018 / lifestyle</p>
                                        <a href="#" class="post-title">
                                            <h2>${value.judul}</h2>
                                        </a>
                                        </div>
                                    <!-- Post Meta -->
                                    <div class="post-meta d-flex align-items-center justify-content-between">
                                        <!-- Author Comments -->
                                        <div class="author-comments">
                                            <a href="#"><span>by</span> ${value.user.name}</a>
                                            
                                        </div>
                                    </div>
                                </div>
            `
                )
        
      })
    }
  })
  
})

