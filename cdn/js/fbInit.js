 jQuery.fbInit = function() {
        window.fbAsyncInit = function() {
            FB.init({
                appId      : 213962312451886, // App ID
                status     : true, // check login status
                cookie     : true, // enable cookies to allow the server to access the session
                xfbml      : true, // parse XFBML
                version    : 'v2.8'  
            });
        };

        // Load the SDK Asynchronously
        (function(d){
            var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id; js.async = true;
            js.src = "//connect.facebook.net/pt_BR/all.js";
            d.getElementsByTagName('head')[0].appendChild(js);
        }(document));
    };