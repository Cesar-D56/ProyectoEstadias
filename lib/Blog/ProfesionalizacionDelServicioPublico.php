<?php
/**
 * TrcIMPLAN Sitio Web - ProfesionalizacionDelServicioPublico
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
 * Clase ProfesionalizacionDelServicioPublico
 */
class ProfesionalizacionDelServicioPublico extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La profesionalización del servicio público';
        $this->autor                      = 'Lic. Miriam Janeth González Quintana';
        $this->fecha                      = '2020-11-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'profesionalizacion-del-servicio-publico-nov-2020';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Tanto la administración pública, como cualquier entidad empresarial, necesitan procesos para la contratación, capacitación y baja de personal. Para el sector público los esquemas de contratación no son tan diferentes, sin embargo, la gran distinción se encuentra en el objetivo del servicio que se ofrece.';
        $this->claves                     = 'IMPLAN, Torreon, administracion publica, profesionalizacion, servicio publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/ProfesionalizacionDelServicioPublico.md';
        // Para el Organizador
        $this->categorias                 = array('Gobierno');
        $this->fuentes                    = array('IMPLAN');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase ProfesionalizacionDelServicioPublico

?>
