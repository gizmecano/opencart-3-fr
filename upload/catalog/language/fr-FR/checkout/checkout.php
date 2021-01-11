<?php
/******************************************************************************
 * Copyright (C) 2019-2021 P. Mergey
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/#GPL>.
 *****************************************************************************/
// Heading
$_['heading_title'] = 'Validation de commande';
// Text
$_['text_cart'] = 'Panier d’achat';
$_['text_checkout_option'] = 'Étape %s : options de la commande';
$_['text_checkout_account'] = 'Étape %s : compte et détails de facturation';
$_['text_checkout_payment_address'] = 'Étape %s : détails de facturation';
$_['text_checkout_shipping_address'] = 'Étape %s : détails de livraison';
$_['text_checkout_shipping_method'] = 'Étape %s : mode de livraison';
$_['text_checkout_payment_method'] = 'Étape %s : moyen de paiement';
$_['text_checkout_confirm'] = 'Étape %s : confirmer la commande';
$_['text_modify'] = 'Modifier →';
$_['text_new_customer'] = 'Nouveau client';
$_['text_returning_customer'] = 'Compte client existant';
$_['text_checkout'] = 'Options de validation de commande : ';
$_['text_i_am_returning_customer'] = 'J’ai déjà procédé à la création d’un compte client';
$_['text_register'] = 'Inscription';
$_['text_guest'] = 'Commander sans s’enregistrer';
$_['text_register_account'] = 'En créant un compte, vous pourrez faire vos achats plus rapidement, connaître le statut de vos commandes et garder trace de vos achats précédents';
$_['text_forgotten'] = 'Mot de passe oublié';
$_['text_your_details'] = 'Vos informations personnelles';
$_['text_your_address'] = 'Votre adresse';
$_['text_your_password'] = 'Votre mot de passe';
$_['text_agree'] = 'J’ai lu et accepté les <a href="%s" class="agree"><b>%s</b></a>';
$_['text_address_new'] = 'Utiliser une nouvelle adresse';
$_['text_address_existing'] = 'Utiliser une adresse existante';
$_['text_shipping_method'] = 'Veuillez sélectionner le mode de livraison pour cette commande.';
$_['text_payment_method'] = 'Veuillez sélectionner le moyen de paiement pour cette commande.';
$_['text_comments'] = 'Ajouter un commentaire à propos de votre commande';
$_['text_recurring_item'] = 'Élément récurrent';
$_['text_payment_recurring'] = 'Profil de paiement';
$_['text_trial_description'] = '%s chaque %d %s(s) pour %d paiement(s) soit';
$_['text_payment_description'] = '%s chaque %d %s(s) pour %d paiement(s)';
$_['text_payment_cancel'] = '%s chaque %d %s(s) jusqu’à annulation';
$_['text_day'] = 'jour';
$_['text_week'] = 'semaine';
$_['text_semi_month'] = 'demie-semaine';
$_['text_month'] = 'mois';
$_['text_year'] = 'année';
// Column
$_['column_name'] = 'Nom du produit';
$_['column_model'] = 'Référence';
$_['column_quantity'] = 'Quantité';
$_['column_price'] = 'Prix unitaire';
$_['column_total'] = 'Total';
// Entry
$_['entry_email_address'] = 'Adresse électronique';
$_['entry_email'] = 'Adresse électronique';
$_['entry_password'] = 'Mot de passe';
$_['entry_confirm'] = 'Confirmer le mot de passe';
$_['entry_firstname'] = 'Prénom';
$_['entry_lastname'] = 'Nom de famille';
$_['entry_telephone'] = 'Numéro de téléphone';
$_['entry_address'] = 'Adresse';
$_['entry_company'] = 'Société';
$_['entry_customer_group'] = 'Groupe de clients';
$_['entry_address_1'] = 'Adresse 1';
$_['entry_address_2'] = 'Adresse 2';
$_['entry_postcode'] = 'Code postal';
$_['entry_city'] = 'Localité';
$_['entry_country'] = 'Pays';
$_['entry_zone'] = 'Subdivision administrative';
$_['entry_newsletter'] = 'Je souhaite m’abonner à la lettre d’informations de %s.';
$_['entry_shipping'] = 'Mes adresses de livraison et de facturation sont identiques.';
// Error
$_['error_warning'] = 'Attention : une erreur s’est produite lors du traitement de votre commande ! Si le problème persiste, veuillez essayer de sélectionner un autre moyen de paiement ou bien contactez le propriétaire de la boutique en <a href="%s">cliquant ici</a>.';
$_['error_login'] = 'Attention : correspondance introuvable entre ce nom d’utilisateur et ce mot de passe.';
$_['error_attempts'] = 'Attention : votre compte a dépassé le nombre autorisé de tentatives de connexion. Veuillez essayer à nouveau dans 1 heure.';
$_['error_approved'] = 'Attention : votre compte nécessite d’avoir été approuvé avant que vous puissiez vous connecter.';
$_['error_exists'] = 'Attention : cette adresse électronique est déjà enregistrée !';
$_['error_firstname'] = 'Attention : le prénom doit contenir entre 1 et 32 caractères !';
$_['error_lastname'] = 'Attention : le nom de famille doit contenir entre 1 et 32 caractères !';
$_['error_email'] = 'Attention : l’adresse électronique ne semble pas être valide !';
$_['error_telephone'] = 'Attention : le numéro de téléphone doit contenir entre 3 et 32 caractères !';
$_['error_password'] = 'Attention : le mot de passe doit contenir entre 4 et 20 caractères !';
$_['error_confirm'] = 'Attention : le mot de passe de confirmation ne correspond pas au mot de passe saisi !';
$_['error_address_1'] = 'Attention : l’adresse doit contenir entre 3 et 128 caractères !';
$_['error_city'] = 'Attention : le nom de la localité doit contenir entre 2 et 128 caractères !';
$_['error_postcode'] = 'Attention : le code postal doit contenir entre 2 et 10 caractères !';
$_['error_country'] = 'Attention : vous devez sélectionner un pays !';
$_['error_zone'] = 'Attention : vous devez sélectionner une subdivision administrative !';
$_['error_agree'] = 'Attention : vous devez accepter les %s';
$_['error_address'] = 'Attention : vous devez sélectionner l’adresse !';
$_['error_shipping'] = 'Attention : un mode de livraison est requis !';
$_['error_no_shipping'] = 'Attention : aucune option d’expédition n’est disponible. Veuillez <a href="%s">contacter l’assistance</a> !';
$_['error_payment'] = 'Attention : un moyen de paiement est requis !';
$_['error_no_payment'] = 'Attention : aucune option de paiement n’est disponible. Veuillez <a href="%s">contacter l’assistance</a> !';
$_['error_custom_field'] = 'Attention : %s est requis !';
