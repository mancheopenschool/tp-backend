# Pendu

L'objectif de ce TP est de créer un jeu de pendu en PHP, directement dans la console.

Une fois le mot proposé sous la forme:

```
D_______
```

L'utilisateur devra:

- Proposer une lettre OU
- Proposer un mot

Il dispose de 10 essais au total

```javascript
D________

Votre proposition?
E
DE___E__E

Votre proposition?
Z
Non. Il vous reste 9 chances.
DE___E__E

Votre proposition?
DEVINETTE

Bravo! Vous avez réussi en 5 essais.
Rejouer (oui/non)?
```
**Bonus**

### Doublons = une chance en moins

Si l'utilisateur a déjà proposé une lettre, il perd automatiquement une chance

### Niveau de difficulté

Proposer un choix entre 3 niveaux de difficulté (longueur / complexité des mots)

### Gestion de dictionnaires

Gérer le(s) dictionnaire(s) dans un fichier. Utiliser ce fichier lors du jeu, , même si le programme est fermé.

### Dictionnaire collaboratif

Permettre à l'utilisateur de proposer un mot dans l'un des dictionnaires. Si ce mot n'existe pas déjà, l'ajouter afin qu'il puisse être utilisé ensuite, même si le programme est fermé.
