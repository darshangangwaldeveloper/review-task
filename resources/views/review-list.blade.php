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
<a href="{{ route('review-create') }}">submit rating</a>
</div>


<p>Avg Rating:- {{ $ratingAvg->rating_avg }}</p>
<div class="maxw">
<table class="table">
    <tr>
        <th>S.No.</th>
        <th>User Name</th>
        <th>Rating</th>
    </tr>
    @if(isset($ratings) && $ratings->count()>0)
    @foreach($ratings as $k => $rating)
        <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $rating->user_name }}</td>
            <td>{{ $rating->rating }}</td>
        </tr>
    @endforeach
    @endif
    
</table>
</div>
</div>
</body>
</html>