
$(document).ready( function () {
    // data table
    $('#table-admin').DataTable();
    $('#table-categorie').DataTable();
    $('#table-voting').DataTable();
    $('#table-voting-detail').DataTable();
    $('#table-history').DataTable();
    

    // Confirm all delete
    $('.table').on("click",".show-confirm" , function(e){
      const form = $(this).closest("form");
      e.preventDefault();
      Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda tidak akan bisa mengembalikan data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      })
    });

    // OPEN VOTING
    $('.show-confirm-open-voting').on("click", function(e){
      e.preventDefault();
      Swal.fire({
        title: 'Apakah anda yakin ingin membuka voting ini?',
        text: "Anda tidak akan bisa mengubah atau mengedit data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, open it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = $(this).attr("href");
        }
      })
    });
    // CLOSE VOTING
    $('.show-confirm-close-voting').on("click", function(e){
      e.preventDefault();
      Swal.fire({
        title: 'Apakah anda yakin ingin mengakhiri voting ini?',
        text: "Mahasiswa tidak akan bisa lagi melakukan voting",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, close it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = $(this).attr("href");
        }
      })
    });
    // DELETE VOTING
    $('.show-confirm-delete-voting').on("click", function(e){
      e.preventDefault();
      const form = $(this).closest("form");
      Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Anda tidak akan bisa mengembalikan data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      })
    });
    // VOTING
    $('.show-detail-voting').on("click", ".btn-vote", function(e){
      e.preventDefault();
      const form = $(this).closest("form");
      Swal.fire({
        title: 'Apakah anda yakin dengan pilihan anda?',
        text: "Pastikan pilihan anda sudah benar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Vote!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
        }
      })
    });

    // STUDENT
    $(".btn-voting").on("click", function(e){
      const show_detail = $(".show-detail-voting");
      const id = $(this).data("voting-id");

      if($(this).hasClass("active")) return;
      
      $(".btn-voting").removeClass("active");
      $(this).addClass("active");
      
      $.ajax({
        url: `http://localhost:8000/api/voting/${id}/voting_detail`,
        type: "GET",
        dataType: 'json',
        beforeSend: function() {
          show_detail.html(`<div class="lds-dual-ring"></div>`);
        }
      }).done((result)=>{
        const voting = result.data.voting;
        const votingDetails = result.data.votingDetails;
        const totalVoting = votingDetails.reduce((acc, current)=> acc+current.voted, 0);

        let el = `
          <h1>${voting.title}</h1>
          <p class="total-vote">• ${totalVoting} Voted</p>
          <p class="description">${voting.voting_description}</p>
          <h2>Candidates</h2>
          <div class="candidates"></div>
        `;
        show_detail.html(el);
        
        $.each(votingDetails ,function(i,votingDetail){
          $(".candidates").append(
            `<div class="candidate">
                <h4>${votingDetail.header}</h4>
                <p>${votingDetail.voting_details_description}</p>
                <form action="http://localhost:8000/user_vote/${voting.id}/${votingDetail.id}" method="get" class="btn-wrapper">
                    <button type="submit" class="btn-vote">Vote</button>
                </form>
              </div>`
          );
        });

      })
      .fail((request, textStatus, errorThrow) => {
        show_detail.html(`<p>An error occurred during your request: ${request.status} ${textStatus} ${errorThrow} </p>`);
      });
      

    })
});
