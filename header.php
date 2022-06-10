<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER</title>
    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
       header{
           background-color:  rgb(0, 153, 153);
           margin-top: 10vh;
          
       }
       body{
           background-color: rgb(240, 245, 245);
       }
       .crud{
           color: white;
       }
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }
        nav {
            height: 70px;
            background: black;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1rem;
            width: 100%;
        }
        nav ul li {
            margin: 0 5px;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 9px;
            padding: 8px 10px;
            transition: all .5s;
        }
        nav ul li a:hover,
        nav ul li a.active {
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-12">
                    <h1 class="p-3 crud">Crud-Application</h1>
                </div>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="add.php">ADD</a></li>
                <li><a href="update.php">UPDATE</a></li>
                <li><a href="delete.php">DELETE</a></li>
            </ul>
    </nav>
    </div>
</body>
</html>