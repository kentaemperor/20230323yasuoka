@extends('layouts.default')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}


td table tbody tr td {
  background-color: #EEEEEE !important;
}

</style>

@section('title', 'author.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>
      {{$author->getDetail()}}
    </td>

    <td>
      @if ($author->book != null)
      <table width="100%">
        @foreach ($author->books as $book)
    <tr>
      {{ $author->book->getTitle() }}
    </tr>
    @endforeach
</table>
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection