<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        
        <form action="UserController" method="POST">
            
        <input type="text" name="name" placeholder="Name">
        @csrf
        <br><br>
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="text" name="phn" placeholder="phone number">
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
