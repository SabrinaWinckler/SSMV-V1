    </div>
    <script> var id = "<?php echo $_SESSION['id']; ?>"; var nome = "<?php echo $_SESSION['nome']." ".$_SESSION['sobrenome']; ?>"; var tipo = "<?php echo $_SESSION['tipo']; ?>"; var sangue = "<?php echo $_SESSION['sangue']; ?>"; var basepainel = "<?php echo BASEPAINEL; ?>"; </script>

    <!-- jQuery -->
    <script src="<?php echo BASECDN; ?>jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASECDN; ?>bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo BASECDN; ?>metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASECDN; ?>js/sb-admin-2.js"></script>
    <script src="<?php echo BASECDN; ?>js/fbInit.js"></script>
    <script src="<?php echo BASECDN; ?>js/painel.js"></script>
    <script src="<?php echo BASECDN; ?>js/toastr.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqSRBENxyLSRHjR_GEujh7A3JqNGl2QqE&callback=initMap" async defer></script>

    <script>
    var customLabel = {
        hemocentro: {
            label: 'H'
        }
    };

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-29.7913804, -55.8162755),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

</body>

<!-- Modal Facebook não vinculado -->
<div class="modal fade" id="modalFb" tabindex="-1" role="dialog" aria-labelledby="modalFb">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="titulo_modalFb">Ops...</h4>
            </div>
            <div class="modal-body" id="body_modalFb">
                Este facebook não está vinculado a nenhuma conta.
            </div>
            <div class="modal-footer" id="footer_modalFb">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" onclick="cadastrar_fb()" id="cadastrar_fb" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
</div>

</html>