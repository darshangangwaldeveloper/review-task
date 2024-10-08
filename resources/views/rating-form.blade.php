

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<style>
    body{
        font-family: Sans-serif;
    }
.Main {
    text-align: center;
}
.Rating a {
    font-size: 24px;
}
.Rating {
    margin-bottom: 30px
}
.maxw {
    margin: auto;
    width: 500px;
    max-width: 500px;
    min-width: 500px;
}
</style>
<div class="Main">
    <div class="Rating">
<a href="{{ route('review-list') }}">Rating List</a>
</div>

<div class="maxw">
<form action="{{ route('review-store') }}" method="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
    <div class="row w-100">
        <div class="col-lg-2">
        <label>Star</label>    
        <input type="number"  class="form-control" name="rating" max="5" min="1" required/>
        </div>
        <div class="col-lg-4">
        <label>User Name</label>    
        <input type="text" class="form-control" name="username" required /> 
        </div>
        <div class="col-lg-4">
        <label>&nbsp;</label> 
        <input type="submit" class="form-control" value="save" /> 
</div>
</div>



</div>


</form>
</div>
</body>
</html>

