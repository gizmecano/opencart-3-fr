# opencart-3-fr

[English](README.md) | Français

## Introduction

**opencart-3-fr** est un pack de langue française pour la plateforme de commerce en ligne [OpenCart](http://www.opencart.com/) (à partir de la version 3.0.2.0).

Ce pack comprend des traductions de fichiers pour une localisation française de l'interface d'administration (_backend_) ainsi que de la boutique en ligne (_frontend_).

### Contexte

Ce projet succède à [**opencart-2-fr**](https://github.com/gizmecano/opencart-2-fr/), développé et maintenu de 2015 à 2018, mais la plupart des traductions ont été entièrement retravaillées à partir des sources originales.

### Principes

Ce pack linguistique a été développé avec certains principes de base à l'esprit, à savoir:

- **traductions idiomatiques** : les chaînes de traduction n'ont pas a été générées automatiquement, mais en comprenant le contexte afin de retranscrire la formulation la plus appropriée
- **Prise en charge native de l'`utf-8`** : les caractères accentués et la plupart des signes typographiques communs utilisent le codage `utf-8` standard
- **usages typographiques appropriés** : les règles et les usages typographiques en vigueur dans la rédaction en langue française (espaces et ponctuations notamment) sont respectés
- **jargon technique discret**: les références techniques sont traduites de la manière la plus compréhensible possible
- **formulations non sexistes**: afin d'être aussi inclusives que possible, les traductions utilisent de préférence des tournures ne faisant pas référence au genre des utilisateurs ou des visiteurs

### Variantes

Contrairement au projet qui l'a précédé, ce pack de langue est disponible en deux variantes différentes, toutes deux développées à partir d'une même unique plateforme commune.

  1. la variante libre contient l'ensemble des fichiers nécessaires pour le fonctionnement de base d'une boutique OpenCart : elle devrait s'avérer suffisante dans la plupart des cas
  2. la version complète contient des fichiers supplémentaires requis pour une traduction de diverses extensions liées à des services propriétaires : passerelles de paiements, mode d'expédition, etc.

Cette distinction est due à plusieurs facteurs:

  - conserver une version de base aussi légère que possible pour la plupart des utilisateurs n'utilisant pas les extensions supplémentaires
  - essayer de compenser le temps souvent important passer à traduire des fichiers parfois volumineux mais non nécessaires à une majorité d'utilisateurs

Les fichiers uniquement présents dans la version complète sont listés dans un [document spécifique](cleavage.csv).

## Installation

Chaque fois que vous envisagez d'installer un nouvel élément sur un site Opencart existant (module ou pack linguistique), il est fortement recommandé de le tester au préalable sur un environnement de développement local avant de l'installer sur le site de production.

Pour installer ce pack linguistique, extraire le fichier compressé localement puis transférer les fichiers sur le serveur (en conservant la même structure) sur la base d'un site OpenCart précédemment installé.

Une fois cela fait, afficher l'interface d'administration d'OpenCart et suivre les étapes ci-dessous (à partir d'une installation par défaut en anglais):

1. Aller dans la rubrique `System -> Localisation -> Languages`
2. Cliquer sur le bouton `Add New`
3. Renseigner les valeurs suivantes :
  - _Language Name_ : `French`
  - _Code_ : `fr`
  - _Locale_ : `fr,fr-FR,fr_FR.UTF-8,french`
  - _Status_ : `Enabled`
  - _Sort Order_: `1`
4. Enregistrer ces modifications
5. Aller dans la rubrique `System -> Settings`
6. Cliquer sur l'onglet `Local` et définir les langues standards pour la boutique (_Language_) et le panneau d'administration (_Administration language_) : la langue de l'administration ne changera pas **avant** cette étape)
7. Enregistrer ces modifications
8. Installation terminée

## Impressum

### Licence

opencart-3-fr : un pack de localisation française _opensource_ pour la plateforme de commerce en ligne OpenCart (à partir de la version 3.0.2.0)

--------------------------------------------------------------------------------

Copyright © 2019-2020 P. Mergey

Ce programme est un logiciel libre : vous pouvez le redistribuer et/ou le modifier au titre des clauses de la [Licence publique générale GNU](LICENSE.md), telle que publiée par la Free Software Foundation, soit la version 3 de la licence ou, à votre discrétion, une version ultérieure quelconque.

Ce programme est distribué dans l'espoir qu'il sera utile, mais **SANS AUCUNE GARANTIE**, sans même une garantie implicite de **COMMERCIABILITE** ou **DE CONFORMITE A UNE UTILISATION PARTICULIERE**. Voir la [Licence publique générale GNU](LICENSE.md) pour plus de détails.

Vous devriez avoir reçu un exemplaire de la [Licence publique générale GNU](LICENSE.md) avec ce programme. Si ce n'est pas le cas, vous pouvez consulter [cette page](https://www.gnu.org/licenses/gpl-3.0.fr.html).

### Crédits

Les illustrations ont été réalisées en utilisant:
  - la photographie _Wild Rooster_ de [榮達 陳](https://unsplash.com/@dareen0987), publiée sur [Unsplash](https://unsplash.com/photos/iHzpnUYS3Zc) sous [licence Unsplash](https://unsplash.com/license)
  - la police de caractères [Inter](https://rsms.me/inter/) par Rasmus Andersson, disponible sur [GitHub](https://github.com/rsms/inter) sous [licence SIL](http://scripts.sil.org/OFL)
