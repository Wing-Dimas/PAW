// menu toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.addEventListener("click", ()=>{
    navigation.classList.toggle("active");
    main.classList.toggle("active");
})


// add hovered class in selected item
let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach(item => {
        item.classList.remove("hovered");
        this.classList.add("hovered");
    });
}

list.forEach((item)=>{
    item.addEventListener("mouseover",activeLink);
})


$(function(){
    $(".btn-tambah").on("click",function(){
        $("#formModalLabel").html("Tambah Data Mahasiswa");
        $(".modal button[type='submit']").html("Tambah");
        $(".modal-body form").attr("action","http://localhost/PAW/Tugas%203/fungsi/tambah.php");
        
    });
    
    $(".tampilModalEdit").on("click", function(){
        $("#formModalLabel").html("Edit Data Mahasiswa");
        $(".modal button[type='submit']").html("Edit");
        
        const id = $(this).data("id");
        $(".modal-body form").attr("action","http://localhost/PAW/Tugas%203/fungsi/edit/editMahasiswa.php");

        $.ajax({
            url : "http://localhost/PAW/Tugas%203/fungsi/edit/getDataEdit.php",
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $("#id").val(data.id);
                $("#nama").val(data.nama);
                $("#nim").val(data.nim);
                $("#fakultas").val(data.fakultas);
                $("#jurusan").val(data.jurusan);
                $("#semester").val(data.semester);
                $("#ipk").val(data.ipk);
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
