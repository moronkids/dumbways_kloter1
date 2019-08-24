<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="base" content="{{env('APP_URL')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>FORM</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        
        <!-- Styles -->
        <style>
        /* form { 
            margin: 0 auto; 
            width:250px;
        } */
        input {
            margin-bottom: 50px;
        }
        select {
            margin-bottom: 50px;
        }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="jumbotron">
            <form action="login.php" method="POST">
        <fieldset>
        <h6>Nama Lengkap</h6>
        <td>
        <input type="text" name="username"  size="70"/>
        </td>
        <h6>Tempat Lahir</h6>
        <td>
        <input type="text" name="username" placeholder="mm,dd,yyyy"  />
        </td>
        <h6>Tanggal Lahir</h6>
        <td>
        <input type="text" name="username"  />
        </td>
        <h6>No HP</h6>
        <td>
        <input type="text" name="username"  />
        </td>
        <h6>Alamat</h6>
        <td>
        <input type="text" style="padding-bottom:20px;" size="50" name="username"  />
        </td>
        <h6>Pendidikan Terakhir</h6>
        <td>
        <div class="col-xs-3">
        <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
        </div>
        </td>
        <h6>Agama</h6>
        <td>
        <input type="text" name="username"  />
        </td>
        <h6>Hobi</h6>
        <td>
        <input type="text" name="username"  />
        </td>
        <!-- <h6>Login</h6>
        <p>
            <label>Username:</label>
            <input type="text" name="username"  />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password..." />
        </p>
        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>
        <p>
            <input type="submit" name="submit" value="Login" />
        </p> -->
        </fieldset>
    </form>
            </div>
        </div>
    </body>
</html>
