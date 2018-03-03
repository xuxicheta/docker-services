<?php
/*
 * Dokuwiki's Main Configuration File - Local Settings
 * Auto-generated by config plugin
 * Run for user: admin
 * Date: Mon, 18 Jul 2016 13:46:24 +0000
 */

$conf['title'] = 'ЦПТА';
$conf['lang'] = 'ru';
$conf['license'] = '0';
$conf['useacl'] = 1;
$conf['defaultgroup'] = 'cosmos-connect';
$conf['superuser'] = '@admin';
$conf['htmlok'] = 1;
$conf['updatecheck'] = 0;
$conf['userewrite'] = '2';
$conf['dnslookups'] = 0;
$conf['proxy']['user'] = 'admin';
$conf['proxy']['pass'] = '<b>cG9wbzM4OWdycmtycg==';
$conf['plugin']['authldap']['server'] = 'ldap.qbik';
$conf['plugin']['authldap']['usertree'] = 'ou=People,dc=ldap,dc=qbik';
$conf['plugin']['authldap']['grouptree'] = 'ou=Groups,dc=ldap,dc=qbik';
$conf['plugin']['authldap']['userfilter'] = '(|(objectclass=account))';
$conf['plugin']['authldap']['groupfilter'] = '(&(|(objectclass=posixGroup)))';
$conf['plugin']['authldap']['version'] = 3;
$conf['plugin']['authldap']['binddn'] = 'cn=admin,dc=ldap,dc=qbik';
$conf['plugin']['authldap']['bindpw'] = 'ldappassword_nokot';

// end auto-generated content