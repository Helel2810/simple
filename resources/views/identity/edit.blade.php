<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<form action="{{'/identities/' . $value->id}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="_method" value="PUT" />

    first name:
    <input type="text" name="first" value="{{$value->first}}">
    <br>
    last name
    <input type="text" name="last" value="{{$value->last}}">
    <br>
    email
    <input type="text" name="email" value="{{$value->email}}">
    <br>
    adress
    <input type="text" name="address" value="{{$value->address}}">
    <br>
    phone
    <input type="text" name="phone" value="{{$value->phone}}">
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