### PHP Superglobals - https://www.php.net/manual/en/language.variables.superglobals.php.
 
1. Atverot pārlukā projektu, Jūs ieraudzīsiet parasto HTML formu.
2. Uzdevums ir izlabot HTML kodu lai forma sūtītos ar HTTP post pieprasījumu (request). HTML kods atrodas `/templates/register.html`
3. `index.php` failā mēs veidosim PHP kodu.
4. Izmantojot PHP globālos mainīgos, izveidot sekojošo loģiku:
- Izveidot informācijas ierakstu `form-records.log` failā un katram ierakstam jāsatur sekojošo informāciju
  - Ar $_POST palidzību - dati kuri bija atsūtīti ar HTML formu
  - Ar $_SERVER palidzību - HTTP pieprasījuma metode(GET vai POST), klienta IP adrese un request(http pieprasījuma) URI.
    Iepazisties ar terminiem var šeit - https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/Identifying_resources_on_the_Web
  
#### Ieraksta piemērs: `Sent from: <IP>, Data: <firstname>, <lastname>, <email>, <phone>. HTTP request method: <method>, URI: <URI> `

* Bonuss par OOP dizainu. Mape priekš klasēm `/src`, bet pašus objektus veidojam `index.php` failā.
