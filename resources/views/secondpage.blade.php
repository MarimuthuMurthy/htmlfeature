<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>second page</title>
</head>
<style>
    body {
        padding: 0px;
        margin: 0px;
    }

    .top-right {
        position: absolute;
        top: 20%;
        right: 20%;
        color: beige;
        height: 15%;
        width: 20%;
        background-color: yellow;
    }

    #middle-image {

        background-image: url({{ asset('/images/secondpage.jpg') }});
        background-position: center top;
        background-repeat: no-repeat;
        background-size: 100%;
        z-index: -1;
        width: 100%;
        height: 90vh;
        position: relative;
        background-color: white;
    }
    .img-text {
      font-size: 30px;
      color:black;
      font-weight: 600;
      width: 30%;
      position: absolute;
      top: 30%;
      right: 10%;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      text-shadow: 10px;
    }
</style>

<body>
    <div style="background-color: black;padding-top: 10px">
        <h1 style="color: aqua;margin:0%;padding:0;text-align:center">Why star health ?</h1>
    </div>
    <div id="middle-image">
        <div class="img-text">
            Star Health is trusted by 55 Lakh policyholders and covers more than
            1.6 Crore lives in India.
          </div>
    </div>
    <div>
        <div style="margin-top: 50px">
            <img style="height: 70px ; width:70px ; padding-left:20% ;vertical-align:middle" src="{{ url('/images/second1.png') }}" alt="Image" title="star header image">
            <p style="padding-left:20px;display: inline ; font-size: 26px;font-family: cursive"> Cashless treatment at across 10,000 hospital</p>
        </div>
        <div style="margin-top: 10px">
            <img style="height: 70px ; width:70px ; padding-left:20% ;vertical-align:middle" src="{{ url('/images/india.png') }}" alt="Image" title="star header image">
           <p style="padding-left:20px;display: inline ; font-size: 26px ;font-family: cursive"> Pan India presence with 1000+ offices</p>
        </div>
        <div style="margin-top: 10px">
            <img style="height: 70px ; width:70px ; padding-left:20% ;vertical-align:middle" src="{{ url('/images/getmoney.png') }}" alt="Image" title="star header image">
           <p style="padding-left:20px;display: inline ; font-size: 26px ;font-family: cursive"> Cashless claims approved within 30 mins</p>
        </div>
        <div style="margin-top: 10px">
            <img style="height: 70px ; width:70px ; padding-left:20% ;vertical-align:middle" src="{{ url('/images/getmoney.png') }}" alt="Image" title="star header image">
           <p style="padding-left:20px;display: inline ; font-size: 26px;font-family: cursive" > Hassle free in house settlement without intervention of TPA</p>
        </div>
    </div>
    <footer>
        <div style="margin-top:20px;background-color:black" >
            <p style="color: red;text-align: center;font-family: 'Times New Roman', Times, serif;font-size: 20px" style="">The information provided here is indicative only. For more details
                on the risk factors, terms and conditions, please reed the policy
                wordings before concluding the sale.</p>
      </div>
    </footer>
</body>


</html>
