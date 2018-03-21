<div class="container">

    <div class="row">
        <div class="box">

            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Company
                    <strong>blog</strong>
                </h2>
                <hr>
            </div>

                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="{{ $pos->img }}" alt="">
                    <h2>{{ $pos->title }}
                        <br>
                        <small>{{ $pos->created_at->toDateString() }}</small>
                    </h2>
                    <p>{{ $pos->body }}</p>
                    <a href="http://localhost:8000/blog" class="btn btn-default btn-lg">back</a>
                    <hr>
                </div>


        </div>
    </div>

</div>