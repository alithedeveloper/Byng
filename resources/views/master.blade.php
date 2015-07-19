@include( 'partials/header')
<body>
<div class="container">
        @include( 'partials/primary_nav' )

        @yield( 'content' )

        @include( 'partials/footer ')
</div>
@include( 'partials/footer_scripts' )
</body>
</html>
