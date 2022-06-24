<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Print Laporan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Hasil Voting</h1>
            <h2 class="text-center">{{ $voting->title }}</h2>

            <dl class="row mt-5">
                <dt class="col-sm-3">Created by</dt>
                <dd class="col-sm-9">{{ $voting->created_by }}</dd>
                
                <dt class="col-sm-3">Created at</dt>
                <dd class="col-sm-9">{{ $voting->created_at }}</dd>

                <dt class="col-sm-3">Close at</dt>
                <dd class="col-sm-9">{{ $voting->updated_at }}</dd>

                <dt class="col-sm-3">Description</dt>
                <dd class="col-sm-9">{{ $voting->voting_description }}</dd>
            </dl>
            <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="20px">No</th>
                            <th scope="col">Header</th>
                            <th scope="col">Description</th>
                            <th scope="col">Voted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($votingDetails as $votingDetail)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $votingDetail->header }}</td>
                                <td>{{ $votingDetail->voting_details_description }}</td>
                                <td>{{ $votingDetail->voted }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">Total</td>
                            <td>{{ $totalVoting }}</td>
                        </tr>
                    </tfoot>
                </table>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			window.onload = function() {
				// Choose the element that our invoice is rendered in.
				const element = document.querySelector(".container");

                var opt = {
                    margin : 1,
                    filename: '{{ $voting->title }}.pdf',
                    image: { type: 'png' },
                    html2canvas: { scale: 2 },
                    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
                };
				// Choose the element and save the PDF for our user.
				html2pdf().set(opt).from(element).save();
			}
		</script>
    </body>
</html>