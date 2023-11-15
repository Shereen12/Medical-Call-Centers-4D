<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medical Call Centers 4D</title>
    <link href="{{url('css/styles.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  </head>
<body>
    <header>
        <nav>
          <a href="/" style="color: white; text-decoration:none;">Medical Call Centers 4D</a>
          <div class="nav-links" id="navLinks">
            <i class="material-icons" onclick="hideMenu()">close</i>

            <ul>
              @if(Auth::user())
                <li><a href="/logout">Logout</a></li>
              @else
                <li><a href="/login">Login</a></li>
              @endif
              <li><a href="/new-user">New User</a></li>
            </ul>
          </div>
          <i class="material-icons" onclick="showMenu()">dehaze</i>

        </nav>

        <section>
          <div id="greeting-button">
            <h1>Medical Call Centers 4D
            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cumque architecto veritatis dolores, quo nulla commodi distinctio corrupti quaerat eligendi optio voluptate doloremque numquam, itaque, delectus fuga. Ipsum, veniam enim!</p>
            @if(Auth::user())
              <a href="" onclick="greet('{{Auth::user()->name}}')" class="btn">Greeting</a>
            @else
              <a href="" onclick="greet('Guest')" class="btn">Greeting</a>
            @endif
          </div>
        </section>
    </header>
    <section class="content">
      @yield('content')
    </section>
    <section class="footer">
      <h4>About Us</h4>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora deserunt impedit quisquam fuga, ipsam mollitia minus illo quas? Distinctio incidunt non eum. In, quia quis explicabo inventore nisi sint cum.</p>
    </section>
    <script>
      let navLinks = document.getElementById("navLinks");
      function showMenu(){
        navLinks.style.right = "0";
      }
      function hideMenu(){
        navLinks.style.right = "-200px";
      }
      function greet(user){
        console.log(user)
        alert("Hello " + user)
      }
    </script>

    @if ($type=='create-user' || $type == 'login')
    <script src="{{url('/js/createUser.js')}}"></script>
    @endif
</body>
</html>