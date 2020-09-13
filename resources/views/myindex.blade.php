<html>
<head>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    // OR with multi
    {!! JsonLdMulti::generate() !!}

<!-- OR -->
    {!! SEO::generate() !!}

<!-- MINIFIED -->
    {!! SEO::generate(true) !!}

<!-- LUMEN -->
    {!! app('seotools')->generate() !!}
</head>
<body>

</body>
</html>
