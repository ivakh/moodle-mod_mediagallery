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
 * Spanish strings for mediagallery
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod_mediagallery
 * @copyright  NetSpot Pty Ltd
 * @author     Ivan Muñoz <ivakh.cl.tc@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Agregar Galeria';
$string['addanitem'] = 'Agregar Foto';
$string['addbulkitems'] = 'Agregar archivos individuales';
$string['addfiles'] = 'Agregar archivo(s)';
$string['addsamplegallery'] = 'Agregar galeria de ejemplo';
$string['allowcomments'] = 'Permitir comentarios';
$string['allowcomments_help'] = 'Permitir a usuarios comentar en las galerias';
$string['allowlikes'] = 'Permitir Likes';
$string['allowlikes_help'] = 'Permitir a usuarios \' dar like\' a imagenes en las galerias.';
$string['areaitem'] = 'Items';
$string['arealowres'] = 'Baja resolucion';
$string['areathumbnail'] = 'i=Imagen miniatura';
$string['areagallery'] = 'Galerias';
$string['assignedit'] = 'Editar asignación';
$string['assignsubmit'] = 'Enviar asignación';
$string['assignsubmitted'] = 'Asignación enviada';
$string['automatic'] = 'Automatica';
$string['beingprocessed'] = 'Siendo procesado';
$string['bottom'] = 'Fondo';
$string['broadcaster'] = 'Locutor';
$string['broadcaster_help'] = 'Who was the distributor that broadcasted this work?';
$string['caption'] = 'Nombre archivo';
$string['caption_help'] = 'The caption for this item in your gallery. This caption will be displayed alongside the item.';
$string['captionposition'] = 'Caption position';
$string['carousel'] = 'Carousel';
$string['choosecontent'] = 'Seleccione un archivo para cargar o una URL en las opciones siguientes.';
$string['close'] = 'Cerrar';
$string['collection'] = 'Colección';
$string['collectionwasdeleted'] = 'Lo sentimos, esta colección ya no existe y se ha eliminado de este curso.';

// Collection modes.
$string['collmode'] = 'Modo de Colección';
$string['collmode_help'] = 'Colección: Esto decide si la colección será sólo en Moodle, o estará vinculado(a) a theBox. Una vez establecido, este valor no se puede cambiar.

<ul><li>Standard: En este modo, la colección, sus galerías y artículos, se almacenan solamente en Moodle.</li></ul>';

// Collection types.
$string['colltype'] = 'Tipo de Colección';
$string['colltype_help'] = 'El tipo de colección determina qué nivel los usuarios pueden interactuar con la colección y su contenido.
<ul>
<li>Instructor collection: Sólo los usuarios que pueden clasificar la colección pueden agregar / editar contenido dentro de ella. Esto se utiliza principalmente para que los instructores creen colecciones de ejemplo; O un conjunto de galerías sin dejar que los usuarios creen sus propios.</li>
<li>Contributed collection: Permite a los usuarios crear sus propias galerías y elementos, pero la colección no se puede utilizar como parte de una asignación</li>
<li>Assignment collection: Los usuarios sólo pueden ver las galerías que ellos o su grupo (si en el modo de grupo) han creado. Se puede utilizar como parte de una presentación de asignación.</li>
<li>Colección de tareas revisadas por pares: los usuarios pueden ver otras galerías de usuarios / grupos y comentarlas si esas características están activadas. Se puede utilizar como parte de una presentación de asignación.</li></ul>';
$string['colltypeinstructor'] = 'Colección de profesores y/o tutores';
$string['colltypesingle'] = 'Colección única';
$string['colltypecontributed'] = 'Colección colaborativa';
$string['colltypeassignment'] = 'Colección de tareas';
$string['colltypepeerreviewed'] = 'Colección de tareas revisadas por pares';

$string['comments'] = 'Comentarios';
$string['completegallery'] = 'Galeria completa';
$string['configdisablestandardgallery'] = 'Evite que los usuarios creen galerías estándar.';
$string['configenablethebox'] = 'Esto debe habilitarse para que los usuarios puedan crear nuevas colecciones y contenidos basados en theBox. Si está deshabilitada, las colecciones de la caja existentes mostrarán un mensaje diciendo que la actividad no está disponible actualmente. Las colecciones estándar no se verán afectadas.';
$string['configmaxbytes'] = 'Tamaño de archivo predeterminado para todas las colecciones de medios en el sitio (sujeto a límites de curso y otros ajustes locales)';
$string['confirmcollectiondelete'] = 'Confirmar eliminación de la colección';
$string['confirmgallerydelete'] = 'Confirmar eliminación de la galeria';
$string['confirmitemdelete'] = 'Confirmar eliminación de item';
$string['content'] = 'Contenido';
$string['content_help'] = 'El elemento que desea agregar a su galería.';
$string['contentbulk'] = 'Contenido';
$string['contentbulkheader'] = 'Aquí puede subir un archivo zip lleno de medios. Cada archivo dentro del archivo zip se agregará como un elemento en la galería, así que asegúrese de que sólo los archivos que desea cargar están en el archivo antes de enviarlo. Las carpetas dentro del archivo se ignoran.';
$string['contentbulk_help'] = 'Puede seleccionar un archivo comprimido que contenga varias imágenes, que se extraerán en el directorio de imágenes después de cargarlo.';
$string['contentlinked'] = 'Contenido';
$string['contentlinkedinfo'] = 'Este elemento está vinculado al archivo {$a} en theBox.';
$string['contentlinked_help'] = 'Una vez que un elemento está vinculado a un contenido de theBox, no puede cambiar el archivo vinculado.';
$string['contributable'] = 'Contribuyente';
$string['contributable_help'] = 'Cuando una galería es contribuible, permite a otros usuarios agregar contenido a su galería. Sólo se limitarán a editar sus propios artículos. El creador de galería tendrá la capacidad de eliminar elementos de la galería.';
$string['copyright'] = 'Copyright';
$string['copyright_help'] = 'Esto define qué licencia de copyright está establecida para todos los elementos que subas a través de este formulario.';
$string['createdby'] = 'Creada por : {$a}';
$string['creator'] = 'Creador';
$string['datecreated'] = 'Fecha de Creación';
$string['deletegallery'] = 'Borrar galería';
$string['deleteitem'] = 'Borrar item';
$string['deleteitemtype'] = 'Borrar {$a}';
$string['deleteorremovecollection'] = 'Si desea eliminar el enlace a la colección sin eliminar el contenido, haga clic en Enviar<br/><br/>
Si desea eliminar el enlace a la colección y eliminar el contenido dentro del tipo DELETE en el cuadro de texto siguiente y haga clic en Enviar.';

$string['deleteorremovecollectionwarn'] = 'Al eliminarlo, reconoce que está:<br/>

- eliminando este enlace a la colección de medios <br/>
- borrar la colección y / o todas las galerías y todo el contenido de la caja <br/>
- deshabilitar todos los enlaces realizados en otros cursos a esta colección o su contenido';

$string['deleteorremovegallery'] = 'Si desea eliminar el enlace a la galería sin eliminar el contenido, haga clic en Enviar. <br/> <br/>
Si desea eliminar el vínculo a la galería y eliminar el contenido del tipo DELETE en el cuadro de texto siguiente y haga clic en Enviar.';

$string['deleteorremovegallerywarn'] = 'Al eliminarlo, reconoce que está:<br/>
- eliminando este enlace a la galería de medios <br/>
- eliminar la galería de medios y todo el contenido de la caja <br/>
- deshabilitar todos los enlaces realizados en otros cursos a esta galería de medios o su contenido ';
$string['deleteorremoveitem'] = 'Si desea eliminar el elemento de la galería sin eliminar el contenido, haga clic en Enviar.<br/><br/>

Si desea eliminar el enlace a la galería y eliminar el tipo de contenido DELETE en el cuadro de texto siguiente y haga clic en Enviar.';
$string['deleteorremoveitemwarn'] = 'Al eliminarlo, reconoce que está:<br/>
- eliminando este enlace al elemento multimedia <br/>
- borrar el elemento multimedia de la caja <br/>
- deshabilitar todos los enlaces realizados en otros cursos a este elemento multimedia ';
$string['disablestandardgallery'] = 'Desactivar galerías estándar';
$string['displayfullcaption'] = 'Mostrar texto completo';
$string['download'] = 'Descargar';
$string['editgallery'] = 'Editar galeria';
$string['editgallerysettings'] = 'Editar configuracion de galeria';
$string['edititem'] = 'Editar item';
$string['edititemtype'] = 'Editar {$a}';
$string['editthisgallery'] = 'Editar esta galeria';
$string['enablethebox'] = 'Habilitar theBox';
$string['enforcedefaults'] = 'Imponga los valores predeterminados de galería';
$string['enforcedefaults_help'] = 'Si se habilita, se aplican los valores predeterminados de galería determinados por el instructor.';
$string['errorchooseimportoption'] = 'Seleccione una opción para importar';
$string['errornotyouritem'] = 'No puede editar este objeto multimedia, pertenece a otro usuario.';
$string['errortheboxunavailable'] = 'Lo sentimos, parece que theBox no está disponible en este momento. Por favor, inténtelo de nuevo más tarde.';
$string['errortoomanyitems'] = 'Lo sentimos, esta galería ya tiene el número máximo de elementos permitidos ({$a}).';
$string['errortoomanygalleries'] = 'Lo sentimos, usted o su grupo ha excedido el número máximo de galerías permitidas en esta colección ({$a}).';
$string['eventcollectiondeleted'] = 'Colección eliminada';
$string['eventgallerycreated'] = 'Galeria creada';
$string['eventgallerydeleted'] = 'Galeria eliminada';
$string['eventgalleryupdated'] = 'Galeria actualizada';
$string['eventitemcreated'] = 'Item creado';
$string['eventitemdeleted'] = 'Item eliminado';
$string['eventitemupdated'] = 'Item actualizado';
$string['eventgalleryviewed'] = 'Galería vista';
$string['export'] = 'Exportar';
$string['exportascsv'] = 'Exportar como CSV';
$string['exportgallery'] = 'Exportar galeria';
$string['externalurl'] = 'URL Externa';
$string['externalurl_help'] = 'Actualmente los enlaces a imágenes y vídeos de youtube son compatibles.';
$string['filename'] = 'Nombre del archivo';
$string['filesize'] = 'Tamaño del archivo';
$string['foundxresults'] = 'Encontramos {$a} resultado(s):';
$string['gallery'] = 'Galeria';
$string['galleryfocus'] = 'Filtro';
$string['galleryfocus_help'] = 'El enfoque predeterminado de la galería (determina qué tipos de archivos se presentan como el foco de la galería). Si se establece como una galería de YouTube, el enfoque se bloquea en Video.';
$string['galleryname'] = 'Nombre de la galeria';
$string['gallerythumbnail'] = 'Usar imagen miniatura';
$string['gallerythumbnail_help'] = 'Si se selecciona, la miniatura de este elemento se utiliza como miniatura para la galería.';
$string['galleryviewoptions'] = 'Opciones de vista de galería';
$string['galleryviewoptions_help'] = 'Determina las opciones de vista de galería que están disponibles para los estudiantes.';
$string['gridview'] = 'Vista en cuadrícula';
$string['gridviewcolumns'] = 'Columnas en vista de cuadrícula';
$string['gridviewcolumns_help'] = 'En vista de cuadrícula, se muestra el número de columnas.';
$string['gridviewrows'] = 'Filas en vista de cuadrícula';
$string['gridviewrows_help'] = 'En vista de cuadrícula, se muestra el número de filas.';
$string['group'] = 'Grupo';
$string['group_help'] = 'Como eres miembro de varios grupos (o tienes permiso para administrar grupos en este curso), este es el grupo al que deseas asociar la galería.';
$string['information'] = 'Información';
$string['itemdisplay'] = 'Mostrar';
$string['itemdisplay_help'] = 'Incluya este elemento en la pantalla de la galería (por ejemplo, carrusel).';
$string['like'] = 'Like';
$string['likedby'] = 'Liked por';
$string['maxbytes'] = 'Tamaño máximo por artículo';
$string['maxgalleries'] = 'Máximo de galerías por usuario / grupo';
$string['maxgalleries_help'] = 'El número máximo de galerías que puede crear un usuario (o grupo al utilizar modos de grupo) en esta colección.

Nota: para las colecciones de Instructor, esto siempre es ilimitado.';
$string['maxgalleriesreached'] = 'Cantidad máxima de galerías añadidas';
$string['maxitems'] = 'Máximo de elementos por galería';
$string['maxitems_help'] = 'El número máximo de elementos que un usuario puede poner en una galería de esta colección.

Nota: para las colecciones de Instructor, esto siempre es ilimitado.';
$string['maxitemsreached'] = 'Número máximo de elementos agregados';
$string['mediatype'] = 'Tipo de medio';
$string['modulename'] = 'Colección de medio';
$string['modulenameplural'] = 'Colección de medios';
$string['modulename_help'] = 'Utilice el módulo Recopilación de medios para crear galerías de contenido multimedia.

Los usuarios pueden crear sus propias galerías de imágenes, video o audio, ya sea por su cuenta o en grupos.


El contenido subido se presentará en formato de carrusel o de cuadrícula como miniaturas. Haga clic en cualquiera de las miniaturas que la enfoque y le permite navegar a través de la galería. Los usuarios pueden \'dar like\' y comentar el contenido que pueden ver en sus galerías y en otras.';
$string['mediagallery:addinstance'] = 'Añadir una instancia de colección de medios';
$string['mediagallery:comment'] = 'Comentario sobre una galería o artículo de colección de medios';
$string['mediagallery:grade'] = 'Grado de la galería de medios';
$string['mediagallery:like'] = 'Capacidad de dar like a artículos en una colección de medios';
$string['mediagallery:manage'] = 'Administrar una instancia de la colección de medios';
$string['mediagallery:viewall'] = 'Posibilidad de ver todas las galerías en una colección de medios';

$string['mediagalleryfieldset'] = 'Ejemplo de campo de ejemplo personalizado';
$string['mediagalleryname'] = 'Nombre de colección de medios';
$string['mediagalleryname_help'] = 'El nombre que desea dar a su colección de medios.';
$string['mediagallery'] = 'Colección de medios';
$string['mediainformation'] = 'Información';
$string['mediasize'] = 'Tamaño del medio';
$string['mediasizesm'] = 'Pequeña';
$string['mediasizemd'] = 'Mediana';
$string['mediasizelg'] = 'Grande';
$string['medium'] = 'Medio';
$string['medium_help'] = 'El medio utilizado para crear el trabajo (es decir, pintura, fotografía, sonido, etc.).';
$string['metainfobulkheader'] = 'Los valores siguientes se utilizarán como los metadatos iniciales para cada uno de los elementos agregados anteriormente.';
$string['mode'] = 'Tipo de galeria';
$string['mode_help'] = 'Esto define el tipo de contenido que admite la galería. Una vez establecido, este valor no se puede cambiar.

<ul><li>Standard: en este modo, Los usuarios pueden agregar cualquier tipo de contenido multimedia que deseen.</li>
<li>YouTube: en este modo, solo se podrá agregar videos de youtube a la galeria.</li></ul>';
$string['modestandard'] = 'Standard';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['moralrights'] = 'Derechos';
$string['moralrights_help'] = '¿Desea hacer valer sus derechos morales?
Al seleccionar Sí, usted está otorgando su consentimiento para que este elemento pueda usarse potencialmente como una muestra de trabajo.';
$string['noitemsadded'] = 'No se han añadido ítems a esta galería.';
$string['noitemsfound'] = 'No hay items encontrados';
$string['noitemsselected'] = 'No hay items selecionados para exportar';
$string['originalauthor'] = 'Autor original';
$string['originalauthor_help'] = 'Autor original del archivo.';
$string['other'] = 'otro';
$string['otherfiles'] = 'Otros archivos';
$string['others'] = 'otros';
$string['pluginadministration'] = 'Administrar colección de medios';
$string['pluginname'] = 'Colección de medios';
$string['productiondate'] = 'Fecha de producción';
$string['productiondate_help'] = 'The date the original work was produced.';
$string['publisher'] = 'Publicador';
$string['publisher_help'] = 'El publicador (Cualquiera) pertenece a.';
$string['readonlyfrom'] = 'Leer sólo desde';
$string['readonlyto'] = 'Leer sólo para';
$string['reference'] = 'Referencia';
$string['reference_help'] = 'Referencia a la colección (de cualquier) pertenece a:';
$string['removethecollection'] = 'Remover/eliminar la colección';
$string['removecollectionconfirm'] = '¿Estás seguro de que deseas eliminar el enlace a esta colección?';
$string['removegalleryconfirm'] = '¿Estás seguro de que deseas eliminar el enlace a esta galería?';
$string['removefromcollection'] = 'Eliminar de la colección';
$string['removefromgallery'] = 'Eliminar de la galeria';
$string['removeitemconfirm'] = '¿Estás seguro de que deseas eliminar el enlace de este elemento?';
$string['restrictavailableinfo'] = 'Para restringir las fechas en que esta actividad está disponible, utilice la sección Restringir acceso a continuación.';
$string['sample'] = 'Ejemplo';
$string['search'] = 'Buscar';
$string['search_help'] = 'Introduzca las palabras clave que desea buscar.';
$string['searchcourseonly'] = 'Sólo este curso';
$string['searchcourseonly_help'] = '¿Sólo quiere buscar elementos en las galerías dentro de este curso?';
$string['searchdisplayxtoyofzresults'] = 'Total de resultados {$a->total}. Mostrando {$a->from}-{$a->to}:';
$string['searchresults'] = 'Resultado de Búsqueda';
$string['searchtitle'] = 'Buscador de imagenes, video, audios';
$string['selection'] = 'Selección';
$string['settingsavailability'] = 'Disponibilidad';
$string['settingsdisplay'] = 'Mostrar lista';
$string['settingsgallery'] = 'Galeria por defecto';
$string['settingsgallerydisplay'] = 'Mostrar Galeria';
$string['settingsvisibility'] = 'Visibilidad';
$string['storagereport'] = 'Almacenamiento de la colección de medios';
$string['storagetotalusage'] = 'Uso de almacenamiento total en el sitio: {$a}.';
$string['submittedforgrading'] = 'Enviado para calificar';
$string['showall'] = 'Show all';
$string['synclastcompleted'] = 'Sincronización completada por última vez';
$string['syncwiththebox'] = 'Sincronización desde theBox';
$string['tags'] = 'Tags';
$string['theboxisnotenabled'] = 'Desafortunadamente, esta colección no está accesible actualmente ya que está enlazada a theBox, que actualmente no está habilitada.';
$string['thumbnail'] = 'Imagen miniatura';
$string['thumbnail_help'] = 'Puede seleccionar una imagen para utilizarla como miniatura en la galería para este elemento.

Si no suministra uno, se generará uno para usted desde el recurso cargado (para imágenes) o un icono de tipo de archivo utilizado (para otros archivos).';
$string['thumbnailsperpage'] = 'Imagenes miniatura por pagina';
$string['thumbnailsperrow'] = 'Imagenes miniatura por fila';
$string['togglefullscreen'] = 'Cambiar a pantalla completa';
$string['togglesidebar'] = 'Cambiar barra lateral';
$string['toomany'] = 'Demasiadas galerías, borre o cambie el tipo de colección';
$string['top'] = 'Top';
$string['typeall'] = 'Todos los archivos';
$string['typeaudio'] = 'Audio';
$string['typeimage'] = 'Imagen';
$string['typevideo'] = 'Video';
$string['unlike'] = 'Unlike';
$string['uploader'] = 'Subir';
$string['viewgallery'] = 'Ver Galeria';
$string['visibleinstructor'] = 'Visible to instructors only after';
$string['visibleinstructor_help'] = 'Defina la galería como visible para los instructores después de la fecha especificada. Esto puede ser útil para permitir que los instructores accedan antes que a todos los demás usuarios. Los administradores de cursos con los permisos adecuados siempre podrán ver la galería.';
$string['visibleother'] = 'Visible para todos en el curso después de';
$string['visibleother_help'] = 'Defina la galería como visible para otros usuarios después de la fecha especificada. Los administradores de cursos con los permisos adecuados siempre podrán ver la galería.';
$string['you'] = 'Usted';
$string['youmusttypedelete'] = 'Debe escribir DELETE para confirmar la eliminación.';
$string['youtubeurl'] = 'YouTube URL';
