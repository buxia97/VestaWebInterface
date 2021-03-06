<?php

/** 
*
* Vesta Web Interface
*
* Copyright (C) 2018 Carter Roeser <carter@cdgtech.one>
* https://cdgco.github.io/VestaWebInterface
*
* Vesta Web Interface is free software: you can redistribute it and/or modify
* it under the terms of version 3 of the GNU General Public License as published 
* by the Free Software Foundation.
*
* Vesta Web Interface is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
* 
* You should have received a copy of the GNU General Public License
* along with Vesta Web Interface.  If not, see
* <https://github.com/cdgco/VestaWebInterface/blob/master/LICENSE>.
*
*/

$ulang = array
    (
    'ar' => 'ar_EG.utf8',
    'bs' => 'bs_BA.utf8',
    'cn' => 'zh_CN.utf8',
    'cz' => 'cs_CZ.utf8', 
    'da' => 'da_DK.utf8',
    'de' => 'de_DE.utf8',
    'el' => 'el_GR.utf8',
    'en' => 'en_US.utf8',
    'es' => 'es_US.utf8',
    'fa' => 'fa_IR',
    'fi' => 'fi_FI.utf8',
    'fr' => 'fr_FR.utf8',
    'hu' => 'hu_HU.utf8',
    'id' => 'id_ID.utf8',
    'it' => 'it_IT.utf8',
    'ja' => 'ja_JP.utf8',
    'ka' => 'ka_GE.utf8',
    'nl' => 'nl_NL.utf8',
    'no' => 'nn_NO.utf8',
    'pl' => 'pl_PL.utf8',
    'pt-BR' => 'pt_BR.utf8',
    'pt' => 'pt_PT.utf8',
    'ro' => 'ro_RO.utf8',
    'ru' => 'ru_RU.utf8',
    'se' => 'sv_SE.utf8',
    'tr' => 'tr_TR.utf8',
    'tw' => 'zh_TW.utf8',
    'ua' => 'uk_UA.utf8',
    'vi' => 'vi_VN'
);

$errorcode = array
    (
    "1" => "Not enough arguments provided.",
    "2" => "Invalid object or argument.",
    "3" => "Object does not exist.",
    "4" => "Object already exists.", 
    "5" => "Object is suspended.",
    "6" => "Object is already unsuspended.",
    "7" => "Object is in use by another object.",
    "8" => "Object cannot be created because of hosting package limits.",
    "9" => "Wrong password.",
    "10" => "Object cannot be accessed.",
    "11" => "Subsystem is disabled.",
    "12" => "Configuration is broken.",
    "13" => "Not enough disk space.",
    "14" => "Server is busy.",
    "15" => "Connection failed.",
    "16" => "Server is not responding.",
    "17" => "Server is not responding.",
    "18" => "Update operation failed.",
    "19" => "Update operation failed.",
    "20" => "Service restart failed."
);

$countries = array
    (
    'ar' => 'العربية',
    'bs' => 'Bosanski / босански',
    'cn' => '汉语',
    'cz' => 'čeština',
    'da' => 'dansk',
    'de' => 'Deutsch',
    'el' => 'ελληνικά',
    'en' => 'English',
    'es' => 'español',
    'fa' => 'فارسی',
    'fi' => 'Finnish',
    'fr' => 'français',
    'hu' => 'Hungarian',
    'id' => 'Indonesian',
    'it' => 'italiano',
    'ja' => '日本語',
    'ka' => 'ქართული',
    'nl' => 'Dutch',
    'no' => 'norsk',
    'pl' => 'Język polski',
    'pt-BR' => 'português do Brasil',
    'pt' => 'português',
    'ro' => 'Romanian',
    'ru' => 'ру́сский язы́к',
    'se' => 'svenska',
    'tr' => 'Türkçe',
    'tw' => '臺灣華語',
    'ua' => 'українська мова',
    'vi' => 'Tiếng Việt / 㗂越'
);

$currencies = array
    (
    'usd' => '&#36;',
    'aed' => '&#1583;.&#1573;',
    'afn' => '&#1547;',
    'all' => 'L',
    'amd' => 'դր.',
    'ang' => '&#402;',
    'aoa' => 'Kz',
    'ars' => '&#36;',
    'aud' => '&#36;',
    'awg' => '&#402;',
    'azn' => '&#8380;',
    'bam' => 'KM',
    'bbd' => '&#36;',
    'bdt' => '&#2547;',
    'bgn' => '&#1083;&#1074;',
    'bif' => 'Fr',
    'bmd' => '&#36;',
    'bnd' => '&#36;',
    'bob' => 'Bs.',
    'brl' => 'R&#36;',
    'bsd' => '&#36;',
    'bwp' => 'P',
    'bzd' => '&#36;',
    'cad' => '&#36;',
    'cdf' => 'Fr',
    'chf' => 'CHF',
    'clp' => '&#36;',
    'cny' => '&yen;',
    'cop' => '&#36;',
    'crc' => '&#8353;',
    'cve' => '&#36;',
    'czk' => 'K&#269;',
    'djf' => 'Fdj',
    'dkk' => 'kr',
    'dop' => '&#36;',
    'dzd' => 'د.ج',
    'egp' => 'ج.م',
    'etb' => 'Br',
    'eur' => '&euro;',
    'fjd' => '&#36;',
    'fkp' => '&#163;',
    'gbp' => '&pound;',
    'gel' => 'ლ',
    'gip' => '&#163;',
    'gmd' => 'D',
    'gnf' => 'Fr',
    'gtq' => 'Q',
    'gyd' => '&#36;',
    'hkd' => '&#36;',
    'hnl' => 'L',
    'hrk' => 'kn',
    'htg' => 'G',
    'huf' => 'Ft',
    'idr' => 'Rp',
    'ils' => '&#8362;',
    'inr' => '&#x20B9;',
    'isk' => 'kr',
    'jmd' => '&#36;',
    'jpy' => '&yen;',
    'kes' => 'KSh',
    'kgs' => 'som',
    'kmf' => 'Fr',
    'krw' => '&#8361;',
    'kyd' => '&#36;',
    'kzt' => '〒',
    'lak' => '&#8365;',
    'lbp' => 'ل.ل',
    'lkr' => '&#8360;',
    'lrd' => '&#36;',
    'lsl' => 'L',
    'mad' => '.د.م',
    'mdl' => 'L',
    'mga' => 'Ar',
    'mkd' => '&#1076;&#1077;&#1085;',
    'mmk' => 'K',
    'mnt' => '&#8366;',
    'mop' => 'P',
    'mro' => 'UM',
    'mur' => '&#8360;',
    'mvr' => 'MVR',
    'mwk' => 'MK',
    'mxn' => '&#36;',
    'myr' => 'RM',
    'mzn' => 'MTn',
    'nad' => '&#36;',
    'ngn' => '&#8358;',
    'nio' => 'C&#36;',
    'nok' => 'kr',
    'npr' => '&#8360;',
    'nzd' => '&#36;',
    'pab' => 'B/.',
    'pen' => 'S/.',
    'pgk' => 'K',
    'php' => '&#8369;',
    'pkr' => '&#8360;',
    'pln' => 'z&#322;',
    'pyg' => '&#8370;',
    'qar' => '&#65020;',
    'ron' => 'Lei',
    'rsd' => 'РС&#1044;',
    'rub' => '&#402;',
    'rwf' => 'FRw',
    'sar' => '&#65020;',
    'sbd' => '&#36;',
    'scr' => '&#8360;',
    'sek' => 'kr',
    'sgd' => '&#36;',
    'shp' => '&#163;',
    'sll' => 'Le',
    'sos' => 'Sh',
    'srd' => '&#36;',
    'std' => 'Db',
    'svc' => '&#8353;',
    'szl' => 'L',
    'thb' => '&#3647;',
    'tjs' => 'SM',
    'top' => 'T&#36;',
    'try' => 'TL',
    'ttd' => '&#36',
    'twd' => '&#36;',
    'tzs' => 'Sh',
    'uah' => '&#8372;',
    'ugx' => 'USh',
    'uyu' => '&#36;',
    'uzs' => '&#1083;&#1074;',
    'vnd' => '&#8363;',
    'vuv' => 'Vt',
    'wst' => 'T',
    'xaf' => 'Fr',
    'xcd' => '&#36;',
    'xof' => 'Fr',
    'xpf' => 'Fr',
    'yer' => '&#65020;',
    'zar' => 'R',
    'zmw' => 'ZK',
);
?>