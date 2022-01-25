window.onload = () => {
  //Criamos uma variável de mapa Leaflet centrado nas coordenadas e com o zoom a 17, ligado ao elemento div como o id=map que temos na nossa página
  const map = L.map('map').setView([39.23328932746503, -8.686713238019466], 17);
  //Adicionamos uma camada gratuita ao mapa
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 20,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/satellite-v9',
    tileSize: 512,
    zoomOffset: -1
  }).addTo(map);
  //Adicionamos um marcador da nossa localização ao mapa
  const marcador = L.marker([39.23328932746503, -8.686713238019466]).addTo(map);
  //Adicionamos uma mensagem ao marcador
  marcador.bindPopup('Estamos aqui!!!').openPopup();

  //Corremos o procedimento para resolver o caminho até nós
  getLocation();
};

//Função para solicitar a geolocalização atual do utilizador
function getLocation()
{
  let options = {
      enableHighAccuracy: true,
      timeout: 5000,
      maximumAge: 0
  };
  //Solicitamos autorização ao utilizador para fornecer a sua geolocalização e encaminhamos a ação para a função getRoute
  navigator.geolocation.getCurrentPosition(getRoute, error, options);
}

//Função a executar se não for possível obter a informação da API Mapquest
function error()
{
  //Obtemos a secção que vai receber as indicações
  const caminho = document.getElementById('caminho');
  //Obtemos o elemento que vai conter a tabela com as indicações
  const percurso = document.getElementById('percurso');
  //Tornamos a secção e o elemento visíveis
  caminho.hidden ? caminho.hidden = false : caminho.hidden = true;
  percurso.hidden = true;
  //Criamos um elemento de texto
  const info_texto = document.createElement('p');
  //Definimos o texto que vai conter
  info_texto.textContent = "Não nos foi possível gerar o caminho até nós; lamentamos...";
  //Adicionamo-lo à secção
  caminho.appendChild(info_texto);
  //Descemos a página até ao texto criado
  caminho.scrollIntoView();
}

//Função que recebe a geolocalização do browser para gerar e mostrar o caminho até nós
function getRoute(pos)
{
  //Obtemos o elemento DOM onde vamos colocar o caminho
  const caminho = document.getElementById('caminho');
  const percurso = document.getElementById('percurso');
  //Tornamo-lo visível
  caminho.hidden ? caminho.hidden = false : caminho.hidden = true;
  //Descemos a página até ao local das indicações
  caminho.scrollIntoView();
  //Obtemos as coordenadas do argumento por
  let coordenadas = pos.coords;
  //Definimos o url do recurso Mapquest
  const resourceUrl = 'http://www.mapquestapi.com/directions/v2/route';
  //Definimos a chave da API
  const mapquestKey = 'icsMNRFrhtaAFOi0NVCQC7SdBo3G1TGw';
  //Definimos as coordenadas do destino
  const destino = [39.23328932746503, -8.686713238019466];
  //Definimos as coordenadas da origem, onde o utilizador estiver
  const origem = [coordenadas.latitude, coordenadas.longitude];
  //Construímos o url para fazer o request
  const finalUrl = resourceUrl + '?key=' + mapquestKey + "&from=" + origem + "&to=" + destino;
  //Obtemos o corpo da tabela que vai receber as indicações
  const tbody = document.getElementById('tbody');
  const progress_bar = document.getElementById('progress-bar');
  //Fazemos o request GET e gerimos a informação JSON recebida
  hitUrl(finalUrl).then(route => {
    console.log(route);
    //Criamos um elemento para apresentar o ponto de origem obtido pelas coordenadas do browser
    const origem_elem = document.createElement('p');
    //Definimos o seu conteúdo com dados obtidos da resposta json
    const rua = route.route.locations[0].street;
    const localidade = route.route.locations[0].adminArea5;
    rua == '' ? origem_elem.textContent = 'Origem: ' + localidade : origem_elem.textContent = 'Origem: ' + rua + ", " + localidade;
    //Inserimo-lo antes da tabela com o percurso
    caminho.insertBefore(origem_elem, percurso);
    //Iteramos sobre cada troço de indicações que recebermos
    route.route.legs[0].maneuvers.forEach(element => {
      //Criamos uma linha para a tabela
      let linha = document.createElement('tr');
      //Criamos uma célula para cada elemento do troço que apresentamos
      let indicacoes_elem = document.createElement('td');
      let distancia_elem = document.createElement('td');
      let sinal_elem = document.createElement('td');
      //Definimos os textos das células
      indicacoes_elem.textContent = element.narrative;
      distancia_elem.textContent = element.distance + " mts";
      //Criamos um elemento img
      let sinal = document.createElement('img');
      //Definimos como o icon obtido
      sinal.src = element.iconUrl;
      //Adicionamos a imagem à respetiva célula e as células à linha
      linha.appendChild(indicacoes_elem);
      linha.appendChild(distancia_elem);
      sinal_elem.appendChild(sinal);
      linha.appendChild(sinal_elem);
      //Adicionamos a linha ao corpo da tabela
      tbody.appendChild(linha);
    });
  })
}

//Função assíncrona para obter o caminho do Mapquest
async function hitUrl(url)
{
  //Fazemos um request GET ao endereço construído na função anterior
  let response = await fetch(url);
  //Convertemos a resposta em formato json
  let json = await response.json();
  //Devolvemos o resultado
  return json;
}
