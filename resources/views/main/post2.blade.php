@extends('layouts.main')

@section('content')
<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Популярный Пост</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">



        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            @foreach($randomPosts as $post)
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Случайный Пост</strong>
            <h3 class="mb-0">{{Illuminate\Support\Str::limit($post-> slug, 20) }}</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">{{Illuminate\Support\Str::limit($post-> content, 40) }}</p>
            <a href="{{route('main.post', $post->id) }}" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="storage/{{($post->image)}}"  height="250">
          </div>
        </div>
          @endforeach
      </div>
    </div>

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Посты
        </h3>

          <h1>{{$post->title}}</h1>


        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-3">

            @foreach ($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="storage/{{($post->image)}}" alt="" srcset="">
                  <div class="card-body">
                    <p class="card-text">{{$post->title}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="" type="button" class="btn btn-sm btn-outline-secondary">Подробнее</a>

                      </div>
                      <small class="text-muted">9 Просмотров</small>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach



          </div>
        </div>

        <hr>

          <div class="pagination"> {{$posts->links()}}</div>


      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
              <li><a href="#">December 2020</a></li>
              <li><a href="#">November 2020</a></li>
              <li><a href="#">October 2020</a></li>
              <li><a href="#">September 2020</a></li>
              <li><a href="#">August 2020</a></li>
              <li><a href="#">July 2020</a></li>
              <li><a href="#">June 2020</a></li>
              <li><a href="#">May 2020</a></li>
              <li><a href="#">April 2020</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Категории</h4>
            <ol class="list-unstyled">
              <li><a href="#">Категории</a></li>
              <li><a href="#">Категории</a></li>
              <li><a href="#">Категории</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </main>
@endsection




