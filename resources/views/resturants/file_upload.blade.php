<div class="panel-body">
    <form id="imgform" method="post" action="{{ route('image.upload') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3 right"><h4>Select Image</h4></div>
            <div class="col-md-6">
                <input type="file" name="file" id="file" />
            </div>
            <div class="col-md-3">
                <input type="submit" name="upload" value="Upload" class="btn btn-success" />
            </div>
        </div>
    </form>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">0%</div>
    </div>
    <div id="success">
    </div>
</div>