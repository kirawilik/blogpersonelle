<h1>salam {{$nom}}</h1>
<table border ="1">
<tr>
    <th>language</th>
</tr>
@foreach($language as $co)

<tr>
  <td>{{ $co }}</td>
</tr>

@endforeach 
</table>