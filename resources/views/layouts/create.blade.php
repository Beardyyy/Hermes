<div class="pg-faded p-4 my-4">
    <h1>Create a post</h1>


    <form class="form-horizontal" method="POST" action="/blog">
       {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Titile:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="subTitle">Sub-titile:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Enter sub-title" name="subTitle" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="body" name="body">Body:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="body" placeholder="Enter text" name="body">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="img" name="img">Image:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="body" placeholder="Enter image url" name="img">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </div>
        @include('layouts.errors')
        <div class="form-group">
            <a href="http://localhost:8000/blog" class="btn btn-default btn-lg">back</a>
        </div>
    </form>


</div>