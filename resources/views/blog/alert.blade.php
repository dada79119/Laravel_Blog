@if($term = request('term'))
    <dir class="alert alert-info">
        <p>Search Results for: <strong>{{ $term }}</strong></p>
    </dir>
@endif

@if(isset($tagName))
    <dir class="alert alert-info">
        <p>Tagged: <strong>{{ $tagName }}</strong></p>
    </dir>
@endif