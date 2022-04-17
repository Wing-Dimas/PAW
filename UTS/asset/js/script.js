$(function(){
    // ADMIN
    $(".btn-tambah-admin").on("click",function(){
        $("#form-modal-admin .modal-title").html("Tambah Data Admin");
        $("#form-modal-admin .modal button[type='submit']").html("Tambah");
        $("#form-modal-admin .modal-body form").attr("action","http://localhost/PAW/UTS/fungsi/model/admin/tambah.php");
        
    });
    
    $(".tampilModalEditAdmin").on("click", function(){
        $("#form-modal-admin .modal-title").html("Edit Data Admin");
        $("form-modal-admin button[type='submit']").html("Edit");
        
        const id = $(this).data("id");
        $(".modal-body form").attr("action","http://localhost/PAW/UTS/fungsi/model/admin/edit.php");

        $.ajax({
            url : "http://localhost/PAW/UTS/fungsi/model/admin/getSingle.php",
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $("#id_admin").val(data.id_admin);
                $("#username").val(data.username);
                $("#password").val(data.password);
                $("#jabatan").val(data.jabatan);
            }
        })
    });

    // MENU
    $(".btn-tambah-menu").on("click",function(){
        $("#form-modal-menu .modal-title").html("Tambah Data Menu");
        $("#form-modal-menu button[type='submit']").html("Tambah");
        $("#form-modal-menu .modal-body form").attr("action","http://localhost/PAW/UTS/fungsi/model/menu/tambah.php");
        
    });
    
    $(".tampilModalEditMenu").on("click", function(){
        $("#form-modal-menu .modal-title").html("Edit Data Menu");
        $("#form-modal-menu button[type='submit']").html("Edit");
        
        const id = $(this).data("id");
        $("#form-modal-menu .modal-body form").attr("action","http://localhost/PAW/UTS/fungsi/model/menu/edit.php");

        $.ajax({
            url : "http://localhost/PAW/UTS/fungsi/model/menu/getSingle.php",
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $("#kode_menu").val(data.Kode_menu);
                $("#nama").val(data.nama_menu);
                $("#kategory").val(data.kategory);
                $("#stok").val(data.stok_menu);
                $("#harga").val(data.harga_menu);
                $("#deskripsi").val(data.deskripsi);
                $("#gambar").val(data.gambar);
            }
        })
    });
})





$(".btn-hapus").on("click", function(e){
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
        title: "Apakah kamu yakin?",
        text: "Kamu tidak bisa mengembalikan data yang di hapus",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus",
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      });
})
