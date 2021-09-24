<header class="ud-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg">
          <img src='' alt='logo' />
         
          <div class="navbar-collapse">

          </div>
          <label class="dropdown">
            <span style="color:white">
              {{auth()->user()->name}}
            </span>
            <input type="checkbox" class="dd-input" id="test">

            <ul class="dd-menu">
              <li>Profil</li>
              <li><a href="{{ route('mytips') }}">My tips </a></li>
              <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>

                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  <span>Logout</span>
                </a>

              </li>


            </ul>

          </label>
        </nav>
      </div>
    </div>
  </div>
</header>

<section class="ud-page-banner">
     

    </section>