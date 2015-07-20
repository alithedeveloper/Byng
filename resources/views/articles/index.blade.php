@extends( 'master' )

@section( 'content' )

    <div class="main-content">
        <div class="container__inner">

            @include('flash::message')
            <ul id="filterOptions" class="visible-lg">
                <li class="active"><a href="#" class="all">All</a></li>
                <li><a href="#" class="article-youtube">Youtube Articles</a></li>
                <li><a href="#" class="article-rss">RSS Articles</a></li>
                <li><a href="#" class="article-simple">Articles</a></li>
                <li><a href="#" class="article-vimeo">Vimeo Articles</a></li>
            </ul>
            @foreach( $articles as $article)
                <div class="row article__row <?php echo addFilteredClass($article);?>">
                    <div class="col-md-8 article__row-content">
                        <header>
                            <h2>{{ $article->title }}</h2>
                            <div class="meta-data">
                                <span class="meta-data__post">
                                    <i class="fa fa-envelope"></i>
                                     by <?php echo $article->author ? $article->author : $article->source; ?>
                                </span>
                                <span class="meta-data__date">
                                    <i class="fa fa-calendar"></i> {{ $article->posted  }}
                                </span>
                            </div>
                        </header>

                        <p>{{ $article->summary }}</p>
                        <button class="btn btn-default"><i class="fa fa-comment"></i> Comments</button>
                        <button class="btn btn-default"><i class="fa fa-globe"></i> Link</button>
                    </div>
                    <div class="col-md-4 article__row-media">
                        <iframe class="article__video" src="{!! $article->url  !!}
                                " frameborder="0" allowfullscreen></iframe>
                    </div>
                </div><!--/row-->
            @endforeach
        </div>
    </div><!--/ main-content -->


@stop