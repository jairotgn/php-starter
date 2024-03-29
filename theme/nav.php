
<nav class="navbar navbar-expand-lg text-white">
  <div class="container">
    <a class="navbar-brand text-white" href="./">A php starter kit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <?php 
        foreach (LANG as $url => $data) {
          $active = ($url == Router::$currentPage)? 'active' : '';
          echo "<li class='nav-item'>
            <a class='nav-link $active' href='/$url'>{$data['title']}</a>
          </li>";
        }?>
        <?php if (isset($_SESSION['login'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="/admin">Administrator</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>