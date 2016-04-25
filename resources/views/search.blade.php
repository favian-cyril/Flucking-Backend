@extends('layouts.app')

@section('content')
<div class="container">
  @if (count($errors))
  <div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Please enter a search value.
  </div>
  @endif
@if ($req['total_results'] > 0)
<table class="table" style="width:80%;margin-left:auto;margin-right:auto">
  @for ($i=0;$i < count($req['results'])/5;$i++)
      <tr>
      @if (($cur == $req['total_pages']) and ($i == floor(count($req['results'])/5)))
      @for ($j=0;$j<(count($req['results'])%5);$j++)
          <td style="padding:15px">
          <a href="/movie?id={{ $req['results'][($i*5)+$j]['id'] }}">
          @if ($req['results'][($i*5)+$j]['poster_path'] != null)
          <img src="http://image.tmdb.org/t/p/w500{{ $req['results'][($i*5)+$j]['poster_path'] }}" height="150" width="120"/>
          @else
          <img src="{{ url('public/asset/not-found.jpeg')}}" height="150" width="120"/>
          @endif
          </a>
          <p>{{ $req['results'][($i*5)+$j]['title'] }}</p>
          </td>
      @endfor
      @else
      @for ($j=0;$j<5;$j++)
          <td style="padding:15px">
          <a href="/movie?id={{ $req['results'][($i*5)+$j]['id'] }}">
          @if ($req['results'][($i*5)+$j]['poster_path'] != null)
          <img src="http://image.tmdb.org/t/p/w500{{ $req['results'][($i*5)+$j]['poster_path'] }}" height="150" width="120"/>
          @else
          <img src="{{ url('public/asset/not-found.jpeg')}}" height="150" width="120"/>
          @endif
          </a>
          <p>{{ $req['results'][($i*5)+$j]['title'] }}</p>
          </td>
      @endfor
      @endif
      </tr>
  @endfor
</table>
        <div id="pagination" class="pagination light-theme simple-pagination">
        </div>
        </nav>
    @if ($type == 'genre')
    <script>
    $(function() {
      $('#pagination').pagination({
          pages: {{intval($req['total_pages'])}},
          hrefTextPrefix: '?g={{$id}}&p=',
          currentPage: {{intval($cur)}},
      });
    });
    </script>
    @else
    <script>
    $(function() {
      $('#pagination').pagination({
          pages: {{intval($req['total_pages'])}},
          hrefTextPrefix: '?s={{$name}}&p=',
          currentPage: {{intval($cur)}},
      });
    });
    </script>
    @endif
  @else
    <h2>No results found.</h2>
  @endif

</ul>
</div>
@endsection
