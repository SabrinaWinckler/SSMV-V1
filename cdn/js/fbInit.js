(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=213962312451886";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function checkLoginState() {
  FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    console.log(response);

    FB.api('/me', {fields: 'first_name, last_name, email, gender, locale, picture'}, function(response) {
        console.log(JSON.stringify(response));
        console.log(response["id"]); //PEGANDO O ID FUNCIONAL
        FB.api('/' + response["id"] + '/notifications?template=@[' + response["id"] + '], Tem um sangue O- (O negativo) disponivel. Fique atento.&href=//localhost&ref=?asdasd&access_token=213962312451886|dM6ZBAut7W2a2DXu9sJJQbnC91A', 'post'); //TOTALMENTE FUNCIONAL
    });

    // FB.login(function(){
    //    FB.api('/' + response["id"] + '/notifications?template=@[' + response["id"] + '], Tem um sangue O- (O negativo) disponivel. Fique atento.&href=//localhost&ref=?asdasd&access_token=213962312451886|dM6ZBAut7W2a2DXu9sJJQbnC91A', 'post', {message: 'SEU SANGUE, MINHA VIDA!'});
    //  }, {});


    // FB.login(function(){
    //   FB.api('/me/feed', 'post', {message: 'SEU SANGUE, MINHA VIDA!'});
    // }, {scope: 'publish_actions'});

    // FB.ui(
    // {
    //   method: 'share',
    //   href: 'https://developers.facebook.com/docs/'
    // }, function(response){});
    // /1489277481137597/notifications?template=@[1489277481137597], Tem um sangue O- (O negativo) disponivel. Fique atento.&href=//localhost&ref=?asdasd&access_token=EAADCmPuhBy4BAIwJ8ldiPhdBZC2cLEnqw23ZAISZBO9tpu8hIZBQJZBsHzGMe8EA6em8xD0PaPFHRvk7tDmsGkTk2e9kguhhStM8PMf9aFENdRRukgEpN8cNmX0e13udD8UKh237WJgZAapmOOasViTY7kCEOQlCgu3IJqQs58noyfCfynnHlNxvAcGuZB6pIsZD

    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
  } else if (response.status === 'not_authorized') {
    console.log(response);

  } else {
    console.log(response);

  }
 });
}

//   FB.getLoginStatus(function(response) {
//   if (response.status === 'connected') {
//     console.log(response);

//     var uid = response.authResponse.userID;
//     var accessToken = response.authResponse.accessToken;
//   } else if (response.status === 'not_authorized') {
//     console.log(response);

//   } else {
//     console.log(response);

//   }
//  });