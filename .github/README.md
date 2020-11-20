# opencart-3-fr

English | [Français](README-fr.md)

## Overview

**opencart-3-fr** is a French language pack for the ecommerce platform [OpenCart](http://www.opencart.com/) (from version 3.0.2.0).

This pack brings together translated files for a French localization of the administration interface (_backend_) as well as the online store (_frontend_).

### Background

This project succeeds to [**opencart-2-fr**](https://github.com/gizmecano/opencart-2-fr/), developed and maintained from 2015 to 2018, but most of the translations have been completely reworked from scratch.

### Principles

This language pack has been developed with some basic principles in mind:

- **idiomatic translations**: translation strings did not have been automatically generated, but by understanding the context in order to draft an appropriate formulation
- **native `utf-8` support**: accented characters and most common typographic signs use standard `utf-8` encoding
- **proper typographics usages**: typographic rules and practices used in the French language redaction (spaces and punctuation marks in particular) are respected
- **understated technical jargon**: technical references are translated in the most understandable manner possible
- **gender-neutral formulations**: in order to be as inclusive as possible, translations preferably use language that does not use the gender of users or visitors

### Variants

Unlike the project that preceded it, this language pack is available in two different variants, both developed from a single common platform.

  1. the free variant contains all the files necessary for the basic running of an OpenCart store: it should be sufficient in most cases
  2. the full version contains additional files required for translating various extensions related to proprietary services: payment gateways, shipping methods, etc.

This distinction is due to several factors:

  - keeping a basic version as lighter as possible for most users which are not using the additional extensions
  - attempting to balance for often significant time spent translating files which are sometimes large but not necessary for a majority of users

The files only included in the full version are listed in an [specific document](cleavage.csv).

## Installation

Whenever you plan to install a new item on an existing Opencart website (module or language pack), it is strongly recommended that you test it first on a local development environment before installing it on the production site.

To install this language pack, extract the zipped package locally and transfer the files to the server (keeping the same structure) on the roots of a previously installed OpenCart website.

After that, open your OpenCart backend and follow the steps below:

1. Navigate to `System -> Localisation -> Languages`
2. Click the `Add New` button
3. Fill in the following values :
  - _Language Name_ : `French`
  - _Code_ : `fr`
  - _Locale_ : `fr,fr-FR,fr_FR.UTF-8,french`
  - _Status_ : `Enabled`
  - _Sort Order_: `1`
4. Save these changes
5. Navigate to `System -> Settings`
6. Click on the tab `Local` and define the standard languages for frontend (_Language_) and backend (_Administration language_): backend language will not change **before** this step
7. Save these changes
8. Installation is complete

## Workflow

### Versioning

The working process on this language pack aims to follow [semantic versioning specification](https://semver.org/) according to the steps bellow:

1. `major` (path level)
  - add new folder
  - move existing folder to other path
  - delete obsolete folder
2. `minor` (file level)
  - add new file in existing folder
  - move existing file from existing folder to other one
  - delete obsolete file in existing folder
3. `patch` (item level)
  - add new string in existing file
  - revise or fix existing string in existing file
  - delete obsolete string in existing file

## Contribution

Any suggestions or submissions (translation, optimisation, etc.) might be considered by [opening an issue](https://github.com/gizmecano/opencart-3-fr/issues) into the free variant repository.

## Imprint

### License

opencart-3-fr: a French opensource localization pack for ecommerce platform OpenCart (from version 3.0.2.0)

--------------------------------------------------------------------------------

Copyright © 2019-2020 P. Mergey

This program is free software: you can redistribute it and/or modify it under the terms of the [GNU General Public License](LICENSE.md) as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but **WITHOUT ANY WARRANTY**; without even the implied warranty of **MERCHANTABILITY** or **FITNESS FOR A PARTICULAR PURPOSE**. See the [GNU General Public License](LICENSE.md) for more details.

You should have received a copy of the [GNU General Public License](LICENSE.md) along with this program. If not, see [this page](https://www.gnu.org/licenses/gpl-3.0.en.html).

### Credits

Illustrations were composed using:
  - _Wild Rooster_ photo by [榮達 陳](https://unsplash.com/@dareen0987), published on [Unsplash](https://unsplash.com/photos/iHzpnUYS3Zc) under [Unsplash license](https://unsplash.com/license)
  - [Inter](https://rsms.me/inter/) font by Rasmus Andersson, available on [GitHub](https://github.com/rsms/inter) under [SIL license](http://scripts.sil.org/OFL)
