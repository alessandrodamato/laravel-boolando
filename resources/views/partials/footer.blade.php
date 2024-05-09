<footer>

  <div class="container d-flex box">

    <div class="d-flex footer-left">
      <h3>Boolando s.r.l.</h3>

      <nav>
        <ul class="d-flex f-size-small">
            @foreach ($footer['footer_left'] as $item)
                <li>
                    <a href="/">{{$item['text']}}</a>
                </li>
            @endforeach
        </ul>
      </nav>
    </div>

    <div class="d-flex footer-right">
      <h4 class="f-size-small">Trovaci anche su</h4>

      <nav>
        <ul class="d-flex">
            @foreach ($footer['footer_right'] as $item)
                <li>
                    <a href="/"><?php echo $item['icon'] ?></a>
                </li>
            @endforeach
        </ul>
      </nav>
    </div>

  </div>

</footer>
