<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('Home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('BrowserPage')}}">Browser</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('comment')}}">comment</a>
          </li>

          {{-- admin section --}}
          <li class="nav-item dropdown">
            {{-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('admin')}}">Admin</a>       </li>      --}}
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('admin')}}">Index | admin</a></li>
                  <li><a class="dropdown-item" href="">ManagePost</a></li>
                  <li><a class="dropdown-item" href="">ManageComments</a></li>
                  <li><a class="dropdown-item" href="">ManageUsers</a></li>
                </ul>
            

            </li>
            {{-- end-admin --}}
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User Page
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('UserDetails')}}"> UserProfile</a></li>
              <li><a class="dropdown-item" href="{{route('Register')}}">Register</a></li>
              <li><a class="dropdown-item" href="{{route('Sign1')}}">Sign up</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>          
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>