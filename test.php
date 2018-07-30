<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <title>My Feed Dialog Page</title>
    <meta property="og:site_name" content="The Arena">
    <meta property="og:title" content="Get Arena Food & Drinks Deals">
    <meta property="og:description" content="With ham, eggs, cheese and arugula for perfect start of the dinner! only on RS. 422/-">
    <meta property="og:url" content="http://thearena.com.pk/sandbox/test.php">
    <meta property="og:image" content="http://thearena.com.pk/sandbox/cinestarimages/deal_img3.png">
</head>
<body>
<div id='fb-root'></div>
<script src='http://connect.facebook.net/en_US/all.js'></script>
<p><a onclick='postToFeed(); return false;'>Post to Feed</a></p>
<p><a onclick="postTwitter()">Post to twitter</a></p>
<p id='msg'></p>

<script>
    FB.init({appId: "128936151192850", status: true, cookie: true});

    function postTwitter() {
        window.open("https://twitter.com/intent/tweet?text="+'With ham, eggs, cheese and arugula for perfect start of the dinner! only on RS. 422/- '+'http://thearena.com.pk/sandbox/dinein');
    }

    function postToFeed() {

        // Dynamically gather and set the FB share data.
        var FBDesc      = 'With ham, eggs, cheese and arugula for perfect start of the dinner! only on RS. 422/-';
        var FBTitle     = 'Get Arena Food & Drinks Deals';
        var FBLink      = 'http://thearena.com.pk/sandbox/dinein';
        var FBPic       = 'http://thearena.com.pk/sandbox/cinestarimages/deal_img3.png';

        // calling the API ...
        var obj = {
            method: 'share_open_graph',
            action_type: 'og.shares',
            action_properties: JSON.stringify({
                object: {
                    'og:url': FBLink,
                    'og:title': FBTitle,
                    'og:description': FBDesc,
                    'og:image': FBPic
                }
            })
        };

        function callback(response) {
            document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
    }



</script>
</body>
</html>