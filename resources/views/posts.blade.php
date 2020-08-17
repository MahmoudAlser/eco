<html><head><title>post</title>
  <link rel="stylesheet" href="css/post.css" type="text/css">
       <!-- CSS only -->
       <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       <!-- JS, Popper.js, and jQuery -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       <script src="js/post.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
</head>
<body style="background: rgba(48, 48, 63, 0.404);">
    
@extends('nav')
            
<br><br><br>
<div class="container " style="box-shadow:  2px 2px 12px 2px rgba(0, 0, 0, 0.39); background: rgba(52, 52, 61, 0.582)">
  
<div class="row col-lg-12">
  @foreach ($posts as $post)
 
    <div class="col-lg-4 d-inline-flex h-100   " >
    
    <div class="card mt-5 d-table-row  " style="box-shadow: 4px 0px 8px 2px rgba(0, 255, 255, 0.486)">
    <div class="card-body " style="box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.432); " >

    <h2 class="lead text-danger " style="text-align: center; letter-spacing: 2px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-weight: 900;font-style: italic;font-size: bold;">
     
      {{$post->name}}
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg>

    </h2>
    <h5 class="card-title text-center" ><a rel="stylesheet" href="posts/{{$post->id}}">{{$post->p_title}}</a></h5>
  
    <img src="img/{{$post->img}}" class="embed-responsive img-fluid card-img-top " style="min-height: 200px;max-height: 200px; max-width: 300px; min-width: 200; box-shadow: 3px 2px 10px 3px rgba(27, 29, 29, 0.548);" alt="">
  <div class="reed " id="pc">
    <p class="lead  text-left  "  name="pr" style="max-height: 70px; min-height: 70px;   overflow: hidden; " >{{$post->p_content}}</p><hr>
  </div>
   <div class="bg bg-none">
 <p class="lead text-left btn btn-dark "  >
      <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-telephone-fill " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
      </svg>
      {{$post->phone}}</p>
      <p class="lead"><span class="glyphicon glyphicon-time"></span>
        {{$post->created_at}}  
       </p>
       <p class="lead text-left align-text-bottom ">
         <a class="btn btn-primary text-center" href="posts/{{$post->id}}"> Go Post</a>
        <button class="btn btn-primary    text-center" onclick="mm();"   > Reed More</button>
        <script >
  
      function mm(){
var c=document.getElementById('pc');
c.className="reedmore";}

</script>
       
       </p>
       <style>div.reedmore{
        overflow:inherit;
    
        background: rgba(127, 151, 151, 0.5);

        }
        div.p.reedmore{
      
      height: auto;
      background: rgba(127, 151, 151, 0.5);

      }
      reedmore.button{
     background: red;
      
      }
        
        </style>
    
   </div>
    

   
  
      </div>
</div>
</div> 
@endforeach


</div>
<hr>
{{$posts->links()}}
</div>




@extends('footer')
</body></html>
