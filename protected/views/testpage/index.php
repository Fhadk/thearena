<html>
<head>
<script src="http://10.40.40.2/jasperserver-pro/client/visualize.js"></script>

</head>
<body>
<!-- Provide the URL to visualize.js -->


<!-- Provide a container for the report -->
<div id="container">there</div>

<script>
visualize.config({
		auth: {
		name: "ariaz",
		password: "Password1",
		
		}
                error:function(er){
					alert(er+"login");
				}
	})
visualize(
	function(v){
			v.login(
				
			).done(function(){
				alert("logged in");
			
				v.report({
                                           ///public/Quartz/Dashboard_Widgets/Logged_in/logged_in_site             
				resource: '/public/Quartz/Dashboard_Widgets/Logged_in/logged_in_site',
				container: '#container',
				params:{"hierarchy":["29920|315"]},
				error:function(er){
					alert(er+"inner");
				}
			});
			}).fail(function(){
				showMessage(".error");});
	}
);

f