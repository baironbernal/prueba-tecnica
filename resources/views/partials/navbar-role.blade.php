
@hasrole('super-admin')
  
     <div class="row justify-content-md-center">
      <div class="col col-lg-12">
      <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="{{ route('users.index')}}">List of users</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">All images</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">Give permissions</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">Assing homeworks</a>
  </li>
</ul>
    </div>
  </div>
  

@else

<p>Ud debe ser otra mierda pero no ADMINISTRADOR</p>
@endhasrole
