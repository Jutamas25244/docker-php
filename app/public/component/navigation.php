<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand" href="/docker-php/app/public/index.php">
      <img id="navbar-iconDog" src="https://scontent.fbkk22-4.fna.fbcdn.net/v/t1.15752-9/338694777_738967371260564_1531442657941610263_n.png?_nc_cat=111&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHrMX8AdkY72wM9SkFyuLc_FuI4OqUy_rcW4jg6pTL-t_-ZxP2mytuLo0KFNyswEpj0nwx67b1y99YtafbBYZy_&_nc_ohc=rTOe0xZunYwAX9vEDUW&_nc_ht=scontent.fbkk22-4.fna&oh=03_AdSS_LoFOfBUeasgulSVquFJ7rq_m-nZdS0qUw0w4BGJrg&oe=645A127F">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    </button>

    <?php
      $path = $_SERVER['REQUEST_URI'];
      $active = str_replace('/','', $path);
    ?>

    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
      <div>
        <ul class="navbar-nav">
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/index.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
                href="/docker-php/app/public/index.php">HOME
            </a>
          </li>
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/view/hotel.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
              href="/docker-php/app/public/view/hotel.php">HOTEL
            </a>
          </li>
          </li>
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/view/hospital.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
              href="/docker-php/app/public/view/hospital.php">HOSPITAL
            </a>
          </li>
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/view/restaurant.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
              href="/docker-php/app/public/view/restaurant.php">RESTAURANT
            </a>
          </li>
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/view/store.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
              href="/docker-php/app/public/view/store.php">STORE
            </a>
          </li>
          <li id="nav-item" class="nav-item">
            <a
              <?php if ($_SERVER['SCRIPT_NAME'] == "/docker-php/app/public/view/renter.php") { ?>
                class="nav-link active"
                style="color: #ffcd19;"
              <?php   } else {  ?>
                class="nav-link"
              <?php } ?>
              href="/docker-php/app/public/view/renter.php">RENTER
            </a>
          </li>
        </ul>
      </div>


      <div>
        <a type="button" class="btn btn-outline-warning" href="/docker-php/app/public/view/signup.php">Sign-up</a>
        <a id="navbar-btn-login" type="button" class="btn btn-outline-light" href="/docker-php/app/public/view/login.php">Log-In</a>
      </div>
      </ul>
    </div>
</nav>