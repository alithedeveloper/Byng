@extends( 'master' )


@section( 'content' )

    <div class="main-content">
        <div class="container__inner">

            @include('flash::message')
            <div class="jumbotron text-center">
                <h1>Welcome to ABC Studio</h1>
                <p>Bringing you the best news around the globe</p>
            </div>
            @foreach( $articles as $article)
                <div class="row article__row">
                    <div class="col-md-8 article__row-content">
                        <header>
                            <h2>{{ $article->title }}</h2>
                            <div class="meta-data">
                                <span class="meta-data__post">
                                    <i class="fa fa-envelope"></i>
                                     by {{$article->author}}
                                </span>
                                <span class="meta-data__date">
                                    <i class="fa fa-calendar"></i> {{ $article->posted  }}
                                </span>
                            </div>
                        </header>

                        <p>{{ str_limit($article->summary, $limit = 150, $end = '...') }}</p>
                    </div>
                    <div class="col-md-4 article__row-media">
                        <iframe class="article__video" src="{!! $article->url  !!}
                                " frameborder="0" allowfullscreen></iframe>
                    </div>
                </div><!--/row-->
                <hr>
            @endforeach
        </div>
    </div><!--/ main-content -->

@stop