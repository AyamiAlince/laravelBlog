@extends('layouts.main')

@section('content')
    <main class="container">


        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">

                </h3>



                <article class="blog-post p-fix">
                    <img src="../storage/{{$post->image}}" height="750">
                    <h2 class="blog-post-title mb-1">{{Illuminate\Support\Str::limit($post-> title, 40) }}</h2>

                    <p class="word-wrap">
                        <?=  $post->content ?>
                    </p>
                    <div class="container ">




                    </div>

                </article>

                <hr>



            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                    </div>


                </div>
            </div>
        </div>

    </main>

@endsection




