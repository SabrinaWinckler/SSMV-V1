window.fbAsyncInit = function() {
FB.init({
    appId      : '213962312451886',
    xfbml      : true,
    version    : 'v2.9'
});
FB.AppEvents.logPageView();
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function loginfb() {
  $.post('/loginfb', {}, function (rs) {
    console.log(rs);
  });
}