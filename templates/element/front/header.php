<header>
      <nav class="navbar navbar-expand-lg bg-primary">
          <div class="container-fluid">
            <?= $this->Html->link("Mon Manga", ["controller" => "pages" , "action"=>"index"], ["class" => "navbar-brand" , "escape" => false]) ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <?= $this->Html->link("Le Top", ["controller" => "pages" , "action"=>"index"], ["class" => "nav-link active" , "escape" => false]) ?>
                </li>
                <li class="nav-item">
                  <?= $this->Html->link("La Liste", ["controller" => "mangaList" , "action"=>"index"], ["class" => "nav-link" , "escape" => false]) ?>
                </li>
                <li class="nav-item dropdown">
                  <?= $this->Html->link("Genre", ["controller" => "mangaList" , "action"=>"index"], ["class" => "nav-link dropdown-toggle",
                                        "role"=> "button" , "data-bs-toggle" => "dropdown", "aria-expanded" => "false" , "escape" => false]) ?>
                  <ul class="dropdown-menu">
                    <!-- add php get list gender -->
                    <li> <?= $this->Html->link("Baston", ["controller" => "pages" , "action"=>"index"], ["class" => "dropdown-item" , "escape" => false]) ?> </li>
                    <li> <?= $this->Html->link("Romance", ["controller" => "pages" , "action"=>"index"], ["class" => "dropdown-item" , "escape" => false]) ?></li>
                    <li> <?= $this->Html->link("Action", ["controller" => "pages" , "action"=>"index"], ["class" => "dropdown-item" , "escape" => false]) ?></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
              <form class="d-flex" role="search">
                <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark me-4" type="submit">Search</button>
              </form>
              <form class="d-flex">
                <button class="btn btn-dark me-5" type="button">Se connecter</button>
              </form>
            </div>
          </div>
      </nav>
</header>