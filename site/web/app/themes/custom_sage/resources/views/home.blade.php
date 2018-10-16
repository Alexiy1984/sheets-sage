@extends('layouts.app')

@section('content')
  @include('partials.main-page-header')

  <div class="mt-3">
    <h1>TEST</h1>
  </div>

  @php 
    $jsonurl = 'https://script.google.com/macros/s/AKfycbw-nUGhxsBWmPJbIzjhfDWuwgvp9GR9wQEDNgIxexG7ICsSD5s/exec'; 
    $table = (json_decode(file_get_contents($jsonurl),true));
    $length = count($table['user']);
    $countrows = 100;
    echo '<table class="my-3" border="1" cellpadding="5"><tr class="bg-primary" valign="top"><th>num</th>';
    echo '<th>url</th>';
    echo '<th>search term</th>';
    echo '<th>search volume (TH)</th>';
    echo '<th>internal rank</th>';
    echo '<th>description</th>';
    echo '<th>translation</th>';
    echo '<th>name</th>';
    echo '<th>name in Thai</th></tr>';
    echo '<p>Number of rows: ' .$length .'</p>';
    echo '<p>Number of showing rows: ' .$countrows .'</p>';
    for ($i = 1; $i <= 100; $i++) {
      echo '<tr valign="top">';
      echo '<td>' .$i .'</td>';  
      echo '<td>' .$table['user'][$i]['url'] .'</td>';  
      echo '<td>' .$table['user'][$i]['search term'] .'</td>';  
      echo '<td>' .$table['user'][$i]['search volume (TH)'] .'</td>';
      echo '<td>' .$table['user'][$i]['internal rank'] .'</td>';
      echo '<td>' .$table['user'][$i]['description'] .'</td>';
      echo '<td>' .$table['user'][$i]['translation'] .'</td>';
      echo '<td>' .$table['user'][$i]['name'] .'</td>';
      echo '<td>' .$table['user'][$i]['name in Thai'] .'</td>';
      echo '</tr>';  
    }
    echo '</table>';
  @endphp

@endsection
