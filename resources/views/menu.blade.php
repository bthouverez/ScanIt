<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Route::current()->uri == "/" ? 'active' : '' }}">
        <a class="nav-link" href="/">Accueil</a>
      </li>
      <li class="nav-item {{ Route::current()->uri == "livres" ? 'active' : '' }}">
        <a class="nav-link" href="/livres">Livres</a>
      </li>
      <li class="nav-item {{ Route::current()->uri == "clients" ? 'active' : '' }}">
        <a class="nav-link" href="/clients">Clients</a>
      </li>
      <li class="nav-item {{ Route::current()->uri == "fournisseurs" ? 'active' : '' }}">
        <a class="nav-link" href="/fournisseurs">Fournisseurs</a>
      </li>
      <li class="nav-item {{ Route::current()->uri == "commandes" ? 'active' : '' }}">
        <a class="nav-link" href="/commandes">Commandes</a>
      </li>
{{--       <li class="nav-item">
        <a class="nav-link" href="/scanner">Scanner</a>
      </li> --}}
  </div>
</nav>