<?php 

require_once("../config.class.php");

$pagina = "Requisição";
$tipo   = "Pessoa juridica";

require_once "inc/header.php"; 

?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Solicitar Doações</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nome do Requisitor:</label>
                    <input type="text" id="requisitor_nome" name="nome" class="form-control">
                </div>
            </div>

            <div class="col-md-3 checkbox-center">
                <div class="checkbox custom">
                    <input type="checkbox" id="requisitor_mim" name="requisitor_mim" class="css-checkbox">
                    <label for="requisitor_mim" class="css-label"></label>
                    A doação é para mim
                </div>
            </div>

            <div class="col-md-3">
                <label>Tipo Sanguíneo:</label>
                <select name="tipo_sangue" id="tipo_sangue" class="form-control">
                    <?php 

                    if ($sql = $con->prepare("SELECT `idtipoSangue`, `tipo` FROM  `ssmv`.`tipoSangue`;")) {
                        $sql->execute();
                        $sql->bind_result($idtipoSangue, $tipo);
                        while ($sql->fetch()) {
                            echo "<option value=" . $idtipoSangue . ">" . $tipo . "</option>";
                        }
                        $sql->close();
                    }
                    
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Preciso do sangue para até</label>
                    <input type="date" id="dia" name="dia" class="form-control" required="required">
                </div>
            </div>

            <div class="col-md-3">
                <label>Urgência:</label>
                <select id="urgencia" name="urgencia" class="form-control">
                    <option value="alto"> Alto </option>
                    <option value="medio"> Médio </option>
                    <option value="baixo"> Baixo </option>
                </select>
            </div>
        </div>

        <div id="map"></div>

        <div class="row">
            <div class="col-md-12">
                <input type="button" value="Confirmar" onclick="solicitar_doacao();" class="btn btn-primary right">
            </div>
        </div>

    </div>

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
<?php require_once("inc/footer.php"); ?>
