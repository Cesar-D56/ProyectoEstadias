<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SeguridadLesionesPorAccidenteDeTransito
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
 * Clase SeguridadLesionesPorAccidenteDeTransito
 */
class SeguridadLesionesPorAccidenteDeTransito extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Lesiones por accidente de tránsito en Gómez Palacio';
        $this->fecha       = '2018-07-26T08:46:43';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-lesiones-por-accidente-de-transito';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad mensual de lesiones culposas ocasionadas en un accidente de tránsito.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Seguridad, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Movilidad');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
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
            array('fecha' => '2017-01-31', 'valor' => '25', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-02-28', 'valor' => '25', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-03-31', 'valor' => '21', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-04-30', 'valor' => '39', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-05-31', 'valor' => '26', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-06-30', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-07-31', 'valor' => '20', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-08-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-09-30', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-10-31', 'valor' => '66', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-11-30', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2017-12-31', 'valor' => '39', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-01-31', 'valor' => '38', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-02-28', 'valor' => '21', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-03-31', 'valor' => '17', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-04-30', 'valor' => '20', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-05-31', 'valor' => '3', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-06-30', 'valor' => '36', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-07-31', 'valor' => '52', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-08-31', 'valor' => '56', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-09-30', 'valor' => '54', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-10-31', 'valor' => '31', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-11-30', 'valor' => '50', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2018-12-31', 'valor' => '46', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-01-31', 'valor' => '40', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-02-28', 'valor' => '30', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-03-31', 'valor' => '28', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-04-30', 'valor' => '26', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('fecha' => '2019-05-31', 'valor' => '38', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública')); // formateado 0, valor 58, crudo 29
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
            array('region_nombre' => 'Torreón', 'fecha' => '2019-05-31', 'valor' => '24', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Gómez Palacio', 'fecha' => '2019-05-31', 'valor' => '38', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Lerdo', 'fecha' => '2019-05-31', 'valor' => '14', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'Matamoros', 'fecha' => '2019-05-31', 'valor' => '0', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'),
            array('region_nombre' => 'La Laguna', 'fecha' => '2019-05-31', 'valor' => '76', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública'));
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
Descarga la [Base de Datos] (http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php)
OBSERVACIONES_FINAL;
    } // observaciones

} // Clase SeguridadLesionesPorAccidenteDeTransito

?>
