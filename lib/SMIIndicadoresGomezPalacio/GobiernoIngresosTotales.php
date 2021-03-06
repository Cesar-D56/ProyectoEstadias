<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio GobiernoIngresosTotales
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
 * Clase GobiernoIngresosTotales
 */
class GobiernoIngresosTotales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Ingresos Totales en Gómez Palacio';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-ingresos-totales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos totales por municipio.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
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
            array('fecha' => '2007-12-31', 'valor' => '633417899.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2008-12-31', 'valor' => '939654384.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2009-12-31', 'valor' => '1112511574.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2010-12-31', 'valor' => '779450508.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2011-12-31', 'valor' => '1002767622.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2012-12-31', 'valor' => '1127248678.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '1065239676.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2013-12-31', 'valor' => '1065239676.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '929690716.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '1274095475.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '1373333250.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI')); // formateado 0, valor 22, crudo 11
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '3068872858.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '1373333250.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '534912945.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '210636119.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '5187755172.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2016-12-31', 'valor' => '10456589387.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2016-12-31', 'valor' => '6334445171.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2016-12-31', 'valor' => '320998782933.00', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
El promedio nacional de los ingresos totales por municipio es de:

- 2012 = 118495956.6
- 2011 = 127070246.1
- 2010 = 114373415.8
- 2009 = 111150577.4
- 2008 = 104258227.4
- 2007 = 83404076.21

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoIngresosTotales

?>
