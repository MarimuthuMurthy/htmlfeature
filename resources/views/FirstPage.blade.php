<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Murthy" content="This is the first page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>FirstPage</title>
</head>
<style>
    .headImage {
        background-color: black;
        width: 100%;
    }

    .headImage img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 10%;
    }

    .top-left {
        position: absolute;
        top: 200px;
        left: 50px;
        height: 100px;
        width: 40%;
        color: white;
        background-color: black;
    }
    .insideText{
        padding-top: 3%;
        text-align:center;
        font-family: "Times New Roman", Times, serif;
    }
    .insideParagraph{
        text-align: center;
        font-size: 25px;
        color: whitesmoke;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif

    }
</style>

<body>
    <header>
        <div class="headImage">
            <img src="{{ url('/images/ss_star_health_logo.png') }}" alt="Image" title="star header image"
                height="100px" width="100px">
        </div>
    </header>
    <main>
        <div>
            <img src="{{ url('/images/firstpage.jpg') }}" alt="Image" title="star header image" width="100%"
                height="700px">
            <div class="top-left">
                <div class="textInside">
                    <h2 class='insideText'>A personalized presentation for</h1>
                    <p class="insideParagraph"><b> {{$user->name}}</b></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div >
            <div style="margin-top: 20px ; margin-left:80%">
              <div>Presented By</div>
              <div style="font-weight: 600">Ms.DEEPA B</div>
              <div>9447210376</div>
              <div>deepalallic@gmail.com</div>
            </div>
          </div>
          <div style="margin-top:20px" class="headImage">
                <p style="color: red;text-align: center;font-family: 'Times New Roman', Times, serif;font-size: 20px" style="">The information provided here is indicative only. For more details
                    on the risk factors, terms and conditions, please reed the policy
                    wordings before concluding the sale.</p>
          </div>
    </footer>
</body>

</html>
