<x-student-layouts>
    @slot('title', "Dashboard")

    @slot('profile')
        Dimas Wing Bagas Bimantara
    @endslot

    @slot('content')
        <div class="content-wrapper">
            <section>
                <div class="list-voting">
                    <div class="card">
                        <h2>Pemilihan Ketua Umum UKM-FT</h2>
                        <div class="description-list-voting">
                            <div class="date">
                                <span>Start</span>
                                <span>15-04-2002</span>
                            </div>
                        </div>
                        <div class="footer-voting">
                            <button class="btn-voting">Voting</button>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Pemilihan Ketua Umum UKM-FT</h2>
                        <div class="description-list-voting">
                            <div class="date">
                                <span>Start</span>
                                <span>15-04-2002</span>
                            </div>
                        </div>
                        <div class="footer-voting">
                            <button class="btn-voting">Voting</button>
                        </div>
                    </div>
                    <div class="card">
                        <h2>Pemilihan Ketua Umum UKM-FT</h2>
                        <div class="description-list-voting">
                            <div class="date">
                                <span>Start</span>
                                <span>15-04-2002</span>
                            </div>
                        </div>
                        <div class="footer-voting">
                            <button class="btn-voting">Voting</button>
                        </div>
                    </div>
                </div>
            </section>

            <div class="show-detail-voting">
                <h1>Pemilihan Ketua UKM-FT</h1>
                <p class="total-vote">&bull; 12 Vote</p>
                <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni harum quod quaerat ipsa fugiat ex et dolorem deserunt iure illo.</p>
                <h2>Candidates</h2>
                <div class="candidates">
                    <div class="candidate">
                        <h4>Dimas</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, dolore?</p>
                        <form action="" method="post" class="btn-wrapper">
                            <button type="submit" class="btn-vote">Vote</button>
                        </form>
                    </div>
                    <div class="candidate">
                        <h4>Wing</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, dolore?</p>
                        <form action="" method="post" class="btn-wrapper">
                            <button type="submit" class="btn-vote">Vote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endslot
</x-student-layouts>