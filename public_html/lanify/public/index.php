<?php

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~knykanen/lanify/tapahtuma?id=1 on 
  // lyhentynyt muotoon /tapahtuma.
  $request = str_replace('/~knykanen/lanify','',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava 
  // käsittelijä.
  if ($request === '/' || $request === '/tapahtumat') {
    echo '<h1>Kaikki tapahtumat</h1>';
  } else if ($request === '/tapahtuma') {
    echo '<h1>Yksittäisen tapahtuman tiedot</h1>';
  } else {
    echo '<h1>Pyydettyä sivua ei löytynyt :(</h1>';
  }

?> 
