@extends('template')
@section('titre')
Liste des Projets
@endsection

@section('content')
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<h1>List of projects</h1>
<table id="customers">
    <tr>
        <th>Identifier</th>
        <th>Title</th>
        <th>Price</th>
        <th>Description</th>
        <th>Delivery time</th>
    </tr>
    @foreach($projets as $projet)
    <tr>
        <td>{{$projet->getident()}}</td>
        <td>{{$projet->gettitre()}}</td>
        <td>{{$projet->getprix()}}</td>
        <td>{{$projet->getdesc()}}</td>
        <td>{{$projet->getliv()}}</td>
    </tr>
    @endforeach
</table>
@endsection
