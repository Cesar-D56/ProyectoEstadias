<?php
/**
 * TrcIMPLAN Sitio Web - SIGMapasTorreon RutasTransportePublicoUrbano
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SIGMapasTorreon;

/**
 * Clase RutasTransportePublicoUrbano
 */
class RutasTransportePublicoUrbano extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre             = 'Rutas de Transporte Público Urbano';
        $this->autor              = 'Dirección de Planeación Urbana Sustentable IMPLAN';
        $this->fecha              = '2019-04-09T12:14';
        // El nombre del archivo a crear y rutas relativas a las imágenes
        $this->archivo            = 'rutas-transporte-publico-urbano';
        $this->imagen             = 'rutas-transporte-publico-urbano/imagen.jpg';
        $this->imagen_previa      = 'rutas-transporte-publico-urbano/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion        = 'Rutas de transporte público urbano autorizadas, clasificadas por ruta y ramal.';
        $this->claves             = 'transporte publico, rutas transporte, IMPLAN, torreon, camiones';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio         = 'sig-mapas-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu        = 'Información Geográfica';
        // El estado puede ser publicar, revisar o ignorar
        $this->estado             = 'Publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir     = TRUE;
        // Para el Organizador
        $this->categorias         = array('Movilidad', 'Vialidad');
        // Para el botón de ver a pantalla completa
        $this->url                = 'https://implantorreon.carto.com/u/sigimplan/builder/1f4ffdad-4378-4fd0-9845-349b68a078f3/embed';
        $this->url_etiqueta       = 'Ver a pantalla completa';
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                   = new \Base\SchemaPostalAddress();
        $region->addressCountry   = 'MX';
        $region->addressRegion    = 'Coahuila de Zaragoza';
        $region->addressLocality  = 'Torreón';
        // Instancia de SchemaMapa con el mapa en CartoDB
        $mapa                     = new \Base\SchemaMap();
        $mapa->mapType            = 'VenueMap';
        $mapa->url                = $this->url;
        $mapa->url_label          = $this->url_etiqueta;
        $mapa->theMap             = <<<FINAL
<iframe width="100%" height="520" frameborder="0" src="https://implantorreon.carto.com/u/sigimplan/builder/1f4ffdad-4378-4fd0-9845-349b68a078f3/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
</br> <b>Fuente: Dirección General de Vialidad y Movilidad Urbana.</b>
</br></br>
FINAL;
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                    = new \Base\SchemaPlace();
        $lugar->address           = $region;
        $lugar->hasMap            = $mapa;
        // Instancia de SchemaCreativeWork lo empaca con más datos
        $paquete                  = new \Base\SchemaCreativeWork();
        $paquete->big_heading     = true;
        $paquete->name            = $this->nombre;
        $paquete->description     = $this->descripcion;
        $paquete->author          = $this->autor;
        $paquete->datePublished   = $this->fecha;
        $paquete->headline_style  = $this->encabezado_color;
        $paquete->image           = $this->imagen;
        $paquete->contentLocation = $lugar;
        // El contenido es una instancia de SchemaCreativeWork
        $this->contenido          = $paquete;
    } // constructor

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        // Sin caja JS
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, si tiene una imagen, se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion = sprintf("<a href=\"%s\"><img src=\"%s\"><br>\n\n%s</a>", "{$this->archivo}.html", $this->imagen, $this->descripcion);
        } else {
            $this->redifusion = sprintf('<a href="%s">%s</a>', "{$this->archivo}.html", $this->descripcion);
        }
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase RutasTransportePublicoUrbano

?>
