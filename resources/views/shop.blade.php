<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <header class="bg-dark py-3">
        <nav>
            <ul class="text-white list-unstyled d-flex justify-content-around align-items-center">
                <li><a class="text-decoration-none text-white" href="{{ url('/')}}">Home</a></li>
                <li><a class="text-decoration-none text-white" href="{{ url('/contacts')}}">Contacts</a></li>
                <li><a class="text-decoration-none text-white" href="{{ url('/aboutus')}}">About us</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="bg-secondary">
        <h1 class="text-center py-5 text-white m-0">Shop</h1>
    </main>
    
    <footer class="bg-dark">
        <h4 class="text-center py-5 text-white m-0">Footer</h4>
    </footer>

</body>
</html>