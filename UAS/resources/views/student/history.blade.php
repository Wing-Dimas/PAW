<x-student-layouts>
    @slot('title', "History")

    @slot('content')
         <h1 class="title-page">History</h1>
        
         <table id="table-history" class="display table">
            <thead>
                <tr>
                    <th width="20px">No</th>
                    <th width="300px">Title</th>
                    <th>Candidate</th>
                    <th>Voting Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user_votes as $user_vote)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user_vote->title }}</td>
                    <td>{{ $user_vote->header }}</td>
                    <td>{{ $user_vote->voting_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endslot
</x-student-layouts>