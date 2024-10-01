@extends('pagesCrud.layouts.head') 
   <h1>Home Page</h1>
   <div class="container">
    @foreach ($product as $item)
    <h1>{{$item->name}}</h1>
    <h1>{{$item->email}}</h1>
            <a style="color:deepskyblue; text-decoration:none"
      href="{{route('crudPage.edit' , $item->id)}}">Edit</a>
 <br>
      <a style="color:blue; text-decoration:none"
      href="{{route('crudPage.show' , $item->id)}}">show</a>
      <form action="{{route('crudPage.destroy' , $item->id)}}" method="post">
         @csrf
         @method('delete')
            <input class="btn btn-danger" type="submit" value="delete">
      </form>
            <hr>
    @endforeach
    {{$product->links()}}
    <div class="row">
       
       
    
 @extends('pagesCrud.layouts.footer') 
