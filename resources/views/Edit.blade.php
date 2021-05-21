<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        
        <form action="UserController" method="POST">
            
        <input type="text" name="name" value="{{$member->name}}">
        @csrf
        <br><br>
        <input type="text" name="email" value="{{$member->email}}">
        <br><br>
        <input type="text" name="phn" value="{{$member->phn}}">
        <br><br>
        <button type="submit">Submit</button>
        <br><br>
        <p>Marital Status</p>
        <input type="radio" id="Married" name="status" value="1">
        <label for="1">Married</label><br>
        <input type="radio" id="Married" name="status" value="0">
        <label for="0">Unmarried</label><br>
        </form>
    </body>
    <a href="/">Dashboard</a>
</html>
