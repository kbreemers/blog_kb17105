<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NBA 2K18</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           
           .position-ref {
             position: relative;
            }

            .top-right {
             position: absolute;
             right: 30px;
             top: 10px;
             color: #636b6f;
             padding: 0 25px;
             font-size: 15px;
             font-weight: 600;
             letter-spacing: .1rem;
             text-decoration: none;
             text-transform: uppercase;
              }

            .links > a {
             color: #636b6f;
             padding: 0 25px;
             font-size: 12px;
             font-weight: 600;
             letter-spacing: .1rem;
             text-decoration: none;
             text-transform: uppercase;
              }

            .m-b-md {
             margin-bottom: 30px;
              }
            }
            html * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
              }
            body {
            background-image: url("https://gamingcentral.in/wp-content/uploads/2017/09/NBA.jpg");
            background-color: #CECECE;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
            font-family: "Open Sans", Roboto, sans-serif;
            margin: 0;
            padding: 0;
             }
            body a {
            text-decoration: none;
            color: #666666;
             }

            
            #page-container {
            background-color: rgba(245, 245, 245, 0.90);
            margin-top: 100px;
            min-width: 600px;
            width: 75%;
            padding-bottom: 3px;
            overflow: hidden;
            font-size: 12px;
            margin: 0 auto;
            position: relative;
              }
           
            #main-menu {
            text-align: center;
            width: 100%;
            border-top: 1px solid #DEDEDE;
            font-family: 'Raleway', sans-serif;
            font-size: 1.8rem;
            padding: 5px 0;
            position: relative;     
              }
            .menu {
            padding: 0;
            margin: 0;
              }
            .menu li {
            list-style: none;
            margin: 0;
            padding: 0;
              }
            .menu a {
            display: block;
            font-size: 22px;
            line-height: 32px;
            padding: 0 10px;
            color: #000000;
              }
            .menu a:hover {
            color: #999999;
              }
            #main-menu .menu li {
              display: inline-block;
              }
            #main-menu .area-right {
            float: right;
            padding-right: 5px;
              }
            #main-menu .area-left{
            float: left;
            padding-left: 5px;
            padding-top:5px;
              }
            #main-menu .area-center .menu {
            width: 100%;
            padding: 0 150px;
            text-transform: capitalize;
              }
            .order,
            .vive {
            text-transform: uppercase;
              }
            .order a {
            font-size: 18px;
              }
            .order a:hover {
            text-shadow: 0 0 2px rgba(255, 0, 0, .5);
            color: #000000;
              }

            #menu-add {
            float: left;
            padding-top: 30px;
            min-width: 180px;
            width: 15%;
              }
            #menu-add .menu a {
            color: #a51212;
            text-transform: capitalize;
            font-family: 'Raleway', sans-serif;
            font-size: 18px;
            line-height: 38px;
              }
            #menu-add .menu a:hover {
            color: #000000;
              }

            article {
            display: inline-block;
            padding: 20px 0px 20px 20px;
            right: 0;
            width: calc(100% - 250px);
            font-family: Open Sans;
            font-size: 12px;
              }
            article h1,
            article h2{
            font-family: 'Raleway', sans-serif;
            font-weight: normal;
            margin: 0.5em 0;
              }

            
            article h1 {
            font-size: 18px;
              }
            
            html,body {
            margin: 0;
            padding: 0;
              }
            article li {
            font-size: 12px;
            font-family: "Open Sans";
            margin: 0.5em 0;
            line-height: 100%;

              }
            article small,
            article p{
            font-size: 14px;
            font-family: "Open Sans";
            line-height: 1.5;
            padding-bottom: 10px;

              }

            p.lead {
            font-size: 12px;
            line-height: 150%;
            margin: 1em 0;
            font-family: "Open Sans";
              }

            .loginreg {
            width: 100%;
            height: 50px;
            position: relative;
              }
            * {box-sizing:border-box}


            /* Caption text */
            .text {
              color: #a51212;
              font-size: 18px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }

        </style>
    </head>
    
    <body>
<div class="centered-content">
<div id="page-container">

<div id="main-menu">
    <div class="area-right">
        <ul class="menu"> 
            <li class="order"><a href="https://nba.2k.com/2k18/buy#nba-2k18/nba-2k18-legend-edition-gold/united-states/ps4/gamestop">Buy now</a></li>
        </ul>
    </div>
        <div class="area-center">
        <ul class="menu">
            <li class="selected"><a href="/home"><b>To the main page</b></li>
            <li><a href="/posts">Blog</a></li>
            <li><a href="/form">Screenshot contest</a></li>
            <li class="vive"><a href="https://open.spotify.com/user/-2k-/playlist/24tXRZl2wek2K3Tyu53nPt">Soundtrack</a></li>
        </ul>
    </div>
    @extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control' , 'placeholder' => 'Title'])}}
      </div>
      <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control' , 'placeholder' => 'Body Text'])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'] )}}
  {!! Form::close() !!}

@endsection
</body>
</html>