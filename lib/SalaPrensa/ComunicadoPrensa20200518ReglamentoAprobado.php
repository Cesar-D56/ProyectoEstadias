<?php
/**
 * TrcIMPLAN Sitio Web - ComunicadoPrensa20200518ReglamentoAprobado
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

namespace SalaPrensa;

/**
 * Clase ComunicadoPrensa20200518ReglamentoAprobado
 */
class ComunicadoPrensa20200518ReglamentoAprobado extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'H. Cabildo de Torreón aprueba la propuesta del IMPLAN del nuevo Reglamento de Desarrollo Urbano y Construcción.';
        $this->autor                      = 'Lic. Maira Ivonne Flores Reyes';
        $this->fecha                      = '2020-05-18T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = '2020-05-18-comunicado-reglamento-aprobado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Agradecemos en mucho al Honorable Cabildo de Torreón la aprobación por unanimidad de la propuesta del IMPLAN del nuevo Reglamento de Desarrollo Urbano y Construcción de Torreón, dicho instrumento contribuirá sustancialmente a mejorar la calidad de vida, la prosperidad y competitividad urbana de la ciudad.';
        $this->claves                     = 'IMPLAN, Torreon, reglamento, desarrollo urbano, construcción, urbanismo';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/SalaPrensa/ComunicadoPrensa20200518ReglamentoAprobado.md';
        // Para el Organizador
        $this->categorias                 = array();
        $this->fuentes                    = array();
        $this->regiones                   = array('Torreón');
    } // constructor

} // Clase ComunicadoPrensa20200518ReglamentoAprobado

?>
