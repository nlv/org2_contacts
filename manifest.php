<?php
$manifest = array(
    'name' => 'org2_contacts',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin (nlvomsk@gmail.com)',
    'description' => 'Доработка модуля контактов',
    'is_uninstallable' => true,
    'published_date' => '2018-04-01',
    'type' => 'module',
    'version' => '1.4.0',
    'dependencies' => array(
      array(
       'id_name' => 'org2_doms',
       'version' => '1.3',
      ),
      )
);
$installdefs = array(
    'id' => 'org2_contacts',
    'language' => array(
        array (
            'from' => '<basepath>/source/language/Contacts/ru_RU.contacts.php',
            'to_module' => 'Contacts',
            'language' => 'ru_RU',
        ),
    ),
    'vardefs' => array (
        array (
            'from' => '<basepath>/source/vardefs/Contacts/vardefs.contacts.php',
            'to_module' => 'Contacts',
        ),
    ),
);
