<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros GobiernoIngresosTotalesPerCapita
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
 * Clase GobiernoIngresosTotalesPerCapita
 */
class GobiernoIngresosTotalesPerCapita extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ingresos Totales Per Cápita en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-ingresos-totales-per-capita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos totales del municipio entre el total de la población. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Matamoros, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '2007-12-31', 'valor' => '1155.87', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '1717.79', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '1623.19', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '1399.66', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '1418.38', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '1594.68', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '1743.11', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '2060.27', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '2112.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '1834.35', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI')); // formateado 0, valor 20, crudo 10
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '4380.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '3839.73', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '3459.51', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '1834.35', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '3907.12', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2016-12-31', 'valor' => '3490.91', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2016-12-31', 'valor' => '3554.27', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2016-12-31', 'valor' => '2625.25', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
El ingreso per cápita a nivel nacional es de:

- 2012 = $2,486.26 
- 2011 = $2,697.76 
- 2010 = $2,458.53 
- 2009 = $2,418.96 
- 2008 = $2,300.63 
- 2007 = $1,865.79 

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoIngresosTotalesPerCapita

?>
