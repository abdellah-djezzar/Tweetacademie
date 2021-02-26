<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php?action=home">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a  class="nav-link" href="index.php?action=home">Home</a>
      </li>
      <li class="nav-item">
      <a  class="nav-link" href="index.php?action=profil">Mon profil</a>
      </li>
      <li class="nav-item">
      <a  class="nav-link" href="index.php?action=searchBar">Chercher un membre</a>
      </li>
      <li class="nav-item">
      <a  class="nav-link" href="index.php?action=HomeMessage">Messagerie</a>
      </li>
      <div class="switch-buttons">
      <button class="btn btn-outline-secondary switch-buttons__light button" data-stylesheet="public/style/light.css" type="button">Light mode</button>
       <button class="btn btn-outline-secondary switch-buttons__dark button" data-stylesheet="public/style/dark.css" type="button">Dark mode</button>
      </div>
      <button class="btn btn-outline-secondary" id="clear-storage" type="button">Clear Storage</button>

      <li class="nav-item">
      <a class="nav-link" href="index.php?action=logout">Se deconnecter</a>
      </li>
    </ul>
  </div>
</nav>
