
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
              font-weight: bold;
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
              font-family: Roboto;
              font-weight: normal;
              margin: 0.5em 0;
            }

            
            article h1 {
              font-size: 24px;
            }
            article h2 {
              font-size: 130%;
            }
            .cover-img img
            {
              float:right;
              width: 10%;
              min-width: 150px;
            }
            
            article li {
              font-size: 12px;
              font-family: "Open Sans";
              margin: 0.5em 0;
              line-height: 100%;

            }
            article small,
            article p{
              font-size: 12px;
              font-family: "Open Sans";
              line-height: 1.5;
              padding-bottom: 10px;

            }

            p.lead {
              font-size: 130%;
              line-height: 150%;
              margin: 1em 0;
              font-family: "Open Sans";
            }

           
            .specs {
              width: 32%;
              padding: 0 20px 0 0;
              line-height: 0.5rem;
              float: left;
            }

            .specs ul {
              margin: 0;
              padding: 0;
            }
            .specs li {
              list-style: none;
            }
            .specs li strong {
              font-weight: normal;
            }

            h3 {
              font-weight: bold;
              font-size: 110%;
            }
            
            
            .clear {
              clear: both;
            }
            .menu-bottom {
              position: relative;
              font-family: "Open Sans";
              z-index: 1;
              background: #DEDEDE;
              width: 100%;
            }
            .menu-bottom #menu-bot {
              padding: 0;
              margin: 0;
              text-align: right;
            }
            .menu-bottom #menu-bot li {
              list-style: none;
              display: inline-block;
              border-left: 1px solid #AAAAAA;
            }
            
            .menu-bottom #menu-bot li:first-child {
              border-left: 0;
            }
            .menu-bottom #menu-bot li a {
              display: block;
              color: #999999;
              padding: 5px 10px;
            }
            .menu-bottom #menu-bot li a:hover {
              color: #000;
            }

            html,body {
                margin: 0;
                padding: 0;
            }
            .slider {
                width: 1024px;
                margin: 2em auto;
                
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
      

</div>  
<div class="centered-content">
<div id="page-container">
 @extends('layouts.app')
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
</div>
<div id="menu-add" class="clear">
    <ul class="menu">
        <li><a href="#1">What is NBA 2K18?</a></li>
        <li><a href="#2">Gameplay</a></li>
        <li><a href="#3">Development and release</a></li>
        <li><a href="#4">Reception</a></li>
        <li><a href='#5'>Alleged score interference from publisher</a></li>
        <li><a href='#6'>Accolades</a></li>
    </ul>
</div>
<article class="main-container">
    <h1 id="1">What is NBA 2K18?</h1>
    <p class="lead">
        NBA 2K18 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports.
        It is the 19th installment in the NBA 2K franchise and the successor to NBA 2K17. It was released in September 
        2017 for Microsoft Windows, Nintendo Switch, PlayStation 4, PlayStation 3, Xbox One, and Xbox 360.
    </p>
    <h2 id="2">Gameplay</h2>
        NBA 2K18 is a basketball simulation game which, like the previous games in the series, strives to realistically depict the 
        National Basketball Association (NBA), as well as present improvements over the previous installments. The player mainly 
        plays NBA games with real-life or customized players and teams; games follow the rules and objectives of NBA games. 
        Several game modes are present and many settings can be customized. In terms of commentary, Kobe Bryant and Kevin Garnett 
        appear as guest commentators.
            <br>
        Along with the current season's teams and players, previous games in the series have featured NBA teams from past eras, 
        such as the 1995–96 Chicago Bulls and the 1985–86 Boston Celtics. NBA 2K18 adds seventeen more such teams, including 
        the 2007–08 Denver Nuggets and the 1998–99 New York Knicks, as well as 'All-Time Teams', teams for each franchise 
        consisting of the greatest players in the respective franchise's history.

    <h2 id="3">Development and release</h2>
         NBA 2K18 was officially confirmed in January 2017 and was released worldwide on September 19, 2017; players who pre-ordered 
         the game received it on September 15, 2017. It is the first game in the series to be released for the Nintendo Switch; 
         it was also released for PlayStation 4, PlayStation 3, Xbox One, Xbox 360, and Microsoft Windows. Kyrie Irving of the Boston 
    </p>
    <h2 id="4">Reception</h2>
    <p>
        NBA 2K18 received generally favorable reviews, according to Metacritic. In their 8.4/10 review, IGN wrote: "NBA 2K18 impresses 
        by making players behave more like their real-life counterparts than ever before." Game Informer gave it a 9/10, writing, 
        "NBA 2K18 has a few holes in its game -- the series needs to improve its writing, the ballyhooed MyCareer Neighborhood hub 
        falls flat, and the tech powering the series is nearing retirement age. That said, boil the game down to its essentials and 
        you have a rock-solid, well-balanced sports sim that provides an immensely entertaining shoulder-to-shoulder same-couch 
        multiplayer experience."
    </p>
    <h2 id="5">Alleged score interference from publisher</h2>
    <p>
        The Sixth Axis, an online game journalist website, originally gave the game a 3 out of 10 score on September 21, with the 
        statement of "If you’re a series fan you may enjoy what you see, and the score below doesn’t indicate the quality of the core 
        basketball game, but rather protests how utterly invasive the microtransactions have now become". 
    </p>
    <h2 id="6">Accolades</h2>
    <p>
       NBA 2K18 was nominated for "Best Sports/Racing Game" at The Game Awards 2017. It won the award for "Best Sports Game" at 
       Game Informer's Best of 2017 Awards, and also came in second place for the same category in their Reader's Choice Best of 
       2017 Awards.
    </p>
</article>        

</div>
</div>
</div>
</div>
</body>
</html>
