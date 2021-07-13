<?php
/**
 * TrcIMPLAN Sitio Web - UrbanismoTacticoPequenasApuestasParaSolucionarProblemasUrbanos
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

namespace Blog;

/**
 * Clase UrbanismoTacticoPequenasApuestasParaSolucionarProblemasUrbanos
 */
class UrbanismoTacticoPequenasApuestasParaSolucionarProblemasUrbanos extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Urbanismo táctico, pequeñas apuestas para solucionar problemas urbanos';
        $this->autor                      = 'Arq. Jair Miramontes Chávez';
        $this->fecha                      = '2019-01-07T12:20';
        // El nombre del archivo a crear
        $this->archivo                    = 'urbanismo-tactico-pequenas-apuestas-para-solucionar-problemas-urbanos-ene2019';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En Torreón, en el transcurso de enero a octubre del 2018 han ocurrido en total 180 atropellamientos a peatones y 159 atropellamientos a ciclistas.';
        $this->claves                     = 'IMPLAN, Torreon, Urbanismo tactico, peatones, urbanismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/UrbanismoTacticoPequenasApuestasParaSolucionarProblemasUrbanos.md';
        // Para el Organizador
        $this->categorias                 = array('Movilidad', 'Vialidad');
        $this->fuentes                    = array('Dirección de tránsito y vialidad', 'OMS');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase UrbanismoTacticoPequenasApuestasParaSolucionarProblemasUrbanos

?>
