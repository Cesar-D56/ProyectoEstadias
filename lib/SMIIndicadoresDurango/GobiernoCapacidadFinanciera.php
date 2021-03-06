<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresDurango GobiernoCapacidadFinanciera
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

namespace SMIIndicadoresDurango;

/**
 * Clase GobiernoCapacidadFinanciera
 */
class GobiernoCapacidadFinanciera extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Capacidad Financiera en Durango';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-capacidad-financiera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos propios entre gastos corrientes. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Durango, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Durango');
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
            array('fecha' => '2013-12-31', 'valor' => '50.3196', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2014-12-31', 'valor' => '39.7498', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2015-12-31', 'valor' => '44.1100', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2016-12-31', 'valor' => '45.5500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI')); // formateado 0, valor 8, crudo 4
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
            array('region_nombre' => 'Torreón', 'fecha' => '2016-12-31', 'valor' => '95.2800', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2016-12-31', 'valor' => '62.5700', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2016-12-31', 'valor' => '71.9800', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2016-12-31', 'valor' => '19.7200', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2016-12-31', 'valor' => '79.8300', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2016-12-31', 'valor' => '61.6300', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2016-12-31', 'valor' => '45.5500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2016-12-31', 'valor' => '41.5500', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
El indicador de capacidad financiera a nivel nacional es de:

- 2013 = 41.15%
- 2012 = 39.41%
- 2011 = 39.94%
- 2010 = 41.63%
- 2009 = 40.87%
- 2008 = 43.36%
- 2007 = 44.48%

Datos obtenidos de [INEGI. Estadística de finanzas públicas estatales y municipales](http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&c=11289&proy=efipem_fmun)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase GobiernoCapacidadFinanciera

?>
