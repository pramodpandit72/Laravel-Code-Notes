<form method="POST" action="/dataretrival">
    @csrf

    Name:
    <input type="text" name="name"> <br>


    Email:
    <input type="text" name="email"> <br>

    <button type="submit">Submit</button>

</form>