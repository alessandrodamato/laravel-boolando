<header>

    <div class="container d-flex box">

      <nav class="menu categories">
        <ul class="d-flex">
            @foreach ($header['header_left'] as $item)
                <li>
                    <a href="{{route($item['href'])}}">{{$item['text']}}</a>
                </li>
            @endforeach
        </ul>
      </nav>

      <div class="logo">
        <a href="{{route('home')}}"><img src="/img/boolean-logo.png" alt="Logo"></a>
      </div>

      <nav class="menu">
        <ul class="d-flex">
            @foreach ($header['header_right'] as $item)
                <li>
                    {{-- ho utilizzato il tag php perché con {{$item['icon']}} mi avrebbe stampato i tag per intero --}}
                    <a href="{{route($item['href'])}}"><?php echo $item['icon'] ?></a>
                </li>
            @endforeach
        </ul>
      </nav>

    </div>

  </header>
