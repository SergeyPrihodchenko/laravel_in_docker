<div class="container-lg">
    @foreach($data as $el)
    <div class="block-file-news">
        <figure>
            <blockquote class="blockquote">
                <p class="h1">{{__($el['name'])}}</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              <cite title="Source Title">{{__($el['category'])}}</cite>
            </figcaption>
        </figure>
        <p class="lead">{{__($el['low_description'])}}</p>
        <p>{{__($el['full_description'])}}</p>
        <button type="button" class="btn-close btn-close-position" aria-label="Close"></button>
    </div> 
    <hr>
    @endforeach
</div>