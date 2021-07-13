<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SeguridadAccidentesDeTransitoDondeLaPersonaResponsableSeFugo
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SeguridadAccidentesDeTransitoDondeLaPersonaResponsableSeFugo
 */
class SeguridadAccidentesDeTransitoDondeLaPersonaResponsableSeFugo extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Accidentes de tránsito donde la persona responsable se fugó en Gómez Palacio';
        $this->fecha       = '2018-07-25T14:29:04';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-accidentes-de-transito-donde-la-persona-responsable-se-fugo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Porcentaje de accidentes de tránsito ocurridos en el año, en los que la persona responsable se fugó';
        $this->claves      = 'IMPLAN, Gómez Palacio, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Gómez Palacio');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // datos_estructura

    /**
     * Datos
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos() {
        return array(
            array('fecha' => '2015-12-31', 'valor' => '28.8000', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '24.2000', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2017-12-31', 'valor' => '19.0000', 'fuente_nombre' => 'INEGI'),
            array('fecha' => '2018-12-31', 'valor' => '23.0000', 'fuente_nombre' => 'INEGI')); // formateado 0, valor 8, crudo 4
    } // datos

    /**
     * Otras Regiones Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones_estructura() {
        return array(
            'region_nombre' => array('enca' => 'Región', 'formato' => 'texto'),
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto'));
    } // otras_regiones_estructura

    /**
     * Otras regiones
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function otras_regiones() {
        return array(
            array('region_nombre' => 'Torreón', 'fecha' => '2018-12-31', 'valor' => '4.5000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2018-12-31', 'valor' => '23.0000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2018-12-31', 'valor' => '14.4000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2018-12-31', 'valor' => '4.7000', 'fuente_nombre' => 'INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '11.3600', 'fuente_nombre' => 'INEGI'));
    } // otras_regiones

    /**
     * Mapas
     *
     * @return string Código HTML con el iframe de Carto
     */
    public function mapas() {
        return NULL;
    } // mapas

    /**
     * Observaciones
     *
     * @return string Markdown
     */
    public function observaciones() {
        return <<<OBSERVACIONES_FINAL
Fuente: INEGI. Accidentes de tránsito terrestre en zonas urbanas y suburbanas
Cálculo realizado con el total de accidentes y el total de personas que se fugaron.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadAccidentesDeTransitoDondeLaPersonaResponsableSeFugo

?>
