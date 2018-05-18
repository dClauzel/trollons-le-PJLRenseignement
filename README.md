# Aidons le gouvernement à détecter les vilains méchants sur internet

Pour accompagner le gouvernement dans sa surveillance de masse, il est possible de faciliter le travail des boîtes noires en leur fournissant directement des métadonnées adaptées.

Démonstration : `curl --head https://clauzel.eu/PJLRenseignement/`

```
HTTP/1.1 200 OK
Date: Mon, 13 Apr 2015 22:38:57 GMT
Server: Apache
Strict-Transport-Security: max-age=31536000; includeSubDomains
X-PJLRenseignement: couscous, Al-Qaida, ben Laden, bombe, Syrie
X-Powered-By: des petits chinois du FBI dans un garage
Content-Type: text/html; charset=UTF-8
```

L’injection de l’en-tête personnalisé `X-PJLRenseignement` est réalisée ici par la fonction PHP `header("X-PJLRenseignement: couscous, Al-Qaida, ben Laden, bombe, Syrie")`, couplé à un malicieux `header("X-Powered-By: des petits chinois du FBI dans un garage")`.

Il existe un [exemple de page en ligne](https://clauzel.eu/PJLRenseignement/).

* les [en-têtes HTTP](https://en.wikipedia.org/wiki/List_of_HTTP_header_fields/) ;
* le [Projet de Loi relatif au renseignement](https://wiki.laquadrature.net/Portail:Loi_Renseignement).

# Licence
En ce glorieux jour du 2015-04-14, moi Damien Clauzel place ce travail sous la licence « [Fais pas chier](https://clauzel.eu/FPC/) ».
