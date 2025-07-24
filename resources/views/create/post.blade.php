<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    
<div class="container mt-5">
<div class="card shadow">
            <div class="card-header bg-light text-dark">
                <h4>Create a New Post</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('formdata') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input id="title" type="text" name="title" class="form-control" placeholder="Enter post title">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Content</label>
                        <textarea id="body" class="form-control" name="content" rows="5" placeholder="Write your post..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save Post</button>
                </form>
            </div>
        </div>




</div>


</body>
</html>