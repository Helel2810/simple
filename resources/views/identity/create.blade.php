<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<form method="POST" action="/identities">
    {{ csrf_field() }}
    first name:
    <input type="text" name="first" >
    <br>
    last name
    <input type="text" name="last" >
    <br>
    email
    <input type="text" name="email" >
    <br>
    address
    <input type="text" name="address">
    <br>
    phone
    <input type="text" name="phone" >
    <br>
    <button type="submit">Submit</button>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif