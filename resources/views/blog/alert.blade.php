@if($term = request('term'))
    <dir class="alert alert-info">
        <p>Search Results for: <strong>{{ $term }}</strong></p>
    </dir>
@endif