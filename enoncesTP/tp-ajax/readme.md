# Ajax

Ajax est un "protocole" qui vous permet de récupérer des données en Javascript / JQuery
Il peut être utilisé pour lire des fichiers locaux, interroger un serveur Web ...

Il est très complet, et vous pouvez trouver les principales options ici :

* [Documentation officielle - EN]
* [Documentation traduite - FR]

   [Documentation officielle - EN]: <http://api.jquery.com/jquery.ajax/>
   [Documentation traduite - FR]: <http://www.jquery-fr.com/manuel/Les-fonctions-AJAX/ajax/>
   
Prenez le temps de parcourir l'ensemble des options.

Exemple de fichier Javascript utilisant Ajax:

```javascript
jQuery(document).ready(function($) {
    $.ajax({
        url: '/path/to/file (ou URL)',
        type: 'GET',
        dataType: 'json',
        data: {param1: 'value1'},
    })
    .done(function() {
        //en cas de succes
        console.log("success");
    })
    .fail(function() {
        //en cas d'erreur
        console.log("error");
    })
    .always(function() {
        //quoiqu'il arrive
        console.log("complete");
    });
    
});
```
**Question: Que fait ce morceau de code ?**

### Parser un fichier JSON

"Parser" signifie que l'on extrait des données au sein d'en ensemble de données.

Ici, parser le fichier JSON signifie récupérer les données dont on a besoin parmi l'ensemble des données reçues.

On travaille principalement avec des objets. Par exemple:

```javascript
{
    "id": 0,
    "school": "MOS",
    "town": "Granville",
    "country": "france"
}
```

Il est obligatoire de séparer toutes les lignes par une virgule, **sauf après la dernière**

Ici, l'objet a plusieurs propriétés: `id`, `school`, `town` et `country`.

Pour acceder à la valeur d'une propriété d'un objet, on utilise le `.`

Si, par exemple, nous reçevons les données de ce fichier dans une variable `data`, on accèdera à "school" grâce à `data.school`, qui renverra "MOS".

Il est également possible d'utiliser des tableaux au sein d'un fichier JSON:

```javascript
{
    "id": 0,
    "school": "MOS",
    "town": "Saint-Lo",
    "country": "france",
    "pupils": [
        "Steve ",
        "Max",
        "Celine",
        "Mike",
        "Sam"
    ]
}
```

Si l'on souhaite parcourir le tableau des élèves, on utilisera data.pupils.
`data.pupils[0]` renverra "Steve".

Utiliser un tableau "clé->valeur" est aussi possible:

```javascript
{
    "id": 0,
    "school": "MOS",
    "town": "Saint-Lo",
    "country": "france",
    "teachers": [
        {"name":"FX","location":"Granville","topic":"Système"},
        {"name":"Willy","location":"Caen","topic":"Design"},
        {"name":"Sylvain","location":"Caen","topic":"Dev"}
    ]
}
```

La matière enseignée par FX sera récupérée grâce à `data.teachers[0].topic`

# TP

Téléchargez le fichier [user.json](json/user.json) sur votre serveur.
Créer une application avec HTML, JQuery et Ajax qui affichera à un utilisateur s'il est autorisé à se connecter ou non, selon les informations (login, password) qu'il aura rentré dans un formulaire.

Echec: `Connection impossible`

Succès: `Bienvenue {nom} {prenom}`

Il n'est pas nécessaire d'ajouter du style pour le moment.