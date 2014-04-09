<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style12.css">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="Content-Language" content="fr" />
 <meta name="author" content="Guillaume Larente" />
 <title>Rapport technique de stage</title>
</head>
<body>
<h1><a href="https://stripe.com/docs/api/python">Stripe</a></h1>

<h2>Introduction</h2>
   
   <p>Stripe est un api qui permet de faire des transactions a partir de notre site web cote client. Tous les informations sur les cartes de credits sont stockes chez eux donc nous avons aucun acces a ces donnees et ils sont encrypte par stripe. S'il y a un probleme avec les cartes de credits des clients c'est la responsabilite de stripe et non la notre.<br></p>
 <p>Presentement il est offert dans 6 langages differents :</p>
   <ul>
   <li>Curl</li>
   <li>Ruby</li>
   <li>Python</li>
   <li>PHP</li>
   <li>Java</li>
   <li>Node</li>
   </ul>

<h2>Contenu</h2>
   <p>L'api de stripe est divise en plusieurs methodes distinctes dont certains sont relie afin de pouvoir bien gerer chaque transaction faite a chaque client. Les plus importantes seront expliques. Chaque methode de l'api retourne un objet json avec tous les donnees stockees par stripe. De plus, il est possible pour chaque methode distincts dans l'api de stripe de creer l'objet en question, de le modifier, de le supprimer , de le recuperer et de recuperer tous les donnees de cet objet.Dans le cadre de ce rapport technique, il sera question d'un bref resume de l'api de stripe soit principalement la recuperation des donnes de certaines methodes axes principalement sur les methceux que je connais et que j'ai appris durant mon stage.</p>

<h3>Client</h3>

<p>La methode client permet d'obtenir tous les informations concernant le client. Toutes les requetes faites a stripe sont retourne dans un objet json.</p>

   <p>Il est bien evidemment possible de recuperer,modifier ou supprimer un client.

<br>

   On peut recuperer un client particulier en precisant son id ou on peut lister tous les clients avec une requete
 
<br />

<p>Un exemple d'une requete pour obtenir la liste serait : stripe.Customer.retrieve({CUSTOMER_ID}) ,qui est en fait un appel de la methode customer()  a noter
 que le id du customer est falcutatif et que pour la liste de tous les users la requete serait :  stripe.Customer.all() , avec trois parametre possible le count qui dit le nombre de clients a afficher , par defaut c'est 10. La date de creation en timestamp afin de lister seulement les clients creer a une date precise.Le offset qui permet de specifier a quel client on commence, par default c'est 0. Le offset est tres utile car on ne peut lister plus de 100 clients par requetes.</p>



<p>Voici un exemple d'un objet json retourne par l'appel de la methode client :<br> 
<Customer customer  id=cus_3j2ejIdkvTkLvI at 0x00000a> JSON: {<br>
  "object": "customer",<br>
  "created": 1395677075,<br>
  "id": "cus_3j2ejIdkvTkLvI",<br>
  "description": null,<br>
  "email": "alisa@collinsheathcote.net",<br>
  "delinquent": false,<br>
  "metadata": {<br>
  },<br>
  "subscriptions": {<br>
    "object": "list",<br>
    "count": 0,<br>
    "url": "/v1/customers/cus_3j2ejIdkvTkLvI/subscriptions",<br>
    "data": [<br>

    ]<br>
  },<br>
  "discount": null,<br>
  "account_balance": 0,<br>
  "currency": "usd",<br>
  "cards": {<br>
    "object": "list",<br>
    "count": 0,<br>
    "url": "/v1/customers/cus_3j2ejIdkvTkLvI/cards",<br>
    "data": [<br>

    ]<br>
  },<br>
  "default_card": null<br>
}
</p>
<br>
<p>Tout d'abord en regardant l'objet on remarque qu'il y a un champ id dans l'objet json. Ce champ est le plus important ,car il permet d'identifier ce client dans tous les autres objet json et methode de cet aqi comme les factures et les charge. Le champs delinquent est un booleen qui permet de savoir si le client a tous paye ce qu'il devait ou s'il est en retard et nous doit de l'argent(mauvais client.). Le sous-objet cards permet de lister tous lescartes que l'utilisateur a d'inscrits en generale il y en a une seule mais si l'utilisateur veut changer sa carte et que vous voulez conservez son ancienne cela est possible.L'objet subscription permet egalement de lister tous les subscriptions que l'utilisateurs a. Dans le cas de notre entreprise aucun utilisateur a une subscription car les subscriptions sont relie a leur factures mensuelle l'objet invoice. L'utilite principale de l'objet client est de creer un nouveau utilisateur qu'on va charger, ensuite cet objet n'est pas vraiment utile puisque avec le id de stripe de ce client on peut avoir tous les informations ailleurs. En fait cet objet permet de reconnaitre cet utilisateur dans tous les autres methodes et par le fiat meme objet de cette api.Un coup que l'util.</p>





</body>
</html>













