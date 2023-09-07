<x-layout>
  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner rounded">
            <div class="carousel-item active">
              <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://picsum.photos/300/300" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="col-6">
        <span class="badge text-bg-primary">{{ $announcement->category->name }}</span>
        <h1 class="text-light">{{ $announcement->title }}</h1>
        <p class="text-light">{{ $announcement->description }}</p>
        <p class="text-light">{{ $announcement->price }}€</p>
        @if (Auth::user() && Auth::user()->id == $announcement->user_id)
          <a href="{{ route('announcements.edit',$announcement->id) }}" class="btn btn-primary">Modifica</a>
        @endif
      </div>
      </div>
    </div>
  </div>
</x-layout>