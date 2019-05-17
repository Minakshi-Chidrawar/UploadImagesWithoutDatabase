<nav class="nav flex-column">
  <div id="mycarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">
      <ul>
        @foreach($directories as $directory)
          <li>
            {{ $directory }}
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>