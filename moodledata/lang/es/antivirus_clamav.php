<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'antivirus_clamav', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV no se ha ejecutado. El mensaje de error de retorno es {$a}. Éste es el output de Clam:';
$string['clamfailureonupload'] = 'Cuando ClamAV falle';
$string['configclamactlikevirus'] = 'Trata los ficheros como virus';
$string['configclamdonothing'] = 'Trata ficheros como si estuvieran bien';
$string['configclamfailureonupload'] = 'Si has configurado clam para analizar los ficheros subidos, pero está mal configurado o falla al ejecutarse por alguna razón desconocida, ¿cómo debería comportarse?. Si eliges "Trata los ficheros como virus", los ficheros serán movidos a la zona de cuarentena o serán borrados. Si eliges "Trata los ficheros como si estuvieran bien", los ficheros serán movidos al directorio de destino del modo habitual. En cualquier caso los administradores serán alertados de que clam ha fallado. Si eliges "Trata los ficheros como virus" y por alguna razón clam falla al ejecutarse (normalmente debido a que has introducido una ruta de clam incorrecta), TODOS los ficheros que se suban será movidos a la zona de cuarentena definida o serán borrados. Ten cuidado con esta configuración.';
$string['configpathtoclam'] = 'Ruta de ClamAV. Probablemente la ruta sea parecida a /usr/bin/clamscan o /usr/bin/clamdscan. Es necesaria para que ClamAV se ejecute.';
$string['configquarantinedir'] = 'Si quieres que ClamAV mueva los ficheros infectados a un directorio de cuarentena, introdúcelo aquí. El servidor web debe tener permisos de escritura sobre este directorio. Si lo dejas en blanco o introduces un directorio que no existe o en el que no se puede escribir, los ficheros infectados serán borrados. No incluyas la barra inclinada al final de la ruta.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ejecutar Clam al cargar un archivo, pero la ruta para Clam AV, {$a}, no es válida.';
$string['pathtoclam'] = 'Ruta de ClamAV';
$string['pluginname'] = 'Antivirus ClamAV';
$string['quarantinedir'] = 'Directorio de cuarentena';
$string['unknownerror'] = 'Se ha producido un error desconocido con Clam.';
