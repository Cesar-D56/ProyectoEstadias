<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SustentabilidadIndiceDeGestionDeCalidadDelAire
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
 * Clase SustentabilidadIndiceDeGestionDeCalidadDelAire
 */
class SustentabilidadIndiceDeGestionDeCalidadDelAire extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Índice de Gestión de Calidad del Aire en Gómez Palacio';
        $this->fecha       = '2015-07-14T11:54:56';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-indice-de-gestion-de-calidad-del-aire';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Incluido en el subíndice "Manejo Sustentable del Medio Ambiente" Mide los esfuerzos que dedica la administración de la ciudad a la gestión de la calidad del aire.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Índice de Competitividad Urbana, Medio Ambiente, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Índice de Competitividad Urbana', 'Medio Ambiente', 'Recursos Naturales');
        $this->fuentes     = array('IMCO');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('fecha' => '2008-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2009-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2010-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2011-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2012-12-31', 'valor' => '1', 'fuente_nombre' => 'IMCO'),
            array('fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 12, crudo 6
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '0', 'fuente_nombre' => 'IMCO'));
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
Unidades: Variable discreta que asigna valores de 0 a 3, según la medición de la calidad del aire (se da el valor de: 1 si mide calidad, 2 si la reporta, 3 si cuenta con PROAIRE, 0 en otro caso). No se penaliza a las ciudades que no tienen la obligación de medir su calidad del aire
de acuerdo con la NOM-156-SEMARNAT-2012, por lo que a ésas se les asigna el valor 3. Fuente: IMCO, con información al 2013.
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SustentabilidadIndiceDeGestionDeCalidadDelAire

?>
