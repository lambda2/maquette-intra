maquette-intra
==============

Les propositions de maquettes de l'intranet des poussins de 42

Mode d'emploi
==============

1. Si ce n'est pas déja fait, [créez vous un compte sur github](https://github.com/join)
2. Clonez ce dépot avec la commande `git clone git@github.com:Poussins-42/maquette-intra.git`
3. Allez dans le répertoire du dépot `cd maquette-intra`
4. Créez une [branche](http://git-scm.com/book/fr/Les-branches-avec-Git-Gestion-de-branches) rien qu'a vous, avec la commande `git checkout -b <votre uid>`
5. Vous êtes maintenant dans **votre** espace. Vous pouvez y mettre ce que vous voulez.
6. Une fois les modifications faites, vous faites un `git add <vos fichiers>`, `git commit -m "<vos modifications>"`
7. Pour push vos fichiers sur le serveur, `git push origin <branche>` (votre uid) **et non pas** `master` **(qui est la branche principale)**

Autres choses
==============

- Pour aller sur une branche, c'est `git checkout <nom_de_la_branche>`. Ne faites **surtout pas** un `git checkout` seul, ça va tout simplement annuler toutes les modifications depuis votre dernier `git add`.
- Pour lister toutes les branches, faites un `git branch`
