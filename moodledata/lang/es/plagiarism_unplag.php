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
 * Strings for component 'plagiarism_unplag', language 'es', branch 'MOODLE_31_STABLE'
 *
 * @package   plagiarism_unplag
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempts'] = 'Intentos realizados';
$string['check_all_submitted_assignments'] = 'Compruebe todas las tareas enviadas';
$string['check_confirm'] = '¿Está seguro de que quiere empezar la comprobación con el plugin de prevención de plagio UNPLAG?';
$string['check_file'] = 'Iniciar escaneo';
$string['check_start'] = 'Calculando grado de originalidad de Unplag en proceso';
$string['check_type'] = 'Modo de detección de plagio';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no se ha ejecutado durante al menos 30 min - El Cron debe estar configurado para permitir que UNPLAG funcione correctamente.';
$string['defaultsdesc'] = 'Los siguientes ajustes son predeterminados cuando está activado el Módulo de Actividades UNPLAG';
$string['defaultupdated'] = 'Datos predeterminados actualizados';
$string['delete'] = 'Eliminar';
$string['deletedwarning'] = 'No se pudo encontrar este archivo; es posible que el usuario lo haya eliminado.';
$string['exclude_citations'] = 'Excluir automaticamente las Citas y Referencias';
$string['exclude_self_plagiarism'] = 'Excluir autoplagio';
$string['explainerrors'] = 'Esta página muestra todos los archivos que se encuentran en estado de error. <br/> Cuando los archivos son eliminados en esta página, no podrán ser reenviados para comprobarlos y los errores no se mostrarán a los profesores o estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la lista';
$string['filereset'] = 'Se ha restablecido un archivo para volver a comprobarlo con UNPLAG';
$string['fileresubmitted'] = 'Archivo puesto en lista para su nueva comprobación';
$string['generalinfo'] = 'Información general';
$string['getscore'] = 'Obtener la puntuación';
$string['heldevents'] = 'Eventos realizados';
$string['heldeventsdescription'] = 'Se trata de comprobaciones que no se completaron en el primer intento y se colocaron en la lista, para volver a ser comprobados, lo que impide que los sucesos posteriores se completen y pueden necesitar más información. Algunas de estas comprobaciones pueden no ser relevantes para UNPLAG.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'El(los) archivo(s) no pueden contener más de 100 000 palabras ni tener un tamaño superior a 70MB';
$string['min_30_words'] = 'Se requieren al menos 30 palabras';
$string['module'] = 'Módulo';
$string['my_library'] = 'Doc vs Catálogo';
$string['name'] = 'Nombre';
$string['no_index_files'] = 'Excluir las presentaciones de la Biblioteca Institucional';
$string['noreceiver'] = 'No se ha especificado la dirección del receptor';
$string['pending'] = 'Archivo pendiente para su comprobación por UNPLAG';
$string['plagiarism'] = 'Plagio potencial';
$string['plagiarism_run_success'] = 'Archivo enviado a la verificación por plagio';
$string['pluginname'] = 'Plugin de detección de plagio UNPLAG';
$string['previouslysubmitted'] = 'Previamente presentado como';
$string['processing'] = 'Este archivo ha sido enviado a UNPLAG, ahora se encuentra a la espera de que el análisis esté disponible';
$string['progress'] = 'Escaneando';
$string['receivernotvalid'] = 'Dirección de receptor no válida.';
$string['refresh'] = 'Actualizar la página para ver los resultados';
$string['report'] = 'Ver informe completo';
$string['reportready'] = 'Reporte listo';
$string['resubmit'] = 'Reenviar';
$string['savedconfigfailed'] = 'Se ha introducido una combinación ID de Cliente / Combinación secreta de la API incorrecta. UNPLAG ha sido desactivado, por favor inténtelo de nuevo.';
$string['savedconfigsuccess'] = 'Configuración de detección de plagio guardada';
$string['scoreavailable'] = 'UNPLAG ha procesado este archivo y ya está disponible el informe.';
$string['scorenotavailableyet'] = 'UNPLAG aún no ha procesado este archivo.';
$string['showwhenclosed'] = 'Cuando la Actividad está cerrada';
$string['similarity'] = 'Similitud';
$string['similarity_sensitivity'] = 'Ocultar similitudes con un  porcentage menor que (%)';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Notificar al estudiante sobre la Política de Privacidad de UNPLAG';
$string['studentdisclosuredefault'] = 'Todos los archivos subidos serán sometidos al sistema de detección de plagio UNPLAG.';
$string['studentdisclosure_help'] = 'Este texto se mostrará a todos los estudiantes en la página de carga del archivo.';
$string['studentemailcontent'] = 'El archivo que envió a {$a->modulename} en {$a->coursename} ya ha sido procesado por el sistema de detección de plagios UNPLAG
{$a->modulelink}';
$string['studentemailsubject'] = 'Archivo procesado por UNPLAG';
$string['submitondraft'] = 'Comprobar archivo cuando se sube por primera vez';
$string['submitonfinal'] = 'Comprobar cuando estudiante pone documento para evaluación';
$string['toolarge'] = 'Archivo demasiado grande para ser comprobado por UNPLAG';
$string['unknownwarning'] = 'Se ha producido un error al intentar enviar este archivo a UNPLAG';
$string['unplag'] = 'Plugin de detección de plagio UNPLAG';
$string['unplag_api_secret'] = 'API Secreta';
$string['unplag_api_secret_help'] = 'API Secreta proporcionada por UNPLAG para acceder a la API. La puede encontrar en  <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplag_client_id'] = 'ID de Cliente';
$string['unplag_client_id_help'] = 'ID de cliente proporcionado por UNPLAG para acceder a la API. Lo puede encontrar en <a href="https://unplag.com/profile/apisettings">https://unplag.com/profile/apisettings</a>';
$string['unplagdebug'] = 'Depuración';
$string['unplagdefaults'] = 'Ajustes predeterminados de UNPLAG';
$string['unplag_draft_submit'] = 'Cuando el archivo debe de ser procesado por UNPLAG';
$string['unplag:enable'] = 'Permitir a los profesores de activar/desactivar UNPLAG para sus actividades';
$string['unplag_enableplugin'] = 'UNPLAG activado para {$a}';
$string['unplagfiles'] = 'Archivos de UNPLAG';
$string['unplag_lang'] = 'Idioma';
$string['unplag_lang_help'] = 'Código de idioma suministrado por UNPLAG';
$string['unplag:resetfile'] = 'Permite que el profesor vuelva a enviar el archivo a UNPLAG después de producirse un error';
$string['unplag_settings_url_text'] = 'Abrir una cuenta de Administrador de Unplag.com para ver o copiar el ID del Cliente y las llaves Secretas  API';
$string['unplag_show_student_report'] = 'Mostrar informe de similitud al estudiante';
$string['unplag_show_student_report_help'] = 'Reporte de similitud proporciona la lista de las partes de la información que fueron plagiados y las fuentes donde UNPLAG ha encontrado este contenido por primera vez';
$string['unplag_show_student_score'] = 'Mostrar grado de similitud al estudiante';
$string['unplag_show_student_score_help'] = 'La taza de similitud es el porcentaje del contenido que coincide con el contenido de otras fuentes.';
$string['unplag_studentemail'] = 'Enviar correo electrónico al Estudiante';
$string['unplag_studentemail_help'] = 'Se le enviará un correo electrónico al estudiante cuando se haya procesado su archivo para hacerle saber que su informe está disponible.';
$string['unplag:vieweditreport'] = 'Permitir al Profesor ver y modificar el informe completo de Unplag';
$string['unplag:viewreport'] = 'Permitir que el Profesor vea el informe completo de UNPLAG';
$string['unsupportedfiletype'] = 'Archivo no compatible con UNPLAG';
$string['use_unplag'] = 'Activar UNPLAG';
$string['useunplag_assign_desc_param'] = 'Para desbloquear ajustes de Unplag';
$string['useunplag_assign_desc_value'] = 'Establecer ajustes de envíos → Requerir que los estudiantes hagan clic en el botón de enviar = Sí';
$string['use_unplag_help'] = 'Para utilizar el plugin, primero configure la opción Requerir que los estudiantes hagan clic en el botón Enviar  en la posición "Sí" (Configuración de envíos).';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos en espera del cron y {$a->countheld} eventos que están retenidos para volver a ser comprobados';
$string['web'] = 'Doc vs Internet';
$string['web_and_my_library'] = 'Doc vs Internet + Catálogo';
