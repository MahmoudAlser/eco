<!DOCTYPE  html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPORT') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  
</head>
<body>
@extends('nav')
<hr/>
<br>
<br>
<br>
<br>
<br>

<form method="POST" class="col-lg-8" enctype="multipart/form-data" action="{{url('/insertpost')}}">
    @csrf
<input type="hidden" name="userid" value="1">
    
        <div class="form-group">
           
            <input type="hidden" id="" value="{{auth()->user()->name}}" class="form-control " placeholder=" input" name="name">
        
      
        
           
        <input type="text" id="" class="form-control" placeholder=" title" name="title">
        <br>
  <div class="form-group">
            

          <input type="text" id="" class="form-control" placeholder=" content" name="content">
          <br>
  <div style="display: ruby;">
        <input type="text" id="" class="form-control" placeholder=" phone" name="phone">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
          </svg>
  </div>
  <br><br>
           <div style="display: ruby;">
           
        <input type="file" name="img" class="form-control"  >
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-image-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V13a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-1zm5-6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          </svg>
           </div>
        
      

        </div>
      <div class="form-group">
        <label for=""> select menu</label>
        <select id="" class="form-control" name="catid">
            <option> select</option>  
            @foreach ($categorys as $category)
        <option value="{{$category->cat_name}}"> {{$category->cat_name}}</option>  
           
        

        


        
     
        @endforeach

           
        </select>
      </div>
    
      <button type="submit" class="btn btn-primary">Submit</button>
   <div class="col-12">
       @foreach ($errors->all() as $error)
       <div class="alert alert-danger">
        {{$error}}
    </div>
   
       @endforeach
   </div>
  </form>
</body>
</html>