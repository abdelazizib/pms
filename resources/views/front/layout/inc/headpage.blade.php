<header class="haeder-page">
      <div class="d-flex flex-column justify-content-end align-items-center h-100 pb-5">
        <h1 class="haeder-page__title">@yield('pagename')</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-uppercas" href="#">Home</a></li>
            <li class="breadcrumb-item active text-uppercas" aria-current="page">@yield('pagename') </li>
          </ol>
        </nav>
      </div>
    </header>