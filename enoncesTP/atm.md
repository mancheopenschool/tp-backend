# Distributeur de billets

L'objectif de ce TP est de créer un distributeur de billets en PHP, directement dans la console.

L'utilisateur devra:

- Entrer son code (Maximum 3 essais)
- Demander un montant (multiple de 10 uniquement, inférieur au plafond et au solde)
- Choisir s'il souhaite un ticket ou non

Le distributeur affichera ensuite la distribution des billets (ex: 10€, 20€, 30€ ...) et donnera un ticket si nécessaire avant de remercier l'utilisateur.


```javascript
Bonjour

Merci d'entrer votre code:
1222
Mauvais code! Nouvel essai.
Merci d'entrer votre code:
1234
Entrer le montant désiré
12
Supérieur à 10, et multiples de 10 seulementEntrer le montant désiré
230
Vous ne disposez que de 200 eurosEntrer le montant désiré
40
Voulez-vous un  ticket ? (oui/non)
oui
Montant distribué 10 €
Montant distribué 20 €
Montant distribué 30 €
Montant distribué 40 €
Retirez vos billets
N'oubliez pas votre ticket
Merci de retirer votre carte
```
**Bonus**

### Choix des devises

Permettre à l'utilisateur de choisir une devise, en appliquant un taux de change par-rapport à l'Euro

### Gestion du versement

Permettre à l'utilisateur de verser des espèces (multiples de 10 uniquement) sur son compte

### Gestion du compte sans BDD

Gérer le compte de l'utilisateur (solde, plafond) dans un fichier. Utiliser ce fichier pour chaque opération, même lorsque le programme est fermé
