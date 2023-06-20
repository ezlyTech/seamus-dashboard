<div class="main-content">
    <div class="container-fluid p-4 col-md-6">
        <form action="{{ route('importfile') }}" method="POST" class="mb-4" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="csv-file">CSV file to import</label>
                <input type="file" id="csv-file" class="form-control" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Import</button>
        </form>
    </div>
</div>
