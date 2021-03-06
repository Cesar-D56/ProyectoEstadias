<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon AmpliacionZaragozaSur
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

namespace IBCColoniasTorreon;

/**
 * Clase AmpliacionZaragozaSur
 */
class AmpliacionZaragozaSur extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Ampliación Zaragoza Sur';
        $this->fecha       = '2017-06-15T10:51:20';
        // El nombre del archivo a crear
        $this->archivo     = 'ampliacion-zaragoza-sur';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Ampliación Zaragoza Sur en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Ampliación Zaragoza Sur';
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 7071,
                    'Porcentaje de población masculina' => 50.79,
                    'Porcentaje de población femenina' => 49.21,
                    'Porcentaje de población de 0 a 14 años' => 39.96,
                    'Porcentaje de población de 15 a 64 años' => 57.25,
                    'Porcentaje de población de 65 y más años' => 2.42,
                    'Porcentaje de población no especificada' => 0.37,
                    'Fecundidad promedio' => 2.48,
                    'Porcentaje de población con discapacidad' => 2.90
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.80,
                    'Población Económicamente Activa masculina' => 74.55,
                    'Población Económicamente Activa femenina' => 25.45,
                    'Población Ocupada' => 90.35,
                    'Población Ocupada masculina' => 73.76,
                    'Población Ocupada femenina' => 26.24,
                    'Población Desocupada' => 9.65,
                    'Derechohabiencia' => 62.81
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1859,
                    'Ocupación por Vivienda' => 3.80,
                    'Viviendas con Electricidad' => 99.37,
                    'Viviendas con Agua' => 41.97,
                    'Viviendas con Drenaje' => 78.39,
                    'Viviendas con Televisión' => 92.96,
                    'Viviendas con Automóvil' => 34.95,
                    'Viviendas con Computadora' => 13.80
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 128,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 58.59,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 16.41,
                    'Tercera actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Tercera actividad porcentaje' => 10.16,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 8.59,
                    'Quinta actividad nombre' => 'Educativos',
                    'Quinta actividad porcentaje' => 3.12
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.4915515813706,
            'Centro longitud' => -103.376593585686
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
##Valor Catastral
<table>
 <tr>
 <th><center><b>UBICACIÓN</b></center></th>
 <th><center><b>AÑO 2016</b></center></th>
 <th><center><b>AÑO 2017</b></center></th>
 <th><center><b>AÑO 2018</b></center></th>
 </tr> 
 
 <tr>
 <td><center>AMPLIACIÓN ZARAGOZA SUR</center>
 <td><center>$101.00</center></br>
 <td><center>$104.54</center></td>
 <td><center>$110.81</center></td>
 </tr> 
 
</table>
FINAL;
    } // resena

} // Clase AmpliacionZaragozaSur

?>
