<!doctype html>
<html lang="en">

<head>
  <title>PayC | Proyecto Automatización y Cetificación</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> -->


  <link rel="stylesheet" href="./css/portal.white.min.css">
  <link href="./font/css/open-iconic-bootstrap.min.css" rel="stylesheet">

  <style>
  </style>
</head>

<body>

  

  <!-- Page Content Holder -->
  
      <!-- Sidebar Holder -->
      <div id="sidebar" class="sw-sidebar">
        <form class="sw-search d-flex align-items-center">
          <input type="search" class="form-control" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off">
          <button class="btn btn-link sw-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#sw-docs-nav"
            aria-controls="sw-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30 30" width="30" height="30" focusable="false">
              <title>Menu</title>
              <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22" />
            </svg>

          </button>
        </form>


        <ul class="collapse sw-links" id="sw-docs-nav" data-children=".sw-toc-item">
          <li class="sw-toc-item">
            <a class="sw-toc-link" href="#">
              <span class="oi oi-dashboard"></span>
              <span class="text">PayC</span>
            </a>
          </li>
          <li class="sw-toc-item">
              <div class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapseArticleSubMenus" role="button" aria-expanded="false"
                aria-controls="collapseArticleSubMenus">
                <span class="oi oi-document"></span>
                <span class="text">Repositorio</span>

                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <a asp-area="Portal" asp-controller="Articles" asp-action="Create" class="btn btn-light">
                            <span class="oi oi-plus"></span>
                    </a>
                    <a asp-area="Portal" asp-controller="Articles" asp-action="Index" class="btn btn-light">
                            <span class="oi oi-list"></span>
                    </a>
                    <a asp-area="Portal" asp-controller="Articles" asp-action="Draft" class="btn btn-light">
                            <span class="oi oi-clipboard"></span>
                    </a>
                </div>
              </div>

            <ul id="collapseArticleSubMenus" class="collapse list-unstyled" role="tabpanel">
              <li class="active sw-sidenav-active">
                <a href="objetos.php">
                  <span class="oi oi-plus"></span>
                  <span class="text">Objetos</span>
                </a>
              </li>
              <!--<li>
                <a href="#">
                  <span class="oi oi-list"></span>
                  <span class="text">List Article</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-clipboard"></span>
                  <span class="text">Draft</span>
                </a>
              </li>

              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-copywriting"></span>
                  <span class="text">Article...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-copywriting"></span>
                  <span class="text">Article...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-copywriting"></span>
                  <span class="text">Article...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-copywriting"></span>
                  <span class="text">Article...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>-->
            </ul>
          </li>
          <li class="sw-toc-item">
            <a class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapsePageSubMenus" role="button" aria-expanded="false"
              aria-controls="collapsePageSubMenus">
              <span class="oi oi-browser"></span>
              <span class="text">Modelado</span>
              <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">
                  <span class="oi oi-plus"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-list"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-clipboard"></span>
                </button>
              </div>
            </a>
            <ul id="collapsePageSubMenus" class="collapse list-unstyled" role="tabpanel">
              <li class="active sw-sidenav-active">
                <a href="funciones.php">
                  <span class="oi oi-plus"></span>
                  <span class="text">Funciones</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-list"></span>
                  <span class="text">List Article</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-pencil"></span>
                  <span class="text">Draft</span>
                </a>
              </li>

              <li class="hide-on-sb-inactive">
                <div class="sw-toc-sub-link">
                  <span class="oi oi-fork"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <a class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </a>
                    <a class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </a>
                    <a class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="hide-on-sb-inactive">
                <a class="sw-toc-sub-link" href="#">
                  <span class="oi oi-fork"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-fork"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="sw-toc-item">
            <a class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapseModuleSubMenus" aria-expanded="false"
              aria-controls="collapseModuleSubMenus">
              <span class="oi oi-puzzle-piece"></span>
              <span class="text">Modules</span>
              <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">
                  <span class="oi oi-plus"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-list"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-clipboard"></span>
                </button>
              </div>
            </a>
            <ul id="collapseModuleSubMenus" class="collapse list-unstyled">
              <li class="active sw-sidenav-active">
                <a href="#">
                  <span class="oi oi-plus"></span>
                  <span class="text">Create Article</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-list"></span>
                  <span class="text">List Article</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-pencil"></span>
                  <span class="text">Draft</span>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-puzzle-piece"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-puzzle-piece"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-puzzle-piece"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="sw-toc-item">
            <a class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapseAppearanceSubMenus" aria-expanded="false"
              aria-controls="collapseAppearanceSubMenus">
              <span class="oi oi-brush"></span>
              <span class="text">Themes</span>
              <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">
                  <span class="oi oi-plus"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-list"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-clipboard"></span>
                </button>
              </div>
            </a>
            <ul id="collapseAppearanceSubMenus" class="collapse list-unstyled">
              <li class="active sw-sidenav-active">
                <a href="#">
                  <span class="oi oi-plus"></span>
                  <span class="text">Create Theme</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-list"></span>
                  <span class="text">List Theme</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-pencil"></span>
                  <span class="text">Draft</span>
                </a>
              </li>

              <li class="hide-on-sb-inactive">
                <a href="#">
                  <span class="oi oi-layers"></span>
                  <span class="text">About us...</span>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-plus"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-list"></span>
                    </button>
                    <button type="button" class="btn btn-link">
                      <span class="oi oi-pencil"></span>
                    </button>
                  </div>
                </a>
              </li>
            </ul>
          </li>
          <li class="sw-toc-item">
            <a class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapseFileSubMenus" aria-expanded="false"
              aria-controls="collapseFileSubMenus">
              <span class="oi oi-image"></span>
              <span class="text">Medias</span>
              <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light">
                  <span class="oi oi-plus"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-list"></span>
                </button>
                <button type="button" class="btn btn-light">
                  <span class="oi oi-clipboard"></span>
                </button>
              </div>
            </a>
            <ul id="collapseFileSubMenus" class="collapse list-unstyled">
              <li class="active sw-sidenav-active">
                <a href="#">
                  <span class="oi oi-image"></span>
                  <span class="text">Medias</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-file"></span>
                  <span class="text">Files</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sw-toc-item">
            <a class="sw-toc-link" data-toggle="collapse" data-parent="#sw-docs-nav" href="#collapseSettingSubMenus" aria-expanded="false"
              aria-controls="collapseSettingSubMenus">
              <span class="oi oi-wrench"></span>
              <span class="text">Settings</span>
            </a>
            <ul id="collapseSettingSubMenus" class="collapse list-unstyled">
              <li class="active sw-sidenav-active">
                <a href="#">
                  <span class="oi oi-list"></span>
                  <span class="text">Configurations</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="oi oi-globe"></span>
                  <span class="text">Cultures</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="sw-toc-item"></li>
          <li class="sw-toc-item"></li>
        </ul>
      </div>

      
    



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./js/portal.white.js"></script>
</body>

</html>