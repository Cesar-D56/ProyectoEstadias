<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaInversionExtranjeraDirecta
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase EconomiaInversionExtranjeraDirecta
 */
class EconomiaInversionExtranjeraDirecta extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Inversión Extranjera Directa en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-inversion-extranjera-directa';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Promedio de inversión entre 2008 y 2012.';
        $this->claves      = 'IMPLAN, Matamoros, Macroeconomía';
        // Para el Organizador
        $this->categorias  = array('Macroeconomía');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía');
        $this->regiones    = array('Matamoros');
    } // constructor

    /**
     * Datos Estructura
     *
     * @return array Arreglo con arreglos asociativos
     */
    public function datos_estructura() {
        return array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('fecha' => '2012-12-31', 'valor' => '0.61', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía')); // formateado 0, valor 2, crudo 1
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
            'valor' => array('enca' => 'Dato', 'formato' => 'dinero'),
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
            array('region_nombre' => 'Torreón', 'fecha' => '2012-12-31', 'valor' => '46.50', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2012-12-31', 'valor' => '214.49', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2012-05-31', 'valor' => '9.79', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2012-12-31', 'valor' => '0.61', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2012-12-31', 'valor' => '271.40', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'),
            array('region_nombre' => 'Nacional', 'fecha' => '2012-12-31', 'valor' => '20685.96', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía'));
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
El promedio de IED nacional de 2008 a 2012 es de 20685.96 millones de dólares, por lo que la IED de La Laguna representa el 1.31% de la nacional.

Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)
y [Secretaría de Economía](http://www.economia.gob.mx/comunidad-negocios/competitividad-normatividad/inversion-extranjera-directa/estadistica-oficial-de-ied-en-mexico)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaInversionExtranjeraDirecta

?>
