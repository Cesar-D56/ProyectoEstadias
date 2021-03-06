<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaProduccionBrutaTotalPerCapita
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
 * Clase EconomiaProduccionBrutaTotalPerCapita
 */
class EconomiaProduccionBrutaTotalPerCapita extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Producción Bruta Total Per Cápita en Matamoros';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-produccion-bruta-total-per-capita';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Producción bruta total (de los sectores industria, comercio y servicios) entre población total. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Matamoros, Macroeconomía, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Macroeconomía', 'Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI', 'IMCO');
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
            array('fecha' => '1998-12-31', 'valor' => '3080.72', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $311.30. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 9.89630'),
            array('fecha' => '2003-12-31', 'valor' => '6803.48', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $605.44. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 11.23720'),
            array('fecha' => '2008-12-31', 'valor' => '15373.03', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'La producción bruta total per cápita en dólares es de $1,111.37. Calculada con el tipo de cambio Fix al cierre del año correspondiente al dato en pesos: 13.83250'),
            array('fecha' => '2013-12-31', 'valor' => '18450.05', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('fecha' => '2018-12-31', 'valor' => '40.68', 'fuente_nombre' => 'IMCO')); // formateado 0, valor 10, crudo 8
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
            array('region_nombre' => 'Torreón', 'fecha' => '2018-12-31', 'valor' => '364.49', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2018-12-31', 'valor' => '242.15', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2018-12-31', 'valor' => '33.07', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2018-12-31', 'valor' => '40.68', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2018-12-31', 'valor' => '264.94', 'fuente_nombre' => 'IMCO'),
            array('region_nombre' => 'Coahuila', 'fecha' => '2013-12-31', 'valor' => '218704.95', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Durango', 'fecha' => '2013-12-31', 'valor' => '63345.06', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'),
            array('region_nombre' => 'Nacional', 'fecha' => '2013-12-31', 'valor' => '118115.69', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI'));
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
La producción bruta total per cápita a nivel nacional es de:

- 2008 = $103,094.93 
- 2003 = $60,324.54 
- 1998 = $37,765.57 

La producción bruta total per cápita en dólares a nivel nacional es de:

- 2008 = $7,453.09 
- 2003 = $5,368.29 
- 1998 = $3,816.13 

Calculados con el tipo de cambio Fix publicado por el Banxico al cierre del año correspondiente.

Datos obtenidos de [INEGI Censos económicos.](http://www3.inegi.org.mx/sistemas/saic/)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase EconomiaProduccionBrutaTotalPerCapita

?>
