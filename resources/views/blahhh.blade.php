@auth
                        <ul class="nav navbar-nav navbar-right">
                              <a id="navbarDropdown" class="section-btn" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                              </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                              </form>

                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <a href="{{__('/register')}}" class="section-btn">Daftar</a>
                            <a href="{{__('/login')}}" class="section-btn">Masuk</a>
                        </ul>
                    @endauth