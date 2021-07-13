<?php
/**
 * TrcIMPLAN Sitio Web - SIGMapasTorreon InventarioViviendas
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
 * Clase InventarioViviendas
 */
class InventarioViviendas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre             = 'Inventario de Viviendas';
        $this->autor              = 'Dirección de Planeación Urbana Sustentable IMPLAN';
        $this->fecha              = '2019-03-26T12:23';
        // El nombre del archivo a crear y rutas relativas a las imágenes
        $this->archivo            = 'inventario-viviendas';
        $this->imagen             = 'inventario-viviendas/imagen.jpg';
        $this->imagen_previa      = 'inventario-viviendas/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion        = 'Indicadores por manzana, relacionados con las viviendas totales, habitadas, particulares, particulares habitadas, particulares no habitadas, particulares de uso temporal y particulares deshabitadas. </br></br>';
        $this->claves             = 'Implan, torreon, indicadores vivienda, vivienda habitada, vivienda deshabitada';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio         = 'sig-mapas-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu        = 'Información Geográfica';
        // El estado puede ser publicar, revisar o ignorar
        $this->estado             = 'Publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir     = TRUE;
        // Para el Organizador
        $this->categorias         = array('Bienestar', 'Infraestructura', 'Servicios Públicos', 'Vivienda');
        // Para el botón de ver a pantalla completa
        $this->url                = 'https://implantorreon.carto.com/u/sigimplan/builder/ba020a18-9486-4435-ab21-36dbd8fd675a/embed';
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
<iframe width="100%" height="520" frameborder="0" src="https://implantorreon.carto.com/u/sigimplan/builder/ba020a18-9486-4435-ab21-36dbd8fd675a/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
</br> <b>Fuente: Inventario Nacional de Viviendas, INEGI, 2016.</b>
</br></br></br>
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

} // Clase InventarioViviendas

?>
