<div>
    <h1>Upload file</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="myfile">
        <button type="submit">Upload</button>
    </form>
</div>